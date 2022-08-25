<!-- 
    This class is used for displaying mail that has been sent out to the mailbox. It reads in the information from the mailbox table
    in the database, and displays the appropriate information to the screen. The user can click on an element of the mailbox (an
    individual message) and they will be redirected to a website relating to the message (usually a deal or new restaurant announcement
    for the Morgantown area). Each message is printed on a separate card to allow the user to navigate the interface efficiently.

    Written by: Kollin Labowski
-->

<?php
require 'includes/header.php';
?>

<main>
<link rel="stylesheet" href="css/mailbox.css">
    <h1>Mailbox</h1>
        <div class="mailbox-container">
            <?php
            include_once 'includes/dbhandler.php';
            $sql = "SELECT * FROM mailbox ORDER BY tstamp DESC";
            $stmt = mysqli_stmt_init($conn);

            if(!mysqli_stmt_prepare($stmt, $sql))
            {
                echo 'SQL Failure';
            }
            else
            {
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);

                /*
                * The following code prints out each of the individual cards to the screen so the user may
                * interact with them.
                */ 

                while($row = mysqli_fetch_assoc($result))
                {
                    echo '<div class="card">
                        <a href="'.$row['link'].'">
                            <h3>'.$row["title"].'</h3>
                        </a>
                        <p>'.$row["descript"].'</p>
                    </div>';
                }
            }
            ?>
        </div>
</main>