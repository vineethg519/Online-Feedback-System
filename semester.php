<?php
session_start();
?>
<html>
	<head>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" >
		<link rel="stylesheet" type="text/css" href="style.css">
		
		<title>CSE</title>
	</head>

<body style="background:url(images/5.jpg) no-repeat fixed">
<div class="container" style="box-shadow:0px 0px 20px #ffffff; height:666px;">
<?php
	$branch=$_SESSION['selectedBranch'];	
?>
	<header>
	    <div class="page-header">
	      <div style="margin-left:20px;"> <a href="index.php" ><img src="images/logo.png" /></a> </div>
	      <div style="font-size:40px;position:absolute; top:50px;left:440px;"><p style="font-size:40px;text-align:center;"><b><?php echo $branch;?>&nbsp;Feedback Form<b></p> </div>
	    </div>
	</header>		
	<div class="container">
		<div class="shadow-center">
	<h3><p>select year and semester ..</p></h3>
	<form method="POST" action="section.php">
	<input class="btn btn-primary" type="hidden" name="brnch" value="<?php echo $branch;?>" />
		<input class="btn btn-primary" type="submit" name="selSem" value="2-1" />
		<input class="btn btn-primary" type="submit" name="selSem" value="2-2" />
		<input class="btn btn-primary" type="submit" name="selSem" value="3-1" />			
		<input class="btn btn-primary" type="submit" name="selSem" value="3-2" />		
		<input class="btn btn-primary" type="submit" name="selSem" value="4-1"/>
		<input class="btn btn-primary" type="submit" name="selSem" value="4-2" />
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