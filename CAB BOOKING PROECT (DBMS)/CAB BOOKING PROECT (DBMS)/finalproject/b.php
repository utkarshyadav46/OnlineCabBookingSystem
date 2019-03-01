<input type='text' id="longitude" value="" name="longitude" required/>
		<input type='text' id="latitude"  value="" name="latitude" required/>
		<form>
		<script>
		var longi=document.getElementById("longitude");
	var latti=document.getElementById("latitude");
	//alert("Latitude: " + position.coords.latitude + "<br>Longitude: " + position.coords.longitude);
     latti.value= position.coords.latitude ; 
    longi.value=position.coords.longitude;
		</script>
		
		
		$longi = $_POST['longitude'];
$lati = $_POST['latitude'];
$conn = mysqli_connect("localhost", "root", "", "login");
$use=$_SESSION['login_user'];

$sql = "Update logintable set Cx='$longi',Cy='$lati' where  username='$use' ";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
	header("Location: session.php");
   
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
   