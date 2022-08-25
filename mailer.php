<!--
    This class is used along with mailbox.php to allow admins of the website to send out announcements about deals
    or new restaurants in the Morgantown area. The user can create a message with a title, a description, and a
    hyperlink to a website or php page related to the message. Uses the mailbox-helper.php file in the includes folder
    to actually save the input data to the mailbox table in the database.

    Written by: Kollin Labowski
-->

<?php 
require 'includes/header.php';
require 'includes/dbhandler.php';
?>

<!-- 
    The following section is used to read in the data from the user
-->

<main>
<link rel="stylesheet" href="css/mailer.css">
<script src="js/upload-display.js"></script>
<?php
if (isset($_SESSION['uid'])) {
?>    
<div class="h-50 center-me text-center">
    <div class="my-auto upload-container">
        <form action="includes/mailbox-helper.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <input type="text" name="title" id="title" class="form-control" placeholder="Title" required>
                <input type="text" name="link" id="link" class="form-control" placeholder="Link" required>
            </div>
            <div class="form-group">
                <textarea name="descript" id="descript" cols="135" rows="7" placeholder="Message" style="text-align: center;"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" name="mailbox-submit" class="btn btn-outline-success btn-lg btn-block">Send</button>
            </div>
        </form>
    </div>
</div>

<div class="mailbox-upload">

</div>

<!-- 
    Sends the user back to the login page if they are not logged in, requiring the user to be logged in to access this page
-->
<?php 
}else{
    header("Location: ../login.php?error=Login");
    exit();
}
?>
</main>