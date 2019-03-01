<?php
session_start();
$loc=$_POST['d_location'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";
$use=$_SESSION['login_driver'];

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) 
{
     die("Connection failed: " . $conn->connect_error);
}
$sql = "UPDATE drivers set D_location='$loc' where D_name='$use'";
if (mysqli_query($conn, $sql)) {
	
	header("location:driver_session.php");
    echo "Thankyou for using our service";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
 
$conn->close();
?>