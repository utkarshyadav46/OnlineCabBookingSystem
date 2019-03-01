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
$sql = "SELECT * FROM logintable where email='$email' and password='$pass'";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
     echo "<table><tr><th> NAME  </th><th> PASSWORD </th><th>EMAILID </th><th>CONTACT</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) 
	{
        echo "<tr><td>".$row["username"]." </td><td>".$row["password"]." </td><td> ".$row["email"]." </td><td>".$row["phone"]." </td></tr>";
    $user=$row["username"];
	$userm=$row["email"];
	}
	echo "</table>";
	$_SESSION['login_user'] = $user;
    $_SESSION['login_mail'] = $userm;
	
    header("location: session.php");
} 
else {
    echo "Email or Password may not be correct";
	header("location: index.php");
}
$conn->close();
?>