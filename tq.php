<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" >
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Thank-you</title>
	</head>

<body style="background:url(images/5.jpg) no-repeat">
<div class="container" style="box-shadow:0px 0px 20px #ffffff; height:100%;">
	<header  >
	   <header>
		    <div class="page-header">
		       <div style="margin-left:20px;"> <a href="index.php" ><img src="images/logo.png" /></a> </div>
			   <div style="font-size:40px;position:absolute; top:50px;left:500px;"> <p ><b>Feedback Form </b></p></div>		
			</div>
		</header>
	</header>		
	
		<div class="container shadow-center">
			<h3>Thank you for your feedback...</h3>
		</div>
	
	
	<div class="navbar navbar-default navbar-fixed-bottom">
			<div class="container">
				<p style="float:right" ><b>&copy;2015 Copyright protected.</b></p>
			</div>
		</div>
</div>
<?php
			// remove all session variables
session_unset(); 

			// destroy the session 
session_destroy();
?>
</body>
</html>