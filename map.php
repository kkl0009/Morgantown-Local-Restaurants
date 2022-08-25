<!-- 
    This class is used for displaying a interactive google map that highlights the restaurants in a specified radius of the centered location, in this case Morgantown, WV. the map is as interactive as 
     google will allow with the free version of the api. The map does allow the user to click on any restaurant on the map and see their contact information.
    Written by: Isiah Phares
-->

<?php 
require 'includes/header.php';
require 'includes/dbhandler.php';
?>

<!DOCTYPE html>
<html>
<body>

<h1>Local Restaraunts</h1>

<div id="googleMap" style="width:100%;height:500px;"></div>

<script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(39.629524,-79.955894),
  zoom:13,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
var request = {
    location: map.getCenter(),
    radius: 8047,
    types: ['cafe']
  }

  var service = new google.maps.places.PlacesService(map);

  service.nearbySearch(request, callback);

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhi8K93QOA7ylS0KCZ4S3P_Cg3C5yOTes&callback=myMap"></script>
<script src="https://maps.googleapis.com/maps/api/place/search/xml?location=49.260691,-123.137784&radius=500&sensor=false&key=AIzaSyBhi8K93QOA7ylS0KCZ4S3P_Cg3C5yOTes&types=restaurant"></script>
</body>
</html>
