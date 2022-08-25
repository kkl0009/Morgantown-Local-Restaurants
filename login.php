<!-- 
  This class is used to allow the user to log in to their account. Logging in to their account will allow a user to access
  the majority of the website, and will allow them to save information to their profile as well as create reviews for various
  restaurants stored in the JSON file. This file is used in conjunction with the login-helper.php and logout.php files, both
  found in the includes folder. This page is used to read in the appropriate information from the user (their username and 
  their password). It also includes a decorative carousel of food pictures for aesthetics.

  Written by: Kollin Labowski
-->

<?php
require 'includes/header.php'
?>

<main>

<!-- 
  The following section of code is used for reading in the appropriate information from the user (their username and password)
-->

<link rel="stylesheet" href="css/login.css">
    <div class="bg-cover">
        <div class="h-40 center-me">
            <div class="my-auto">
                <form class="form-signin" action="includes/login-helper.php" method="post" style="background: white;">
                    <img style="height: 70px;" src="images/plate.svg">
                    <h1 class="h3 mb-3 font-weight-normal">Login</h1>
                    <label for="inputEmail" class="sr-only">Username or Email Address</label>
                    <input type="text" id="inputEmail" name="uname" class="form-control" placeholder="Username/ Email" required
                        autofocus>
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" name="pwd" class="form-control" placeholder="Password" required>
                    <button class="btn btn-lg btn-success btn-block" name="login-submit" type="submit">Sign in</button>
                    <p class="mt-5 mb-3 text-muted">&copy; Hub for Grubs 2020-2021</p>
                </form>
            </div>
        </div>

        <!-- 
          The next section of code is used to display the carousel that appears on the right of the screen (when login.css is used)
        -->

        <div class="container" style="padding-top: 80px;">
            <div id="slides" class="carousel slide col-md-8 offset-md-2" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#slides" data-slide-to="0" class="active"></li>
                  <li data-target="#slides" data-slide-to="1"></li>
                  <li data-target="#slides" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block mx-auto" style="height: 300px;" src="images/tacos.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block mx-auto" style="height: 300px;" src="images/dumplings.jpg" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block mx-auto" style="height: 300px;" src="images/cookies.jpg" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#slides" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="false"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#slides" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="false"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        </div>
    </div>

</main>