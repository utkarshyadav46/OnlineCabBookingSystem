<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";
$use=$_SESSION['login_user'];
$fare = $_POST['fare'];
$distance = $_POST['distance'];
$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) 
{
     die("Connection failed: " . $conn->connect_error);
} 
$sql = "UPDATE drivers set D_salary=D_salary + $fare where id=234";

if (mysqli_query($conn, $sql)) {
	
	header("location:session.php");
    echo "Thankyou for using our service";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$conn->close();
?>