<!-- 
    This file is used to post reviews to the reviews table in the database. It is used in conjunction with the restpage.php file,
    and the information to add in includes the id of the restaurant being reviewed, the username of the person making the review,
    the title of their review, the text of their review, the date of their review, the rating they gave in their review, and the
    status of the review. The information is taken from what is read in at the restpage.php file.

    Written by: Kollin Labowski
-->

<?php 
require_once 'dbhandler.php';
date_default_timezone_set('UTC');

if(isset($_POST['review-submit'])) {
    session_start();
    $uname = $_SESSION['username'];
    $title = $_POST['review-title'];
    $date = date('Y-m-d H:i:s');
    $review = $_POST['review'];
    $item_id = $_POST['item_id'];
    $rating = $_POST['rating'];

    $sql = "INSERT INTO reviews (rest_id, uname, title, rev_text, rev_date, rating_num, status) VALUES ('$item_id', '$uname', '$title', '$review', '$date', '$rating', 1);";
    $stmt = mysqli_stmt_init($conn);
    $result = $conn->query($sql);
    header("Location: ../restpage.php?id=$item_id");
}