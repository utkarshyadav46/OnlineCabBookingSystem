<?php include("front.php") ?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";
$conn = mysqli_connect($servername, $username, $password, $dbname);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
      #map {
        width: 100%;
        height: 400px;
        background-color: grey;
      }
	  </style>

<title>GOLa Cabss</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Go Taxi Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- gallery -->
<link href='css/simplelightbox.min.css' rel='stylesheet' type='text/css'>
<!-- //gallery -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Arvo:400,400i,700,700i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
</head>
<body>
	<!-- banner -->
	<div class="banner jarallax">
		<div class="header">
			<div class="header-left">
				<div class="agileinfo-phone">
					<p><i class="fa fa-volume-control-phone" aria-hidden="true"></i>7052539922,7690863475</p>
				</div>
				<div class="agileinfo-phone agileinfo-map">
					<p><i class="fa fa-map-marker" aria-hidden="true"></i>HOSTEL NO. 4 MNIT JAIPUR </p>
				</div>
				<div class="search-grid">
					<form action="#" method="post">
						<input type="text" placeholder="Search" class="big-dog" name="Subscribe" required="">
						<button class="btn1"><i class="fa fa-search" aria-hidden="true"></i></button>
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="w3-header-bottom">
			<div class="w3layouts-logo">
				<h1>
					<a href="">GOLA CaBS >>>>>></a>
				</h1>
			</div>
			<div class="top-nav">
						<nav class="navbar navbar-default">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li class="first-list"><a class="active" href="index.html">Home</a></li>
									<li><a href="#about" class="scroll">About</a></li>
									<li><a href="#gallery" class="scroll">Gallery</a></li>
									<li><a href="#team" class="scroll">Team</a></li>
									<li><a href="../index.php" >Customers</a></li>
									<li><a href="../head.php" >Drivers</a></li>
									<li><a href="../admin.php" >Admin</a></li>
								
									<li><a href="#contact" class="scroll">Contact</a></li>
								</ul>	
								<div class="clearfix"> </div>
							</div>	
						</nav>		
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="banner-info">
			<div class="container">
				<div class="w3-banner-info">
					<div class="slider">
						<div class="callbacks_container">
							<ul class="rslides callbacks callbacks1" id="slider4">
								<li>
									<div class="w3layouts-banner-info">
										<h3><span>GOLA</span>CABs</h3>
										<h3>kyu ki chlti ka naam gaadi...<br>or hamari priority h sawari....</h3>
										<div class="w3ls-button">
											<a href="#" data-toggle="modal" data-target="#myModal">Read More</a>
										</div>
									</div>
								</li>
								<li>
									<div class="w3layouts-banner-info">
										<h3>COMFORT<span>TAXI</span>WALE.com</h3>
										<p>journey success ki.... </p>
										<div class="w3ls-button">
											<a href="#" data-toggle="modal" data-target="#myModal">Read More</a>
										</div>
									</div>
								</li>
							</ul>
						</div>
						<div class="clearfix"> </div>
									<script>
										// You can also use "$(window).load(function() {"
										$(function () {
										  // Slideshow 4
										  $("#slider4").responsiveSlides({
											auto: true,
											pager:true,
											nav:false,
											speed: 400,
											namespace: "callbacks",
											before: function () {
											  $('.events').append("<li>before event fired.</li>");
											},
											after: function () {
											  $('.events').append("<li>after event fired.</li>");
											}
										  });
									
										});
									 </script>
									<!--banner Slider starts Here-->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- modal -->
	<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header"> 
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
					<h4 class="modal-title">TAXiWALE.com</h4>
				</div> 
				<div class="modal-body">
					<div class="agileits-w3layouts-info">
						<img src="images/4.jpg" alt="" />
						<p>Comparing and booking car hire has never been easier. Search, compare and choose your rental from leading car hire brands and start your journey here with GOLA CABS.

Looking to travel at your own pace? GOLA CABS's car hire gives you the power to handcraft your own trip and embark on a self-drive itinerary of your own choosing. Use GOLA CABS to compare a huge range of cars worldwide and book something to suit your travel group perfectly.
</div>
				</div>
			</div>
		</div>
	</div>
<div class="welcome">
		<div class="container">
			<div class="wthree-heading">
				<h2>Welcome</h2>
				<p>This is a cab booking services which bring the Customer and Drivers all together on a single platform where Customer can user this platform just to explore the world or to reach their destination.</p>	</div>
			<div class="w3-welcome-grids">
				<div class="col-md-3 w3-welcome-grid">
					<div class="w3-welcome-grid-info">
						<img src="images/3.jpg" alt="" />
						<h4>AVAILABILITY</h4>
						<p>According to one of our co-founder it is one of the most necessary requirement that  Customers need.So GOLA CABs will be working 24 x 7 to fulfill the dreams of Custommers. </p>	</div>
				</div>
				<div class="col-md-3 w3-welcome-grid">
					<div class="w3-welcome-grid-info">
						<img src="images/4.jpg" alt="" />
						<h4>ABOUT CABS</h4>
						<p>As our service is not widespread only certain amount of cabs are available.</p>
					</div>
				</div>
				<div class="col-md-3 w3-welcome-grid">
					<div class="w3-welcome-grid-info">
						<img src="images/5.jpg" alt="" />
						<h4>ACCURACY</h4>
						<p>Your cab will reach U in given time.</p>
					</div>
				</div>
				<div class="col-md-3 w3-welcome-grid">
					<div class="w3-welcome-grid-info">
						<img src="images/6.jpg" alt="" />
						<h4>SECURITY & MAINTENANCE</h4>
						<p>YOUR safety is in our hands till your reaching pointand ther should be good maintenance from our side</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //welcome -->
	<!-- about-bottom -->
	<div class="about-bottom jarallax" id="about">
		<!-- container -->
		<div class="container">
			<div class="wthree-heading about-heading">
				<h3>About Us</h3>
				<p>This is just a small startup from UTKARSH and PURUS.And it grown up further</div>
			<div class="about-bottom-grids">
				<div class="col-md-6 about-bottom-left">
					<h4>COMPANY</h4>
					<p>GOla cabs is now a leading provider of the most affordable call taxi service in the financial centre of India – Jaipur and one can book taxis by logging on to our website www.gola.com. GOLA CABS is revered as the first taxi service in Mumbai and in India, to launch metered Black & Yellow (Non Air-Conditioned) Taxis as well as metered Cool Cab (Air conditioned) as call Taxis. </p>
				</div>
				<div class="col-md-6 about-bottom-left about-bottom-right">
					<h4>Our Story</h4>
					<p>Jittu, director of Live Minds Solutions, Andheri was scheduled to catch a flight when his plans were interrupted by a message saying his radio cab reservation was not confirmed. Jittu tried finding a cab but all in vain. Ultimately, an auto came to his rescue; but he missed his flight. That was how, as Jittu says, "The idea of connecting thousands of local taxi drivers to their customers and developing an online platform was born."  Jittu said</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="about-bottom-grids w3ls-about-bottom-grids">
				<div class="col-md-6 about-bottom-left">
					<h4>Our Team</h4>
					<p>Gola Cab’s reputation for call taxi service and customer service depends entirely on our people. Their dedication, knowledge, skills and experience make the company what it is. Together with our stakeholders, we aim to be a force for positive change in the world.</p>
				</div>
				<div class="col-md-6 about-bottom-left about-bottom-right">
					<h4>Our Investors</h4>
					<p>Zenpact<br>IIITKOTA
					</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //about-bottom -->
	<!-- offer -->
	<!--<div class="offer">
		<div class="col-md-5 offer-left">
			
		</div>
		
		<div class="clearfix"> </div>
	</div>-->
	<!-- //offer -->
	<!-- gallery -->
	<div class="gallery" id="gallery">
		<div class="container">
			<div class="wthree-heading">
				<h3>Gallery</h3>
				<p></p>
			</div>
			<div class=" w3-agileits-gallery">
				<div class="gallery-bg">
					<div class="gallery-bg-text effect-2">
						<a href="images/g1.jpg" class="big"><img src="images/g1.jpg" alt="" title="Maecenas aliquam nec arcu at efficitur. Praesent cursus aliquam erat a commodo." /></a>
					</div>
				</div>
				<div class="gallery-small gallery-middle">
					<div class="gallery-small-text effect-3">
						<a href="images/g2.jpg"><img src="images/g2.jpg" alt="" title="Donec dictum nisi sit amet ex volutpat interdum."/></a>
					</div>
				</div>
				<div class="gallery-small gallery-middle">
					<div class="gallery-small-text effect-3">
						<a href="images/g3.jpg"><img src="images/g3.jpg" alt="" title="Ut dignissim ipsum dolor, in scelerisque neque commodo sit amet."/></a>
					</div>
				</div>
				<div class="gallery-small gallery-middle">
					<div class="gallery-small-text effect-3">
						<a href="images/g4.jpg"><img src="images/g4.jpg" alt="" title="Nulla molestie nulla et dolor commodo pharetra."/></a>
					</div>
				</div>
				<div class="clearfix"></div>
				
				<div class="gallery-small gallery-middle">
					<div class="gallery-small-text effect-3">
						<a href="images/g5.jpg"><img src="images/g5.jpg" alt="" title="Maecenas aliquam nec arcu at efficitur. Praesent cursus aliquam erat a commodo."/></a>
					</div>
				</div>
				<div class="gallery-bg">
					<div class="gallery-bg-text effect-2">
						<a href="images/g7.jpg" class="big"><img src="images/g7.jpg" alt="" title="Maecenas aliquam nec arcu at efficitur. Praesent cursus aliquam erat a commodo." /></a>
					</div>
				</div>
				<div class="gallery-small gallery-middle">
					<div class="gallery-small-text effect-3">
						<a href="images/g6.jpg"><img src="images/g6.jpg" alt="" title="Maecenas aliquam nec arcu at efficitur."/></a>
					</div>
				</div>
				<div class="gallery-small gallery-middle">
					<div class="gallery-small-text effect-3">
						<a href="images/g8.jpg"><img src="images/g8.jpg" alt="" title="Nulla molestie nulla et dolor commodo pharetra."/></a>
					</div>
				</div>
				<div class="clearfix"></div>
				
				
			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/simple-lightbox.js"></script>
	<script>
				$(function(){
					var $gallery = $('.gallery a').simpleLightbox();
					
					$gallery.on('show.simplelightbox', function(){
						console.log('Requested for showing');
					})
					.on('shown.simplelightbox', function(){
						console.log('Shown');
					})
					.on('close.simplelightbox', function(){
						console.log('Requested for closing');
					})
					.on('closed.simplelightbox', function(){
						console.log('Closed');
					})
					.on('change.simplelightbox', function(){
						console.log('Requested for change');
					})
					.on('next.simplelightbox', function(){
						console.log('Requested for next');
					})
					.on('prev.simplelightbox', function(){
						console.log('Requested for prev');
					})
					.on('nextImageLoaded.simplelightbox', function(){
						console.log('Next image loaded');
					})
					.on('prevImageLoaded.simplelightbox', function(){
						console.log('Prev image loaded');
					})
					.on('changed.simplelightbox', function(){
						console.log('Image changed');
					})
					.on('nextDone.simplelightbox', function(){
						console.log('Image changed to next');
					})
					.on('prevDone.simplelightbox', function(){
						console.log('Image changed to prev');
					})
					.on('error.simplelightbox', function(e){
						console.log('No image found, go to the next/prev');
						console.log(e);
					});
				});
	</script>
	<!-- //gallery -->
	<!-- testimonial -->
	<div class="testimonial">
		<div class="container">
			<div class="wthree-heading">
				<h3>COMMENTS>></h3>
				<p>
				</p></div>
			<div class="testimonial-grids">
				<div class="col-md-4 testimonial-grid">
					<h4>Customer Says</h4>
					<div class="testimonial-info">
<?php
$sql5 = "SELECT * FROM feedback order by rand() limit 3 ";
$result = $conn->query($sql5);
if ($result->num_rows > 0) 
{
while($row = $result->fetch_assoc()) 
	{
     echo "<p><span>''</span>".$row["suggestion"]."<span>''</span></p>";
echo" ";
	 echo "<h5>".$row["Name"]."</h5>";
	 }
}
else {
    echo "<------NO SUGGESTION NOW ------>";
}
				?>
					</div>
					
				</div>
				<div class="col-md-8 testimonial-grid-right">
					<h4>Latest Offers</h4>
					<div class="Works-grids">
						<div class="col-md-4 Works-grid">
							<img src="images/3.jpg" class="img-responsive" alt=""/>
						<p>Use <b>FIRSTRIDE</b> code to get instant discount on your first ride.</p>
						</div>
						<div class="col-md-4 Works-grid">
							<img src="images/4.jpg" class="img-responsive" alt=""/>
						<p>Use <b>AYUSHMANBHAV</b> to get instant discount upto 150rs .</p>
						</div>
						<div class="col-md-4 Works-grid">
							<img src="images/5.jpg" class="img-responsive" alt=""/>
						<p>Use <b>GOLA250</b> to get instant on your ride .</p>
						</div>
							<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //testimonial -->
	<!-- team -->
	<div class="team jarallax" id="team">
		<div class="team-dot">
			<div class="container">
				<div class="wthree-heading about-heading">
					<h3>DEVELOPERS</h3>
					<p></div>
				<div class="agile-team-grids">
					<div class="col-sm-3 team-grid">
						<div class="flip-container">
							<div class="flipper">
								<div class="front">
									<img src="t1.jpg" alt="utkarsh" />
								</div>
								<div class="back">
									<h4>UTKARSH YADAV</h4>
									<p>BTECH 2Nd YEAR </p>
									<div class="w3l-social">
										<ul>
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-rss"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				
				
					<div class="col-sm-3 team-grid">
						<div class="flip-container">
							<div class="flipper">
								<div class="front">
									<img src="t4.jpg" alt="" height="350px" width="4500%"/>
								</div>
								<div class="back">
									<h4>VUCHURU PURUSHOTHAM</h4>
									<p>BTECH 2ND YEAR</p>
									<div class="w3l-social">
										<ul>
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-rss"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //team -->
	<!-- blog -->
	<div id="blog" class="blog">
		<div class="container">  
			<div class="wthree-heading">
				<h3>TOP COMMENTS</h3>
				<p>
<?php
$sql = "SELECT * FROM feedback order by rand() limit 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
while($row = $result->fetch_assoc()) 
	{
     echo "<p>".$row["suggestion"]."</p>";	;
	 }
}
else {
    echo "<------NO TOP COMMENT AVAILABLE ------>";
}

?>
				</p></div>
			<div class="blog-agileinfo">
				<div class="col-md-6 blog-w3grid-img">
					<a href="#myModal" data-toggle="modal" class="wthree-blogimg">  
						<img src="images/4.jpg" class="img-responsive" alt=""/>
					</a>  
				</div>
				<div class="col-md-6 blog-w3grid-text"> 
					<h4><a href="#myModal" data-toggle="modal"></a></h4>
					<h6>By <a href="#"> Admin</a> </h6>
					<p>
<?php
$sql = "SELECT * FROM feedback where Name='ADMIN'";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
while($row = $result->fetch_assoc()) 
	{
     echo "<p>".$row["suggestion"]."</p>";	;
	 }
}
else {
    echo "<------HAVEN'T BOOK ANY RIDE BOOK NOW ------>";
}

?>
					</p></div> 
				<div class="clearfix"> </div>
			</div> 
			<div class="blog-agileinfo blog-agileinfo-mdl">
				<div class="col-md-6 blog-w3grid-img blog-img-rght">
					<a href="#myModal" data-toggle="modal" class="wthree-blogimg">  
						<img src="images/6.jpg" class="img-responsive" alt=""/>
					</a>  
				</div>
				<div class="col-md-6 blog-w3grid-text"> 
					<h4><a href="#myModal" data-toggle="modal">Top Rated Comment </a></h4>
					<h6>By <a href="#">Our Customers</a> </h6>
					<p>
					<?php
$sql = "SELECT * FROM feedback where rating>=4";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
while($row = $result->fetch_assoc()) 
	{
     echo "<p>".$row["suggestion"]."</p>";	;
	 }
}
else {
    echo "<------NO NEW COMMENT ------>";
}

?>
					</p></div> 
				<div class="clearfix"> </div>
			</div> 
			<div class="blog-agileinfo">
				<div class="col-md-6 blog-w3grid-img">
					<a href="#myModal" data-toggle="modal" class="wthree-blogimg">  
						<img src="images/5.jpg" class="img-responsive" alt=""/>
					</a>  
				</div>
				<div class="col-md-6 blog-w3grid-text"> 
					<h4><a href="#myModal" data-toggle="modal">Average Comments</a></h4>
					<h6>By <a href="#">Our users</a></h6>
					<p>
					<?php
$sql = "SELECT * FROM feedback where rating<3";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
while($row = $result->fetch_assoc()) 
	{
     echo "<p>".$row["suggestion"]."</p>";	;
	 }
}
else {
    echo "<------NO NEW COMMENT ------>";
}

?></p>	</div> 
				<div class="clearfix"> </div>
			</div> 
		</div>
	</div>
	<!-- //blog --> 
	<!-- rate -->
	<div class="rate jarallax" id="rate">
		<div class="container">
			<div class="wthree-heading about-heading">
				<h3>Fare for UR Ride</h3>
				<p>Ther should be reasonable fare for ur ride</p>
			</div>
			<div class="agileinfo-rate-grids">
				<div class="agileinfo-rate-grid-nfo">
					<div class="agileinfo-rate-grid">
						<ul>
							<li>ENJOY EVERY RIDE</li>
							<li>@  Rs4 /km</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //rate -->
	<!-- contact -->
	<div class="contact" id="contact">
		<div class="container">
			<div class="wthree-heading">
				<h3>Contact Us</h3>
				<p>PLEASE CALL us At ROOM no 92,LOHIT Hostel MNIT Campus, JAIPUR 302017 </p>	</div>
			<div class="address">
				<div class="col-sm-4 address-grids">
					<h4>Address :</h4>
					<p>IIITKOTa<br>
						<span>MALVIYA NAGAR,</span>
						JAIPUR- 302017
					</p>	
				</div>
				<div class="col-sm-4 address-grids">
					<h4>Phone :</h4>
					<p>7690863475</p>
					<p>7062300621</p>
				</div>
				<div class="col-sm-4 address-grids">
					<h4>Email :</h4>
					<p><a href="mailto:2016kucp1024@iiitkota.com">2016kucp1024@iiitkota.ac.in</a></p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="contact-form">
				<h4>Feedback Form</h4>
				<form action="" method="post">
					<div class="fields-grid">
						<div class="styled-input agile-styled-input-top">
							<input type="text" name="name" required="">
							<label>Full Name</label>
							<span></span>
						</div>
						<div class="styled-input agile-styled-input-top">
							<input type="text" name="phone" required=""> 
							<label>Phone</label>
							<span></span>
						</div>
						<div class="styled-input">
							<input type="email" name="mail" required=""> 
							<label>Email</label>
							<span></span>
						</div> 
						<div class="styled-input">
						</b><input type="radio" name="rate" value="1"> 1     
<input type="radio" name="rate" value="2">2      <input type="radio" name="rate" value="3">3      <input type="radio" name="rate" value="4">4      <input type="radio" name="rate" value="5">5      <br><br>

							<label>Rate Us:</label>
							<span></span>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="styled-input textarea-grid">
						<textarea name="suggestion" required=""></textarea>
						<label>Message</label>
						<span></span>
					</div>	 
					<input type="submit" name="feedback"  value="SEND">
				</form>
<?php

if(isset($_POST['feedback']))
{
$name=$_POST['name'];
$rate=$_POST['rate'];
$email=$_POST['mail'];
$suggestion=$_POST['suggestion'];
$sql4 = "INSERT INTO feedback (Name,Tourist_email,rating,suggestion)VALUES ('$name','$email','$rate','$suggestion')";

if (mysqli_query($conn, $sql4)) {
    echo "THANK YOU FOR YOUR FEEDBACK ";
} else {
    echo "Error: " . $sql4 . "<br>" . mysqli_error($conn);
}
}
?>
			</div>
			
<script>
var x =document.getElementById('output');
function getlocation()
 {
if (navigator.geolocation)
{
navigator.geolocation.getCurrentPosition(showPosition);
navigator.geolocation.getCurrentPosition(initMap);
x.innerHTML = "SUPPORTING";
}
else
{
x.innerHTML = "YOUR BROWSER DOES NOT SUPPORT";
}
}
function showPosition(position)
{
x.innerHTML = position.coords.latitude;
//alert("lattitude ="+position.coords.latitude+"  longitude ="+position.coords.longitude);
x.innerHTML +=  "<br />"
x.innerHTML +=  "longitude ="+position.coords.longitude;
var locAPI = "http://maps.googleapis.com/maps/api/geocode/json?latlng="+position.coords.latitude+","+position.coords.longitude+"&sensor=true";

x.innerHTML = locAPI;
$.get({
url : locAPI,
success:function(data)
{
console.log(data);
x.innerHTML = data.results[0].address_components[0].long_name+",";
x.innerHTML += data.results[0].address_components[1].long_name+",";
x.innerHTML += data.results[0].address_components[2].long_name+",";
x.innerHTML += data.results[0].address_components[3].long_name+",";
x.innerHTML += data.results[2].address_components[5].long_name+",";
x.innerHTML += data.results[0].address_components[5].long_name+",";
x.innerHTML += data.results[0].address_components[6].long_name;
}
});
}
function initMap(position) 
       {
        var uluru = {lat:position.coords.latitude , lng: position.coords.longitude};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }     
 </script>
 <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlZZlM2wJ4EIOvuLa0g6wVhmEhJ6QWyb0&callback=initMap">
    </script>
  <div class="agileits-w3layouts-map">
				<h4>Location</h4>
				<button onClick="getlocation()">GET LOCATION</button>
<div id="output"></div>
<div id="map"></div>
		</div>
	</div>
	<!-- //contact -->
	<!-- footer -->
		<footer>
			<div class="w3ls-footer-grids">
				<!--<div class="container">
					<div class="col-md-3 w3l-footer one">
						<h3>About Company</h3>
						<p> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of Latin at Hampden-Sydney College in Virginia from a Lorem Ipsum passage, undoubtable source.</p>
						<p class="adam">- Mark Thomson, CEO</p>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-3 w3l-footer one tweet">
						<h3>Tweets</h3>
						<ul>
							<li>
								<a href="#"><i class="fa fa-twitter"></i>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accus.
								<i>http//example.com</i></a>
								<span>About 15 minutes ago<span>
							</span></span></li>
							<li>
								<a href="#"> <i class="fa fa-twitter"></i>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit. 
								<i>http//example.com</i></a>
								<span>About a day ago<span>
							</span></span></li>
						</ul>
					</div>
					<div class="col-md-3 w3l-footer two">
						<h3>Keep Connected</h3>
						<ul>
							<li><a class="fb" href="#"><i class="fa fa-facebook"></i>Like us on Facebook</a></li>
							<li><a class="fb1" href="#"><i class="fa fa-twitter"></i>Follow us on Twitter</a></li>
							<li><a class="fb2" href="#"><i class="fa fa-google-plus"></i>Add us on Google Plus</a></li>
							<li><a class="fb3" href="#"><i class="fa fa-dribbble"></i>Follow us on Dribbble</a></li>
							<li><a class="fb4" href="#"><i class="fa fa-pinterest-p"></i>Follow us on Pinterest</a></li>
						</ul>
					</div>
					<div class="col-md-3 w3l-footer three">
						<h3>Contact Information</h3>
						<ul>
							<li><i class="fa fa-map-marker"></i><p>The company name <span>GOLA CABS</span>Polo Street. </p><div class="clearfix"></div> </li>
							<li><i class="fa fa-phone"></i><p>1234567890</p> <div class="clearfix"></div> </li>
							<li><i class="fa fa-envelope-o"></i><a href="mailto:info@example.com">info@example.com</a> <div class="clearfix"></div></li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>-->
			<div class="copy-right-grids">
				<div class="container">
					<div class="copy-left">
						<p class="footer-gd">© 2017 Gola CAbS. All Rights Reserved  <a href="https://w3layouts.com/" target="_blank"></a></p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</footer>
	<!-- //footer -->-->
	<script src="js/responsiveslides.min.js"></script>
	<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>

	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
</body>	
</html>