<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";
$conn = mysqli_connect($servername, $username, $password, $dbname);
session_start();
$dri=$_SESSION['login_driver'];
  $up="UPDATE drivers set D_status='OFF',Available='NO' where D_name='$dri'";
if(mysqli_query($conn, $up)){
    echo "Records were updated successfully.";
} else {
    echo "ERROR: Could not able to execute $up. " . mysqli_error($link);
}
 if(session_destroy()) {
	  header("Location:head.php");
   }
?>