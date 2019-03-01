<!DOCTYPE html>
<html>
<head>
<title>Gola Cabs</title>
<link href="css/style.css" rel='stylesheet' type='text/css' />
<script src="js/jquery.min.js"></script>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
				<script type="text/javascript">
					$(document).ready(function () {
						$('#horizontalTab').easyResponsiveTabs({
							type: 'default', //Types: default, vertical, accordion           
							width: 'auto', //auto or any width like 600px
							fit: true   // 100% fit in a container
						});
					});
				   </script>
</head>
<body>
	<h1> GOLA CABS </h1>
		<hr>	
<div class="main-content">
	<div class="sap_tabs">	
		 
		<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
		 
			  <ul>
			  	  <a href="../index.php"><li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span><B>CUSTOMERS</span></li></a>
				  <a href="../head.php"> <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>DRIVERS</span></li></a>
				  <a href="../head.php"> <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>ADMIN</span></li></a>
			
			  </ul>	
		</div>
	</div>
</div>
	 <!--start-copyright-->
   		<div class="copy-right">
   			<div class="wrap">
				<p></p>
			</div>
		</div>
	<!--//end-copyright-->
 
</body>
</html>