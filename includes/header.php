<!-- 
    This class is used by many of the other classes, alot of the screen details are defined in this class. As well as the main header with menu options and other buttons.
    Written by: Isiah Phares
-->

<?php 
session_start();
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/0809ee8fa6.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="d-md-flex d-block flex-row mx-md-auto mx-0">
            <a class="navbar-brand" href="index.php">Hub for Grubs</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <?php if (isset($_SESSION['uid'])) {
                        echo '<li class="nav-item">
                        <a class="nav-link" href="includes/logout.php">Logout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile.php">Profile</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Menu
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="restaurants.php">Browse Restaurants</a>
                            <a class="dropdown-item" href="map.php">Map</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="about.php">About/Contact Us</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="mailbox.php">Mailbox</a>
                        </div>
                    </li>';
                    }
                    else {
                        echo '<li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="signup.php">Sign Up <span class="sr-only">(current)</span></a>
                        </li>';
                    }
                    ?>
                    <form class="form-inline my-4 my-lg-0">
                        <a class="nav-link" href="map.php">Map</a>
                    </form>
                </ul>
            </div>
        </div>
    </nav>
</header>
