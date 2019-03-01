<html>
<?php
//session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";
//$use=$_SESSION['login_user'];
$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) 
{
     die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM travel_history where email='$user_check'";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
     echo "<table><tr><th> NAME  </th><th> PASSWORD </th><th>EMAILID </th><th>CONTACT</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) 
	{
        echo "<tr><td>".$row["Starting_point"]." </td><td>".$row["Destination"]." </td><td> ".$row["Fare"]." </td><td>".$row["Driver_id"]." </td></tr>";
    $user=$row["username"];
	}
	
    echo "</table>";
	
	
    header("location: session.php");
}
 else {
    echo "Email or Password may not be correct";
}
$conn->close();
?>
</html>