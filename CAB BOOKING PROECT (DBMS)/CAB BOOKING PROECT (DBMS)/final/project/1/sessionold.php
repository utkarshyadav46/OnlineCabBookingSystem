<?php
//$name=$_POST['user'];
//$pass=$_POST['pass'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";
$conn = mysqli_connect($servername, $username, $password, $dbname);
   session_start();
  $user_check = $_SESSION['login_user'];
   if(!isset($_SESSION['login_user'])){
      header("location:index.php");
   }
?>
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
</div><!-- /page -->




<!-- Start of second page -->
<div data-role="page" id="mapPage">

<?php include("header.php") ?>

	<div role="main" class="ui-content">
	<div id="map-canvas">map-canvas</div>
	</div><!-- /content -->
</div><!-- /page -->





<!-- Start of second part B page -->
<div data-role="page" id="history">

<?php include("header.php") ?>

<div role="main" class="ui-content">
<div id="utk"><h2>ACCOUNT HISTORY</h2>
<h3>TO SEE CURRENT BOOKING STATUS CLICK tO REFRESH<h3>
<button onclick="window.location.reload();">LAST BOOKING STATUS</button>
	
</div>
<?php
$sql = "SELECT * FROM travel_history where Tourist_email ='$user_check'";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{echo "<table><tr><th> STARTING </th><th> DESTINATION </th><th> FARE </th><th> DRIVER_ID </th></tr>";
while($row = $result->fetch_assoc()) 
	{
     echo "<tr><td>".$row["Starting_point"]." </td><td>".$row["Destination"]." </td><td> ".$row["Fare"]." </td> <td>        ".$row["Driver_id"]." </td></tr>";
	}
	echo "</table>";
}
else {
    echo "no record found";
}
$conn->close();
?>
	</div><!-- /content -->

	
</div><!-- /page -->





<!-- Start of third page -->
<div data-role="page" id="directionsPage">

<?php include("header.php") ?>

	<div role="main" class="ui-content">
	<form action="travel.php" method="post">
	FROM:<input type="text"  name="frompoint" id="from" value="">
	TO:<input type="text" id="to" name="end" value="" required/>
	<br>
	<input type="submit" value="TAKE DRIVE">
	</form>
	<button onclick="getDirectionsLocation()"> CHECK DRIVE</button>
	<div id="directions-canvas">directions-canvas</div>
    </div><!-- /content -->
</div><!-- /page -->




<!---Fourth page--->
<div data-role="page" id="distance">

	<?php include("header.php") ?>

	<div role="main" class="ui-content">
	<div id="distance">
	 <table border="0" cellpadding="0" cellspacing="3">
        <tr>
            <td colspan="2">
                Source:
                <input type="text" id="txtSource" value="Bandra, Mumbai, India" style="width: 200px" />
                &nbsp; Destination:
                <input type="text" id="txtDestination" value="Andheri, Mumbai, India" style="width: 200px" />
                <br />
                <input type="button" value="Get Route" onclick="GetRoute()" />
                <hr />
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <div id="dvDistance">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div id="dvMap" style="width: 500px; height: 500px">
                </div>
            </td>
            <td>
                <div id="dvPanel" style="width: 500px; height: 500px">
                </div>
            </td>
        </tr>
    </table>
    <br />
	</div>
	</div><!-- /content -->
</div><!-- /page -->


<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTZea67jn4YSPIGu0dNTHRyB1jnvo1Q00"></script>
   
    <script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<script>
	//geolocationPage
var x = document.getElementById("geoLocation");
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}
function showPosition(position) {
	alert("Latitude: " + position.coords.latitude + "<br>Longitude: " + position.coords.longitude);
    x.innerHTML = "Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude; 
}

$(document).on('click', '#getGeolocation', function(){
    console.log("clicked");
    getLocation();
});


//map page



var y = document.getElementById("map-canvas");
var mapLatitude;
var mapLongitude;
var myLatlng;

function getMapLocation() {
	console.log("getMapLocation");
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showMapPosition);
    } else {
        y.innerHTML = "Geolocation is not supported by this browser.";
    }
}
function showMapPosition(position) {
	console.log("showMapPosition");
    mapLatitude = position.coords.latitude;
    mapLongitude = position.coords.longitude;
    myLatlng = new google.maps.LatLng(mapLatitude,mapLongitude);
    getMap();
}


var map;
function getMap() {
	console.log("getMap");
  var mapOptions = {
    zoom: 12,
    center: new google.maps.LatLng(mapLatitude, mapLongitude)
  };
  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);

	var marker = new google.maps.Marker({
	    position: myLatlng,
	    map: map,
	    title:"You are here!"
	});
}

$( document ).on( "pageshow", "#mapPage", function( event ) {
  getMapLocation();
});

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