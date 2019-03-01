<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
	<link rel="stylesheet" href="geolocation.css" />
</head>
<body>
<!-- Start of first page -->
<div data-role="page" id="homePage">

	<?php include("header.php") ?>

	<div role="main" class="ui-content">
		<p>Geolocation Page</p>
		<div id="geoLocation">geoLocation</div>
		<button id="getGeolocation">get geolocation</button>
	</div><!-- /content -->

	<?php include("footer.php") ?>
</div><!-- /page -->

<!-- Start of second page -->
<div data-role="page" id="mapPage">

<?php include("header.php") ?>

	<div role="main" class="ui-content">
		<div id="map-canvas">map-canvas</div>
	</div><!-- /content -->

	<?php include("footer.php") ?>
</div><!-- /page -->

<!-- Start of third page -->
<div data-role="page" id="directionsPage">

<?php include("header.php") ?>

	<div role="main" class="ui-content">
	FROM:<input type="text"  name="from" >
	<div id="from"></div><br>
	TO:<input type="text" id="to" value="">
	<button onclick="getDirectionsLocation()">submit</button>
		<div id="directions-canvas">directions-canvas
		</div>
	</div><!-- /content -->

	<?php include("footer.php") ?>
</div><!-- /page -->
    <script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTZea67jn4YSPIGu0dNTHRyB1jnvo1Q00"></script>
    <script src="geolocation.js"></script>
	<script>
	//directionsPage
var directionsDisplay;
var directionsService = new google.maps.DirectionsService();
var directionsMap;
var z = document.getElementById("directions-canvas");
var start;
var end;
var locAPI;
var x=document.getElementById("from");
function getDirectionsLocation() {
	console.log("getDirectionsLocation");
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showDirectionsPosition);
        //navigator.geolocation.getCurrentPosition(calcRoute);
   
  } else {
        z.innerHTML = "Geolocation is not supported by this browser.";
    }
}
function showDirectionsPosition(position) {
	console.log("showDirectionsPosition");
    directionsLatitude = position.coords.latitude;
    directionsLongitude = position.coords.longitude;
    directionsLatLng = new google.maps.LatLng(directionsLatitude,directionsLongitude);
    getDirections();
}

function getDirections() {
	console.log('getDirections');
  directionsDisplay = new google.maps.DirectionsRenderer();
  start = new google.maps.LatLng(directionsLatLng);
  var directionsOptions = {
    zoom:12,
    center: start
  }
  directionsMap = new google.maps.Map(document.getElementById("directions-canvas"), directionsOptions);
  directionsDisplay.setMap(directionsMap);
  calcRoute();
}

function calcRoute() {
	
	console.log("calcRoute");
	if(!document.getElementById("from").value)
	{
  start = directionsLatLng;
  
locAPI = "http://maps.googleapis.com/maps/api/geocode/json?latlng="+directionsLatitude+","+directionsLongitude+"&sensor=true";
$.get({
url : locAPI,
success:function(data)
{
console.log(data);
x.innerHTML  = data.results[0].address_components[0].long_name+",";
x.innerHTML += data.results[0].address_components[1].long_name+",";
x.innerHTML += data.results[0].address_components[2].long_name+",";
x.innerHTML += data.results[0].address_components[3].long_name+",";
x.innerHTML += data.results[2].address_components[5].long_name+",";
x.innerHTML += data.results[0].address_components[5].long_name+",";
x.innerHTML += data.results[0].address_components[6].long_name;
}
});
	}
	else 
	{
		start = document.getElementById("from").value;
	}
  end = document.getElementById("to").value;
  var request = {
    origin:start,
    destination:end,
    travelMode: google.maps.TravelMode.TRANSIT
  };
  directionsService.route(request, function(result, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      directionsDisplay.setDirections(result);
    }
  });
}

$( document ).on( "pageshow", "#directionsPage", function( event ) {
  getDirectionsLocation();
});

</script>
</body>
</html>
