Enter OTP:
<form  action="f_p.php" method="post"  >

<input type="text" placeholder="enter your otp" name="otp" />
<input type="submit" value="Submit" name="submit">
</form>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";
$otp=$_POST['otp'];
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(isset($_POST['submit']))
{
$que2 = "SELECT * FROM logintable where Forgot_password =$otp";
$result = $conn->query($que2);
if ($result->num_rows > 0) 
{  
while($row = $result->fetch_assoc()) 
	{
echo" YOUR PASSWORD IS ".$row["password"];
}
}
}
$conn->close();
?>
