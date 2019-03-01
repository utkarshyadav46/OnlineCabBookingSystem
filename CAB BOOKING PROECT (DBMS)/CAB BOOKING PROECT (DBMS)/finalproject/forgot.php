<html>
<body>
<form  action="forgot.php" method="post" >
ENTER EMAIL<input type="email" placeholder="enter your email" name="email" required/>
<input type="submit" value="Send OTP"  name="send">
</form>
<br><br>
</body>
</html>
<a href="mailto:2016kucp1024@iiitkota.ac.in;&amp;subject=The%20subject%20of%20the%20email&amp;body=The%20body%20of%20the%20email">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";
$email=$_POST['email'];
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(isset($_POST['send']))
{
	$fp=rand(100000,999999);
	echo "".$fp;
	$sql="update logintable set Forgot_password='$fp' where email='$email'";
	mysqli_query($conn,$sql);
 }

// The message
$message = "YOUR one time password is ".$fp;

// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Send
mail($email, 'ONE Time Password', $message);
?>
 

