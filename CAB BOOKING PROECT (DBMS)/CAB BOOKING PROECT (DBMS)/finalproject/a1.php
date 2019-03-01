<?php
$name=$_POST['name'];
$rate=$_POST['rate'];
$email=$_POST['mail_id'];
$suggestion=$_POST['suggestion'];
$conn = mysqli_connect("localhost", "root", "", "login");
if ($conn->connect_error) 
{
     die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO feedback (name,Tourist_email,rating,suggestion)VALUES ('$name','$email','$rate','$suggestion')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
   header("Location: index.php");
   

$conn->close();
?>
<!--<html>
<button><a href="index.php" style="text-decoration:none">LOGIN TO CONTINUE....</a></button>
// </html>-->