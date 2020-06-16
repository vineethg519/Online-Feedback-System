<!doctype html>
<html>
	<head>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" >
		<link rel="stylesheet" type="text/css" href="style.css">
		
		<title>CSE</title>
	</head>

<body style="background:url(images/5.jpg) no-repeat fixed">
<div class="container" style="box-shadow:0px 0px 20px #ffffff; height:666px;">
	<header  >
	   <div class="page-header">
		<p style="font-size:40px;text-align:center;"><b>Feedback Form<b></p>
		</div>
	</header>	
	<?php
	$sec=$_POST['CSE'];
	echo $sec;
	?>

	<div class="container">
		<div class="shadow-center">
	<h3><p>select year and semester ..</p></h3>
	<button class="btn btn-primary" type="button" onclick="location.href='cse1.html'">1</button>
	<button class="btn btn-primary" type="button" onclick="location.href='cse21.html'">2-1</button>
	<button class="btn btn-primary" type="button" onclick="location.href='cse22.html'">2-2</button>
	<button class="btn btn-primary" type="button" onclick="location.href='cse31.html'">3-1</button>
	<button class="btn btn-primary" type="submit" name="3-2" onclick="location.href='cse32_bootstrap.php'">3-2</button>
	<button class="btn btn-primary" type="button" onclick="location.href='cse41.html'">4-1</button>
	<button class="btn btn-primary" type="button" onclick="location.href='cse42.html'">4-2</button>
	</div>


		<div class="navbar navbar-default navbar-fixed-bottom">
			<div class="container">
				<p style="float:right" ><b>&copy;2015 Copyright protected.</b></p>
			</div>
		</div>
</div>	
<script src="bootstrap/js/bootstrap.min.js"></script>
</div>
</body>
</html>