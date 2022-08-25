<!-- 
    This class is used in conjunction with the mailer.php and mailbox.php files. It is used to write in information that was input
    and read from the user in the mailer.php file to the mailbox table in the database. The mailbox.php file later will read the
    information stored in the table to display the appropriate message. A sanitization of the variables that were input is also
    done to ensure that the user is not attempting to perform a SQL injection.

    Written by: Kollin Labowski
-->

<?php 
require 'dbhandler.php';
define('MB', 1048576);

/*
* Must first read in all of the appropriate values from the mailer.php using the POST variable
*/
if(isset($_POST['mailbox-submit']))
{
    $file = $_FILES['gallery-image'];
    $file_name = $file['name'];
    $file_tmp_name = $file['tmp_name'];
    $file_error = $file['error'];
    $file_size = $file['size'];

    $title = $_POST['title'];
    $descript = $_POST['descript'];
    $link = $_POST['link'];

    $ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

    $allowed = array('jpg', 'jpeg', 'png', 'svg');

    $new_name = uniqid('', true).".".$ext;
    $destination = '../mailImgs/'.$new_name;

    $sql = "INSERT INTO mailbox (title, descript, picpath, link) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: ../login.php?error=SQLInjection");
        exit();
    }else{
        mysqli_stmt_bind_param($stmt, "ssss", $title, $descript, $new_name, $link);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);

        move_uploaded_file($file_tmp_name, $destination);
        header("Location: ../mailer.php?success=UploadSuccess");
        exit();
    }
}

