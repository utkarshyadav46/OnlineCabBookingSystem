<html>
<body>
<a href="mailscript.php"><button onclick="random()">SEND OTP</button></a>
<input type="password" placeholder="secret" name="pass" >
<a href="mailaction.php"><button>proceed</button></a>
<!--<form  action="mailscript.php" method="post"  >
     <input type="text" placeholder="Enter otp" name="otp" >
	 <input type="password" placeholder="secret" name="pass" >
     <input type="submit" value="proceed">
	 </form>-->
	 </body>
	 <script>
function random()
{
	var a=parseInt(Math.random()*100000);
	var check = document.getElementById("pass");
	check.value	= a;	
}
</script>
	 </html>