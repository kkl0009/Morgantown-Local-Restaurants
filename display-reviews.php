<!-- 
    This file is used for displaying reviews on each of the restaurant pages. It is used in conjunction with the 
    restpage.php file. In addition to displaying the different reviews, an additional function was added to the
    program which allows it to display different emoji faces depending on the rating the reviewer gives the restaurant.

    Written by: Kollin Labowski
-->

<?php

$servename = "localhost";
$DBuname = "debian-sys-maint";
$DBPass = "iHPXOSo2gtNuLnq7";
$DBname = "group6";

$conn = mysqli_connect($servename, $DBuname, $DBPass, $DBname);

if (!$conn) {
    die("Connection failed...".mysqli_connect_error());
    # code...
}

$item_id = $_GET['id'];

$sql = "SELECT * FROM reviews WHERE rest_id='$item_id' LIMIT 4";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $uname = $row['uname'];
        $prosql = "SELECT picpath from profile WHERE uname='$uname';";
        $res = mysqli_query($conn, $prosql);
        $picpath = mysqli_fetch_assoc($res);
        $rater = $row['rating_num'];

        /*
        * This section of code prints out each individual review, and the if statements are used to print out a different
        * face for each rating number a reviewer could give, as mentioned in the header comment.
        */

        if($rater == 5)
        {
            echo '
            <div class="card mx-auto" style="width: 30%; padding: 5px; margin-bottom: 10px;">
                <div class="media">
                    <img class="mr-3" src="images/5.png" style="max-width: 75px; max-height: 75px; border-radius: 50%;">
                    <div class="media-body">
                        <h4 class="mt-0">'.$row['uname'].'</h4>
                        <h5 class="mt-0">'.$row['title'].'</h5>
                        <p>'.$row['rev_date'].'</p>
                        <p>'.$row['rev_text'].'</p>
                    </div>
                </div>
            </div>
            ';
        }
        if($rater == 4)
        {
            echo '
            <div class="card mx-auto" style="width: 30%; padding: 5px; margin-bottom: 10px;">
                <div class="media">
                    <img class="mr-3" src="images/four.webp" style="max-width: 75px; max-height: 75px; border-radius: 50%;">
                    <div class="media-body">
                        <h4 class="mt-0">'.$row['uname'].'</h4>
                        <h5 class="mt-0">'.$row['title'].'</h5>
                        <p>'.$row['rev_date'].'</p>
                        <p>'.$row['rev_text'].'</p>
                    </div>
                </div>
            </div>
            ';
        }
        if($rater == 3)
        {
            echo '
            <div class="card mx-auto" style="width: 30%; padding: 5px; margin-bottom: 10px;">
                <div class="media">
                    <img class="mr-3" src="images/three.png" style="max-width: 75px; max-height: 75px; border-radius: 50%;">
                    <div class="media-body">
                        <h4 class="mt-0">'.$row['uname'].'</h4>
                        <h5 class="mt-0">'.$row['title'].'</h5>
                        <p>'.$row['rev_date'].'</p>
                        <p>'.$row['rev_text'].'</p>
                    </div>
                </div>
            </div>
            ';
        }
        if($rater == 2)
        {
            echo '
            <div class="card mx-auto" style="width: 30%; padding: 5px; margin-bottom: 10px;">
                <div class="media">
                    <img class="mr-3" src="images/two.png" style="max-width: 75px; max-height: 75px; border-radius: 50%;">
                    <div class="media-body">
                        <h4 class="mt-0">'.$row['uname'].'</h4>
                        <h5 class="mt-0">'.$row['title'].'</h5>
                        <p>'.$row['rev_date'].'</p>
                        <p>'.$row['rev_text'].'</p>
                    </div>
                </div>
            </div>
            ';
        }
        if($rater == 1)
        {
            echo '
            <div class="card mx-auto" style="width: 30%; padding: 5px; margin-bottom: 10px;">
                <div class="media">
                    <img class="mr-3" src="images/1.png" style="max-width: 75px; max-height: 75px; border-radius: 50%;">
                    <div class="media-body">
                        <h4 class="mt-0">'.$row['uname'].'</h4>
                        <h5 class="mt-0">'.$row['title'].'</h5>
                        <p>'.$row['rev_date'].'</p>
                        <p>'.$row['rev_text'].'</p>
                    </div>
                </div>
            </div>
            ';
        }
    }
}
else {
    echo '<h5 style="text-align: center">No reviews, yet! Be the first!</h5>';
}
