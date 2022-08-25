<!-- 
    This file is used by the signup.php file to allow the user to create a new account. The information is read from the signup
    page to this file, which writes the appropriate information to the users table in the database. The information read in
    includes the username, the email, password/confirmed password, first name, and last name of the person creating the account.
    If the first password does not match the second confirmed password, the user will not be allowed to create a new account and
    nothing will be input to the database.

    Written by: Kollin Labowski
-->

<?php
if(isset($_POST['signup-submit']))
{
    require 'dbhandler.php';

    //Read in the appropriate information from the POST global variable
    $username = $_POST['uname'];
    $email = $_POST['email'];
    $passw = $_POST['pwd'];
    $pass_rep = $_POST['con-pwd'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];

    if($passw !== $pass_rep)
    {
        header("Location: ../signup.php?error=diffPasswords&fname=".$fname."&lname=".$lname."&uname=".$username);
        exit();
    }
    else
    {
        //Sanitize the inputs to protect against SQL injections
        $sql = "SELECT uname FROM users WHERE uname=?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql))
        {
            header("Location: ../signup.php?error=SQLInjection");
            exit();
        }
        else
        {
            //Make sure that the username that the user input was a unique username so they will be able to log in
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $check = mysqli_stmt_num_rows($stmt);
            if($check > 0)
            {
                header("Location: ../signup.php?error=UsernameTaken");
                exit();
            }
            else
            {
                //Sanitize the inputs to ensure that the user is not attempting to perform a SQL injection
                $sql = "INSERT INTO users (lname, fname, email, uname, password) VALUES (?, ?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql))
                {
                    header("Location: ../signup.php?error=SQLInjection");
                    exit();
                }
                else
                {
                    //Place everything into the table, including the password with a hash performed to it
                    $hashedPass = password_hash($passw, PASSWORD_BCRYPT);
                    mysqli_stmt_bind_param($stmt, "sssss", $lname, $fname, $email, $username, $hashedPass);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_store_result($stmt);

                    $sqlImg = "INSERT INTO profile (uname) VALUES ('$username')";
                    mysqli_query($conn, $sqlImg);

                    header("Location: ../signup.php?signup=success");
                    exit();
                }
            }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
}
else
{
    header("location: ../signup.php");
    exit();
}