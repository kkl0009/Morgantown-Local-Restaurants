<!-- 
    This class is the home page and is the first page any user see when they connect to our website, this class implements the header class and Home.css 
    class for its styles and text coloring. The weekly deals are declared to the carasuel here in line 30 - 78.
    Written by: Isiah Phares & Kollin Labwoski
    
-->
<?php
require 'includes/header.php'
?>

<main>
    <link rel="stylesheet" href="css/Home.css">

    <!--Title info-->
    <h1 style="margin: auto; text-align: center;">Welcome to Hub for Grubs!</h1>
    <h3 style="margin: auto; text-align: center;">Check out what our site has to offer below.</h3>
    <h6 style="margin-left: 20px; text-align: center;">Or start browsing Morgantown's diverse dining selection</h6>
    <div class="bg-cover center-me">

        <!--Implemented search features for searching restaurants.php file for the restaurant type or name.-->
        <div class="text-center">
            <div class="search" style="width: 100%;">
                <form action="restaurants.php">
                    <script src="js/indexSearch.js"></script>
                    <div class="active-purple-4 mb-4" style="align-content: center;">
                        <input class="form-control" type="text" placeholder="Search restaurants.." name="homeSearch"
                               id="homeSearch" style="padding: 5px 5px;" size="200"></input>
                        <button type="submit" id="searchButton" onclick="storeSearch()"
                                class="btn btn-outline-secondary"><i>Search</i></button>
                    </div>
            </div>
            </form>
        </div>

        <div class="about-section">
            <div class="column">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"
                     style="margin-right: 25%;">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    </ol>
                    <h4 style="text-align: center; font-size: 30px;">Hot Deals!</h4>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a href="restpage.php?id=5">
                                <img class="d-block w-200" src="images/mariachis.jpg" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="restpage.php?id=8">
                                <img class="d-block w-200" src="images/marios.jpg" alt="Second slide">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="restpage.php?id=9">
                                <img class="d-block w-200" src="images/ogawa.jpg" alt="Third slide">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="restpage.php?id=4">
                                <img class="d-block w-200" src="images/cairo.jpg" alt="Fourth slide">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </a>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <!--h2 section stylesheet.-->
            <h1 style="text-align:center; font-size: 30px; margin-right: 200px;">Popular Categories!</h1>
            <div class="column">
                <div class="card bg-dark">
                    <div class="container">
                        <h2 style="text-align: center; color: white;">Pizza</h2>
                        <p>
                        <div class="text-center">
                            <button type="button" class="btn btn-light" data-toggle="modal" data-target="#modalCart1">
                                Order
                            </button>
                        </div>
                        </p>

                        <div class="modal fade bd-example-modal-lg" id="modalCart1" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalLabel"
                             aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <!--Header-->
                                    <div class="modal-header text-center">
                                        <h4 class="modal-title w-100" id="myModalLabel">Available Restaurants</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <!--Body-->
                                    <div class="modal-body">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Restaurants</th>
                                                <th>Logo</th>
                                                <th style="text-align: left;">Select</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="restaurant">
                                                <td>Lotsa Stone Fired Pizza</td>
                                                <td><img class="resimg" src="rest_pics/lotsa.jpg"></img>
                                                </td>
                                                <td><a href="restpage.php?id=10" class="btn btn-dark"
                                                       style="margin-top: 75px;">Select</a></td>
                                            </tr>
                                            <tr class="restaurant">
                                                <td>Pies and Pints</td>
                                                <td><img class="resimg" src="rest_pics/pandp.jpg"></img>
                                                </td>
                                                <td><a href="restpage.php?id=11" class="btn btn-dark"
                                                       style="margin-top: 75px;">Select</a></td>
                                            </tr>
                                            <tr class="restaurant">
                                                <td>Pizza Al's</td>
                                                <td><img class="resimg" src="rest_pics/pa.jpg"></img>
                                                </td>
                                                <td><a href="restpage.php?id=16" class="btn btn-dark"
                                                       style="margin-top: 75px;">Select</a></td>
                                            </tr>
                                            <tr class="restaurant">
                                                <td>Lefty's Place</td>
                                                <td><img class="resimg" src="rest_pics/lp.jpg"></img>
                                                </td>
                                                <td><a href="restpage.php?id=25" class="btn btn-dark"
                                                       style="margin-top: 75px;">Select</a></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--Footer-->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-dark" data-dismiss="modal">
                                            Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card bg-dark">
                    <div class="container">
                        <h2 style="text-align: center; color: white;">Asian</h2>
                        <p>
                        <div class="text-center">
                            <button type="button" class="btn btn-light" data-toggle="modal" data-target="#modalCart2">
                                Order
                            </button>
                        </div>
                        </p>

                        <!-- Modal: modalCart -->
                        <div class="modal fade bd-example-modal-lg" id="modalCart2" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalLabel"
                             aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <!--Header-->
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel">Available Restaurants</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <!--Body-->
                                    <div class="modal-body">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Restaurants</th>
                                                <th>Logo</th>
                                                <th style="text-align: left;">Select</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="restaurant">
                                                <td>Ta Khrai</td>
                                                <td><img class="resimg" src="rest_pics/tk.jpg"></img>
                                                </td>
                                                <td><a href="restpage.php?id=1" class="btn btn-dark"
                                                       style="margin-top: 75px;">Select</a></td>
                                            </tr>
                                            <tr class="restaurant">
                                                <td>Oryza</td>
                                                <td><img class="resimg" src="rest_pics/oryza.jpg"></img>
                                                </td>
                                                <td><a href="restpage.php?id=3" class="btn btn-dark"
                                                       style="margin-top: 75px;">Select</a></td>
                                            </tr>
                                            <tr class="restaurant">
                                                <td>Ogawa</td>
                                                <td><img class="resimg" src="rest_pics/og.jpg"></img>
                                                </td>
                                                <td><a href="restpage.php?id=9" class="btn btn-dark"
                                                       style="margin-top: 75px;">Select</a></td>
                                            </tr>
                                            <tr class="restaurant">
                                                <td>Yama</td>
                                                <td><img class="resimg" src="rest_pics/yama.jpg"></img>
                                                </td>
                                                <td><a href="restpage.php?id=7" class="btn btn-dark"
                                                       style="margin-top: 75px;">Select</a></td>
                                            </tr>
                                            <tr class="restaurant">
                                                <td>Bombay</td>
                                                <td><img class="resimg" src="rest_pics/bb.jpg"></img>
                                                </td>
                                                <td><a href="restpage.php?id=2" class="btn btn-dark"
                                                       style="margin-top: 75px;">Select</a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--Footer-->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-dark" data-dismiss="modal">
                                            Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal: modalCart -->
            <div class="column">
                <div class="card bg-dark">
                    <div class="container">
                        <h2 style="text-align: center; color: white;">American/Pub</h2>
                        <p>
                        <div class="text-center">
                            <button type="button" class="btn btn-light" data-toggle="modal" data-target="#modalCart">
                                Order
                            </button>
                        </div>
                        </p>
                        <div class="modal fade bd-example-modal-lg" id="modalCart" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalLabel"
                             aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <!--Header-->
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel">Available Restaurants</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <!--Body-->
                                    <div class="modal-body">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>Restaurants</th>
                                                <th>Logo</th>
                                                <th style="text-align: left;">Select</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="restaurant">
                                                <td>Table 9</td>
                                                <td><img class="resimg" src="rest_pics/t9.jpg"></img>
                                                </td>
                                                <td><a href="restpage.php?id=6" class="btn btn-dark"
                                                       style="margin-top: 75px;">Select</a></td>
                                            </tr>
                                            <tr class="restaurant">
                                                <td>Mario's Fishbowl</td>
                                                <td><img class="resimg" src="rest_pics/mf.jpg"></img>
                                                </td>
                                                <td><a href="restpage.php?id=8" class="btn btn-dark"
                                                       style="margin-top: 75px;">Select</a></td>
                                            </tr>
                                            <tr class="restaurant">
                                                <td>Boston Beanery</td>
                                                <td><img class="resimg" src="rest_pics/bosbe.jpg">
                                                </td>
                                                <td><a href="restpage.php?id=19" class="btn btn-dark"
                                                       style="margin-top: 75px;">Select</a></td>
                                            </tr>
                                            <tr class="restaurant">
                                                <td>Varsity Club</td>
                                                <td><img class="resimg" src="rest_pics/varc.jpg"></img>
                                                </td>
                                                <td><a href="restpage.php?id=26" class="btn btn-dark"
                                                       style="margin-top: 75px;">Select</a></td>
                                            </tr>
                                            <tr class="restaurant">
                                                <td>Almost Heaven Bar & Grill</td>
                                                <td><img class="resimg" src="rest_pics/ahbg.jpg"></img>
                                                </td>
                                                <td><a href="restpage.php?id=29" class="btn btn-dark"
                                                       style="margin-top: 75px;">Select</a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--Footer-->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-dark" data-dismiss="modal">
                                            Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>
