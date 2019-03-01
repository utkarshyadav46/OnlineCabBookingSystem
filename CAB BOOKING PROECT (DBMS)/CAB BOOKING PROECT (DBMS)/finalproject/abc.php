<?php
session_start();
$from = $_POST['frompoint'];
$to = $_POST['end'];
$fare = $_POST['fare'];
$distance = $_POST['distance'];
$driver=$_POST['driverid'];
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
$com=$fare*0.8;
if(isset($_POST['takedrive']))
{
$sql = "INSERT INTO travel_history (Tourist_name,Starting_point,Destination,Fare,Driver_id,Dsalary)VALUES ('$use','$from','$to','$fare','$driver','$com')";
$cfare=$fare*0.8;
if (mysqli_query($conn, $sql)) {
	 echo "Thankyou for using our service";
} 
else
{
	echo"no  driver found";
}
$update="UPDATE travel_history set Status='pending' where Tourist_name='$use' && Status='moving'";
if(mysqli_query($conn, $update)){
    echo "Records were updated successfully.";
} else {
    echo "ERROR: Could not able to execute $up. " . mysqli_error($link);
}
}
$up="UPDATE drivers set D_salary=D_salary+$fare where id=$driver";
if(mysqli_query($conn, $up)){
    echo "Records were updated successfully.";
} else {
    echo "ERROR: Could not able to execute $up. " . mysqli_error($link);
}

$update="UPDATE drivers set D_status='ON' ,Current='running' where id='$driver'";
if(mysqli_query($conn, $update)){
    echo "Records were updated successfully.";
} else {
    echo "ERROR: Could not able to execute $up. " . mysqli_error($link);
}
header("location:session.php");
 
 

$conn->close();
?>
