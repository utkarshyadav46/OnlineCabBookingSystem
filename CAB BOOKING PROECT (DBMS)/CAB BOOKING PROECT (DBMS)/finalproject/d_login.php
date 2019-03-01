<?php
session_start();
$email=$_POST['email'];
$pass=$_POST['pass'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) 
{
     die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM drivers where D_email='$email' and password='$pass'";

$result = $conn->query($sql);
if ($result->num_rows > 0) 
{echo"successful";
     echo "<table><tr><th> NAME  </th><th> PASSWORD </th><th>EMAILID </th><th>CONTACT</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) 
	{
        echo "<tr><td>".$row["D_name"]." </td><td>".$row["password"]." </td><td> ".$row["D_email"]." </td><td>".$row["D_phone"]." </td></tr>";
      $driver=$row["D_name"];
	  
		}
		$_SESSION['login_driver'] = $driver;
		header("location:driver_session.php");
	echo "</table>";
} 
else {
    echo "Email or Password may not be correct";

}
$conn->close();
?>