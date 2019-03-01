<?php
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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
	<link rel="stylesheet" href="geolocation.css" />
</head>
<body>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>



<!-- Start of first page -->
<div data-role="page" id="homePage">
<?php include("header.php") ?>
<div role="main" class="ui-content">
		<p>Geolocation Page</p>
		<div id="geoLocation">geoLocation</div>
	</div>
	<form action="location_check.php" method="post">
		<input type='text' id="longitude" value="" name="longitude" required/>
		<input type='text' id="latitude"  value="" name="latitude" required/>
		<input type="submit" value="SUBMIT YOUR LOCATION TO TRACK YOU BETTER "></form><!-- /content -->
</div><!-- /page -->

<!---location_check--->

<!-- Start of second page -->
<div data-role="page" id="mapPage">

<?php include("header.php") ?>

	<div role="main" class="ui-content">
	<div id="map-canvas">map-canvas</div>
	</div><!-- /content -->
</div><!-- /page -->





<!-- Start of second part B page -->






<!-- Start of third page -->

<div data-role="page" id="directionsPage">

	<?php include("header.php") ?>

	<div role="main" class="ui-content">
	<table border="0" cellpadding="0" cellspacing="3">
<tr>
    <td>
	<button onclick="GetRoute()" required/>CHECK ROUTE</button>
	<button onclick="getLocation()" required/>MY LOCATION</button>
	
	<form action="abc.php" method="post">
        Source:
        <input type="text" id="txtSource" name="frompoint" value="" placeholder="ENTER SOURCE"  style="width: 500px" required/>
        Destination:
        <input type="text" id="txtDestination" name="end" value="" placeholder="ENTER DESTINATION" style="width: 500px" required/>
        <br />
		<hr>
		DISTANCE:<input type="text" id="dvDistance" value="" name="distance" placeholder="Estimate Distance" style="width:300px" required/>
        DURATION:<input type="text" id="dvDuration" value="" placeholder="Estimate Duration" style="width:300px" required/>
        EXPECTED FARE<input type="text" id="fare" name="fare" value="" placeholder="Estimate Fare" style="width:300px" required/>
	  	<a href="#search">see drivers</a>
		<hr>
		AVAIL OFFER:<select id="offer">
  <option value="AYUSHMANBHAV">AYUSHMANBHAV</option>
  <option value="FIRSTRIDE">FIRSTRIDE</option>
  <option value="GOLA250">GOLA250</option>
  <option value="AVISETH">AVISETH</option>
  
   <option selected value="">...</option>

 </select>
		<input type="text"  placeholder="PLEASE SELECT SUITABLE DRIVER ACCORDING TO YOUR CONVIENECE" name="driverid" id="id"  value="" required/>

		<input type="submit" name="takedrive" value="TAKE A DRIVE"  required/>
 </form>
         <hr />
    </td>
     <td>
        <div id="dvMap" style="width: 800px; height: 500px">
        </div>
    </td>
	</tr>
	<tr>
    <td>
	<div id="dvPanel" style="width: 500px; height: 500px"></div>
    </td>
	<td>
	<div id="search">
	<h1>DRIVERS LIST</h1>
<?php
$ins1="select * from logintable where username='$user_check' ";
$result0 = $conn->query($ins1);
if ($result0->num_rows > 0) 
{
while($row1 = $result0->fetch_assoc()) 
	{    
          $x=(double)$row1["Cx"];
		  $y=(double)$row1["Cy"];
		  $que2="select * from drivers";
		  $result1 = $conn->query($que2);
		  $rmin=22223.0;
		  if ($result1->num_rows > 0) 
		  {
			  
			  while($row2 = $result1->fetch_assoc()) 
			  {
				  $x1=$row2["Dx"];
				  $y1=$row2["Dy"];
				  $x2=$x-$x1;
				  $y2=$y-$y1;
				  $r=sqrt(($x2*$x2)+ ($y2*$y2));
				  if($r < $rmin)
				  {
					  $xsel=$x1;
					  $ysel=$y1;
					  $rmin=$r;
				  }
			  }
			  $instant="SELECT * from drivers where Dx=$xsel && Dy=$ysel && D_status='ON' and Available='YES' ";
					  $result3 = $conn->query($instant);
					  	  
					  if ($result3->num_rows > 0) 
					  {
						  echo "<table><tr><th>ID </th><th> DRIVER NAME</th><th> EMAIL</th><th> PHONE</th><th> STATUS </th><th> CURRENT LOCATION</th></tr>";
					
						  while($row3= $result3->fetch_assoc()) 
						  {
						   echo "<tr><td>    &nbsp".$row3["id"]." </td><td>  &nbsp    ".$row3["D_name"]." </td><td>   ".$row3["D_email"]." </td> <td>   ".$row3["D_phone"]." </td><td>      ".$row3["D_status"]."</td><td>          " .$row3["D_location"]. "</td></tr>";
						  }
							  echo "</table>";
							  break;
							  }
							  /*else {
								  echo "<h2>SORRY !!! NO DRIVERS FOUND</h2>";
								  }*/
		 				
		 
		 }
		 
	}
}
else {
    echo "<h2>!!! NO DRIVERS FOUND</h2>";
}
?>
</div>
</td>

</tr>

</table>

</div>
    <br />
	
	</div>
	</div><!-- /content -->
</div><!-- /page -->



<!-- fourth page--->
<div data-role="page" id="history">
<?php include("header.php") ?>

<div role="main" class="ui-content">
<div id="utk">
<table>
<tr>
<td width="200px">
<h3>YOUR CURRENT BOOKING STATUS CLICK tO REFRESH</h3>
<?php
$sql = "SELECT * FROM travel_history where Tourist_name ='$user_check' && Status='running' || Status='pending'";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{echo "<table><tr><th> STARTING </th><th> DESTINATION </th><th> FARE</th><th>DRIVER_ID</th><th>     STATUS</th></tr>";
while($row = $result->fetch_assoc()) 
	{
     echo "<tr><td>".$row["Starting_point"]." </td><td>".$row["Destination"]." </td><td> ".$row["Fare"]." </td> <td> ".$row["Driver_id"]." </td><td>      ".$row["Status"]."</td></tr>";
	}
	echo "</table>";
}
else {
    echo "<------HAVEN'T BOOK ANY RIDE BOOK NOW ------>";
}
?>
</td>
<td>
</td>
</tr>
<tr>
<td>
<button onclick="window.location.reload();">LAST BOOKING STATUS</button>
<h2>ACCOUNT HISTORY</h2>
</div>
<?php
$sql = "SELECT * FROM travel_history where Tourist_name ='$user_check'  ";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{echo "<table><tr><th> STARTING </th><th> DESTINATION </th><th> FARE</th><th>DRIVER_ID</th><th>     STATUS</th></tr>";
while($row = $result->fetch_assoc()) 
	{
     echo "<tr><td>".$row["Starting_point"]." </td><td>".$row["Destination"]." </td><td> ".$row["Fare"]." </td> <td> ".$row["Driver_id"]." </td><td>      ".$row["Status"]."</td></tr>";
	}
	echo "</table>";
}
else {
    echo "<------HAVEN'T BOOK ANY RIDE BOOK NOW ------>";
}

?>
</td>

<td>

<form action="update_status.php" method="post">
<input type="submit" name="status" value="CLICK WHEN REACH THE LOCATION"/>
<input type="submit" name="cancel" value="CANCEL BOOKING"/>
</form>
</td>
<td>
<h2>PROFILE</h2>
<?php
$sql = "SELECT * FROM logintable where username ='$user_check'";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{  
    while($row = $result->fetch_assoc()) 
	{
        echo "<b>NAME</b>: ".$row["username"]."<br><br><b>PASSWORD</b>:".$row["password"]."<br><br><b>EMAIl ID</b>".$row["email"]."<br><br><b>PHONE NO.:</b>".$row["phone"]." <br><br><b>LONGITUDE</b> :".$row["Cx"]."<br><br><b>LATTITUTE</b> : ".$row["Cy"]."    ";
		
	}
} 

else {
	echo $user_check;
    echo "Email or Password may not be correct";

}

$conn->close();
?>
</td>
</tr>
</table>
	</div><!-- /content -->

	
</div><!-- /page -->


<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>

  <script src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTZea67jn4YSPIGu0dNTHRyB1jnvo1Q00"></script>
 <!--<script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>-->
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<script type="text/javascript">
	function myFunction() {
  var a=confirm("ARE YOU SURE WANT TI EXIT");
	if(a==true)
	{
		window.location.assign("logout.php")
	}
	}
	
	//geolocationPage
var x = document.getElementById("geoLocation");
if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}
function showPosition(position) {
	var longi=document.getElementById("longitude");
	var latti=document.getElementById("latitude");
	//alert("Latitude: " + position.coords.latitude + "<br>Longitude: " + position.coords.longitude);
     latti.value= position.coords.latitude ; 
    longi.value=position.coords.longitude;
	var l=document.getElementById("txtSource");
	locAPI = "http://maps.googleapis.com/maps/api/geocode/json?latlng="+position.coords.latitude+","+position.coords.longitude+"&sensor=true";
    // x.innerHTML = locAPI;
	$.get({
		url : locAPI,
		success:function(data){
			console.log(data);
			l.value  = data.results[0].address_components[4].long_name+",";
			l.value += data.results[0].address_components[1].long_name+",";
			l.value += data.results[0].address_components[2].long_name+",";
			l.value += data.results[0].address_components[3].long_name+",";
			l.value += data.results[2].address_components[5].long_name+",";
			l.value += data.results[0].address_components[5].long_name+",";
			l.value += data.results[0].address_components[6].long_name;
			}
		});
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

//distance Page


var source;
var destination;
var directionsDisplay;
var directionsService = new google.maps.DirectionsService();
google.maps.event.addDomListener(window, 'load', function () {
    new google.maps.places.SearchBox(document.getElementById('txtSource'));
    new google.maps.places.SearchBox(document.getElementById('txtDestination'));
    directionsDisplay = new google.maps.DirectionsRenderer({ 'draggable': true });
});
 
function GetRoute() {
	console.log("hi");
    var mumbai = new google.maps.LatLng(18.9750, 72.8258);
    var mapOptions = {
        zoom: 7,
        center: mumbai
    };
    map = new google.maps.Map(document.getElementById('dvMap'), mapOptions);
    directionsDisplay.setMap(map);
    directionsDisplay.setPanel(document.getElementById('dvPanel'));
 
    //*********DIRECTIONS AND ROUTE**********************//

    source = document.getElementById("txtSource").value;
    destination = document.getElementById("txtDestination").value;
 
    var request = {
        origin: source,
        destination: destination,
        travelMode: google.maps.TravelMode.DRIVING
    };
    directionsService.route(request, function (response, status) {
        if (status == google.maps.DirectionsStatus.OK) {
            directionsDisplay.setDirections(response);
        }
    });
 
    //*********DISTANCE AND DURATION**********************//
	var a;
    var service = new google.maps.DistanceMatrixService();
    service.getDistanceMatrix({
        origins: [source],
        destinations: [destination],
        travelMode: google.maps.TravelMode.DRIVING,
        unitSystem: google.maps.UnitSystem.METRIC,
        avoidHighways: false,
        avoidTolls: false
    }, function (response, status) {
        if (status == google.maps.DistanceMatrixStatus.OK && response.rows[0].elements[0].status != "ZERO_RESULTS") {
            var distance = response.rows[0].elements[0].distance.text;
            var duration = response.rows[0].elements[0].duration.text;
            var dvDistance = document.getElementById("dvDistance");
			var dvDuration = document.getElementById("dvDuration");
			var dvFare = document.getElementById("fare");
			var off=document.getElementById("offer");
            dvDistance.value = distance ;
			 a=distance.replace(",","");
            dvDuration.value =  duration;
			dvFare.value =  parseFloat(a)*4;
			
			alert("YPUR NET FARE IS :" +dvFare.value);
			var str1 = off.value;
			var str2 ="AYUSHMANBHAV";
			var str3="FIRSTRIDE";
			var str4="GOLA250";
var n = str1.localeCompare(str2);
          if(n==0 && dvFare.value>300)
		  {
			  
			  dvFare.value =  parseFloat(a)*4-150;
			  alert("YOU HAVE TO PAY (AFTER OFFER) :"+dvFare.value);
		  }	
		  else if(str1.localeCompare(str3)==0 )
		  {
			   dvFare.value =  (parseFloat(a)*4)*0.9;
			    alert("YOU HAVE TO PAY (AFTER OFFER) : " +dvFare.value);
		  }
		  else if(str1.localeCompare(str4)==0 && dvFare.value>500)
		  {
			   dvFare.value =  parseFloat(a)*4-250;
			    alert("YOU HAVE TO PAY (AFTER OFFER) : " +dvFare.value);
		  }
         else 
		 {
        	alert ("YOU HAVE NO OFFER OPT...");
         }		  
        } else {
            alert("Unable to find the distance via road.");
        }
    });
}
</script>
</body>
</html>