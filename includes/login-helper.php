<!-- 
    This file is used by the login.php page to allow the determination to be made of whether the input credentials are valid
    so that the user may log in. A sanitization of variables is performed to ensure that the user is not attempting to perform
    a SQL injection, and the username and password are checked for validity. Only in the case that both fields are valid and
    match will the user be allowed to log in to the site.

    Written by: Kollin Labowski
-->

<?php
if(isset($_POST['login-submit']))
{
    //Read in the appropriate information from login.php using the POST global variable 
    require 'dbhandler.php';
    $uname_email = $_POST['uname'];
    $passw = $_POST['pwd'];

    //Sees if either field was not filled in by the user
    if(empty($uname_email) || empty($passw))
    {
        header("Location: ../login.php?error=EmptyField");
        exit();
    }

    //Sanitization of variables is performed to ensure that information is kept safe and secure.
    $sql = "SELECT * FROM users WHERE uname=? OR email=?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql))
    {
        header("Location: ../login.php?error=SQLInjection");
        exit();
    }
    else
    {
        mysqli_stmt_bind_param($stmt, "ss", $uname_email, $uname_email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $data = mysqli_fetch_assoc($result);

        //Determines whether the input username belongs to a member in the users table of the database
        if(empty($data))
        {
            header("Location: ../login.php?error=UserDNE");
            exit();
        }
        else
        {
            $pass_check = password_verify($passw, $data['password']);

            //Determines whether the correct password was input for the given username
            if($pass_check == true)
            {
                session_start();
                $_SESSION['uid'] = $data['uid'];
                $_SESSION['fname'] = $data['fname'];
                $_SESSION['username'] = $data['uname'];

                header("Location: ../profile.php?login=Success");
                exit();
            }
            else
            {
                header("Location: ../login.php?error=WrongPass");
                exit();
            }
        }
    }
}
else
{
    header("Location: ../login.php");
    exit();
}