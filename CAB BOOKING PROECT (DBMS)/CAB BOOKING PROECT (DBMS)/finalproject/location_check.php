<?php
session_start();
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
   
$conn->close();
?>