<!-- 
    This class is to be used along with the profile.php class. It can be navigated to from the profile page, and allows the user to change the information that
    displays on their profile page, specifically their profile picture, their favorite restaurant, and their bio. This information is read in and stored within
    the profile table along with the users username. It also include a button to navigate back to the original profile page if the user decides they do not want
    to make any changes to their account.

    Written by: Kollin Labowski
-->

<?php
require 'includes/header.php';
require 'includes/dbhandler.php';
?>

<main>

<link rel="stylesheet" href="css/profile.css">

<!-- 
    The following code is used to read in the appropriate information from the database for the user to review.
-->

<?php 
if(isset($_SESSION['uid'])) {
    $prof_user = $_SESSION['username'];
    $theName = $_SESSION['fname'];
    $sqlpro = "SELECT * FROM profile WHERE uname='$prof_user';";

    $res = mysqli_query($conn, $sqlpro);
    $row = mysqli_fetch_array($res);
    $photo = $row['picpath'];
?>

    <!--
        The following code is used for displaying the profile picture
    -->    

    <!--<script>
        function triggered(){
            document.querySelector("#prof-image").click();
        }
    
        function preview(e){
            if(e.files[0]){
                var reader = new FileReader();
    
                reader.onload = function(e){
                    document.querySelector('#prof-display').setAttribute('src',e.target.result);
                }
                reader.readAsDataURL(e.files[0]);
    
            }
        }
    </script>-->

<!-- 
    The section below allows the user to input the information they would like to replace their current information.
-->
<div class="bg-cover">
<div class="h-100 center-me text-center">
    <div class="my-auto">
        <form action="includes/upload-helper.php" method="POST" enctype="multipart/form-data">
            <div class="inputarea">
                <div class="innerarea">
                    <h3>Edit profile</h3>
                </div>
                <div class="innerarea">
                    <input type="text" name="favrest" id="favrest" class="form-control" placeholder="Favorite Restaurant" required>
                </div>
                <div class="innerarea">
                    <textarea name="bio" id="bio" cols="30" rows="10" placeholder="Tell us about yourself..." style="text-align: center;" required></textarea>
                </div>
                <button type="submit" name="prof-submit" class="btn btn-outline-success btn-lg btn-block">Update</button>
                <a href="profile.php">Return</a>
            </div>
        </form>
    </div>
</div>
</div>

<!-- 
    Redirects the user to the login page if they are not yet logged in
-->

<?php
}else{
    header("Location: login.php");
    exit();
}
?>

</main>