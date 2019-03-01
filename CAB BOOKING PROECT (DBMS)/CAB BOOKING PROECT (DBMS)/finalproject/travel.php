<?php
session_start();
$from = $_POST['frompoint'];
$to = $_POST['end'];
$fare = $_POST['fare'];
$distance = $_POST['distance'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";
$use=$_SESSION['login_user'];
$conn = mysqli_connect($servername, $username, $password, $dbname);
$ins ="INSERT INTO travel_history (Tourist_name,Starting_point,Destination,Fare,Driver_id)VALUES ('$use','$from','$to','$fare','2')";
if (mysqli_query($conn, $ins)) {
	header("location:session.php");
    echo "Thankyou for using our service";
} 
else
{
	echo"no  driver found";
}
$find="select * from drivers where D_status='ready' LIMIT 1";
$result = $conn->query($find);
if ($result->num_rows > 0) 
{
	while($row = $result->fetch_assoc()) 
	{
		echo "hello".$row["D_name"];
     $a = $row["D_salary"];
	 $update = "UPDATE drivers set D_salary='$a + $fare'   where id='$row['id']'";
	 if ($con->query($update) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $con->error;
}
	 }
}
else {
    echo "<------HAVEN'T BOOK ANY RIDE BOOK NOW ------>";
}

$conn->close();
?>
