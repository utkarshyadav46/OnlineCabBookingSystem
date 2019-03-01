<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";
$use=$_SESSION['login_user'];
$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) 
{
     die("Connection failed: " . $conn->connect_error);
} 
$sql = "UPDATE travel_history set Status='achieved' where Tourist_name='$use'";
if (mysqli_query($conn, $sql)) {
	
	 echo "Thankyou for using our service";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
 /*$update2="UPDATE drivers set D_status='ON',Current='Stop' where id='$driver'";
if(mysqli_query($conn, $update2)){
    echo "Records were updated successfully.";
} else {
    echo "ERROR: Could not able to execute $up. " . mysqli_error($link);
}
header("location:session.php");*/
 header("location:session.php");
   
$conn->close();
?>