<!-- 
    This file is used by the updateprof.php file to allow the user to upload new data and save it to the profile table in the
    database. The information is input in updateprof.php and sent here, and it includes the profile picture, favorite restaurant,
    and bio of the user. There is also a check performed to ensure that the input image is an acceptable size/type, and a check
    to ensure that the user is not attempting to perform a SQL injection (in other words, the variables are sanitized).

    Written by: Kollin Labowski
-->

<?php
session_start();

define('KB', 1024);
define('MB', 1048576);

/*
* Read in information from the updateprof.php file using the POST global variable.
*/

if (isset($_POST['prof-submit'])) {
    require 'dbhandler.php';
   
    $uname = $_SESSION['username'];

    $file = $_FILES['prof-image'];
    $file_name = $file['name'];
    $file_tmp_name = $file['tmp_name'];
    $file_error = $file['error'];
    $file_size = $file['size'];

    $favrest = $_POST['favrest'];
    $bio = $_POST['bio'];

    //Check if the picture input is the correct size and type or if some other error has occured

    $ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

    $allowed = array('jpg', 'jpeg', 'png', 'svg');

    $new_name = uniqid('', true).".".$ext;
    $destination = '../uploads/'.$new_name;

    //Perform a sanitization of the variables to ensure that a SQL injection was not attempted

    $sql = "UPDATE profile SET picpath=?, favrest=?, bio=? WHERE uname=?";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: ../updateprof.php?error=SQLInjection");
        exit();
    }else{
        mysqli_stmt_bind_param($stmt, "ssss", $destination, $favrest, $bio, $uname);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);

        move_uploaded_file($file_tmp_name, $destination);
        header("Location: ../updateprof.php?success=UploadSuccess");
        exit();
    }
}