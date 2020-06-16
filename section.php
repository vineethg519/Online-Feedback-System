<?php
session_start();
?>
<html>
	<head>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" >
		<link rel="stylesheet" type="text/css" href="style.css">
		
		<title>Section</title>
	</head>

<body style="background:url(images/5.jpg) no-repeat fixed">
<div class="container" style="box-shadow:0px 0px 20px #ffffff; height:666px;">
<?php
	$sem=$_POST['selSem'];	
?>
    <header>
	   <div class="page-header">
	   <div style="margin-left:20px;"> <a href="index.php" ><img src="images/logo.png" /></a> </div>
		<div style="font-size:40px;position:absolute; top:50px;left:440px;"> <p style="font-size:40px;text-align:center;"><span style="font-family:verdana;font-weight:bold;"><?php echo $_SESSION['selectedBranch']." ".$sem." ";?></span>Feedback Form</p> </div>
		</div>
	</header>	
	<div class="container">
		<div class="shadow-center">
	<h3><p>select section</p></h3>

	<form method="POST" action="cseForm.php">		
		<input class="btn btn-primary" type="hidden" name="selSem" value="<?php echo $sem?>" />
		<input class="btn btn-primary" type="submit" name="section" value="A" />
		<input class="btn btn-primary" type="submit" name="section" value="B" />
		<input class="btn btn-primary" type="submit" name="section" value="C" />
		<input class="btn btn-primary" type="submit" name="section" value="D" />
	</form>
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