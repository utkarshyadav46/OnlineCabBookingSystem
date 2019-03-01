<?php
$name=$_POST['name'];
$rate=$_POST['rate'];
$email=$_POST['mail_id'];
$phone=$_POST['contactno'];
$suggestion=$_POST['suggestion'];
/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";*/
$conn = mysqli_connect("localhost", "root", "", "login");
if ($conn->connect_error) 
{
     die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO feedback (name,mail_id,contactno,rate,suggestion)VALUES ('$name','$email','$phone','$rate','$suggestion')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$conn->close();
?>
<!--<html>
<button><a href="index.php" style="text-decoration:none">LOGIN TO CONTINUE....</a></button>
// </html>-->