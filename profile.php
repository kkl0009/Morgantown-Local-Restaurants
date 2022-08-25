<!-- 
    This file is used to display the profile information of the current user of the web application. The information is read in from the databases "profile"
    and "users". This class includes the header at the top to allow the user to navigate to other parts of the site. It also has a link to the updateprof.php
    file, a sister file used by the user to update information within the table. This is also the page that the user is brought to upon logging in to their
    account. The user can change their profile picture, their favorite restaurant, and their bio. Their additional information, however, is immutable.

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
        $sqlusers = "SELECT * FROM users WHERE uname='$prof_user';";

        $res = mysqli_query($conn, $sqlpro);
        $row = mysqli_fetch_array($res);
        $photo = $row['picpath'];
        $favRest = $row['favrest'];
        $bio = $row['bio'];

        $res2 = mysqli_query($conn, $sqlusers);
        $row2 = mysqli_fetch_array($res2);
        $lName = $row2['lname'];
        $email = $row2['email'];
?>

    <!--
        The following code is used for displaying the profile picture
    -->
    <script>
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
    </script>

<!--
    The following section is used to display the current user's information to the screen for their review
-->
<div class="bg-cover">
<div class="h-100 center-me text-center">
    <div class="my-auto">
        <form action="includes/upload-helper.php" method="POST" enctype="multipart/form-data">
            <div class="inputarea">
                <img src="images/prt.jpg" onclick="triggered();" id="prof-display">
                <label for="prof-image" id="uname-style"><?php echo $theName; echo " "; echo $lName;?></label>
                <h3>Username: <?php echo $prof_user; ?></h3>
                <h4>Email: <?php echo $email; ?></h4>
                <h4>Favorite Restaurant: <?php echo $favRest; ?></h4>
                <p>Bio: <?php echo $bio; ?></p>
                <a href="updateprof.php">Edit</a>
            </div>
        </form>
    </div>
</div>
</div>


<!-- 
    Returns the user to the login page if they have not successfully logged in. Called in the case the site tries to access the profile page before the user
    has logged in so as to avoid errors.
-->
<?php
}else{
    header("Location: login.php");
    exit();
}
?>

</main>