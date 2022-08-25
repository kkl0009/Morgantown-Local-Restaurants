<!-- 
    This simple class is used by the user when they want to log out of their account. It just sends them back to the home page
    and they will have to log back in in order to use most features of the site.

    Written by: Kollin Labowski
-->

<?php

session_start();
session_unset();
session_destroy();

header("Location: ../index.php");
exit();
