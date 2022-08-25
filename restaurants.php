<!-- Displays a list of restaurants in the Morgantown area, with the ability to search by name, food type, or address. 
     Also links each restaurant name to the corresponding restpage -->
 <!-- Written by: Christopher Tonkin, Malik Mukdadi -->

<?php
require 'includes/header.php';
?>
<script type="text/javascript">
    $(document).ready(function(){
        $("#myBtn").click(function(){
            $("#myModal").modal();
        });
    });
</script>

<main>
    <link rel="stylesheet" href="css/restaurants.css">
    <body>
        <div class="container">
            <h1>Restaurants</h1>
            <div id="searchWrapper" style = "padding: 10px">
                <input
                    type="text"
                    name="searchBar"
                    id="searchBar"
                    placeholder="Search restaurants in Morgantown..."
                />
            </div>
            <ul id="restList"></ul>
        </div>
        <script src="js/search.js"></script>
    </body>
    </link>
</main>