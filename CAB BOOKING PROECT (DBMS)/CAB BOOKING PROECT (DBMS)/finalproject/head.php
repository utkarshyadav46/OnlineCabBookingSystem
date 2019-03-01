<html>
<head>
  <title>CAR BOOKING </title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="css/style.css">
  <style>
#body{
    background-image: url(car1.jpg), url(paper.gif);
    background-position: right bottom, left top;
    background-repeat: no-repeat, repeat;
    padding: 15px;
}
  </style>
</head>

<body>
  
<!-- Form Mixin-->
<!-- Input Mixin-->
<!-- Button Mixin-->
<!-- Pen Title-->
<div class="pen-title">
  <h1>GOLA CARS++ (DRIVER END)</h1>
</div>
<!-- Form Module-->
<div class="module form-module">
  <div class="toggle"><i class="fa fa-times fa-pencil">  </i>
    <div class="tooltip" id="utk"> REGISTER</div>
  </div>
  <div class="form">
    <h2>LOGIN TO CONTINUE....</h2>
    <form  action="dlogin.php" method="post"  >
      <input type="email" placeholder="Email-Id" name="email" required/>
      <input type="password" placeholder="Password" name="pass" required/>
	  <button type="submit" >LOGIN</button>
    </form>
  </div>
  <div class="form">
    <h2>SIGN UP...</h2>
    <form action="dentry.php" method="post">
      <input type="text" placeholder="Username" name="user" required/>
      <input type="password" placeholder="Password" name="pass" required/>
      <input type="email" placeholder="Email Address" name="email" required/>
      <input type="text" placeholder="Phone Number" name="phone"  required/>
      <button type="submit">Register</button>
    </form>
  </div>
  <div class="cta"><a href="forgot.php" onclick="random()">Forgot your password?</a></div>
</div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>
</body>
</html>

