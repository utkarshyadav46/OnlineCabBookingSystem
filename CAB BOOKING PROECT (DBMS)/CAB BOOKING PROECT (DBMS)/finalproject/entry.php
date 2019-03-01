<?php
$name=$_POST['user'];
$pass=$_POST['pass'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) 
{
     die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO logintable (username,password,email,phone)VALUES ('$name', '$pass', '$email','$phone')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$conn->close();
?>
<html>
<button><a href="index.php" style="text-decoration:none">LOGIN TO CONTINUE....</a></button>
</html>