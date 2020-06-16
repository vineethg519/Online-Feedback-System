<?php
session_start();
?>
<!doctype html>
<html>
	<head>
	    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" >
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="style_header.css">
		<link rel="stylesheet" href="alertify/themes/alertify.core.css" />	
		<link rel="stylesheet" href="alertify/themes/alertify.default.css" />
		<title>ADMIN LOGIN</title>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="jquery/jquery-1.11.2.min.js"></script>
		<script src="alertify/lib/alertify.min.js"></script>
		<script>				
			$(document).ready(function(){
				$("#myReset").click(function(){
					$("#content").html("");
					$("#errMsg").html("");
					$("#errMsg").css("display","none");
				});
			});
	    </script>
	</head>

<body style="background:url(images/5.jpg) fixed no-repeat">
	<div class="container" style="box-shadow:0px 0px 20px #ffffff; width:100% !important; height:100%;" >
		<header>
		    <div class="page-header">
		       <div style="margin-left:20px;"> <a href="index.php" ><img src="images/logo.png" /></a> </div>
			   <div style="font-size:40px;position:absolute; top:50px;left:550px;"> <p ><b>Admin Login</b></p></div>		
			</div>
		</header>			
	<div class="container">
	  <div class="shadow-center" style="margin-top:100px;">
	    <?php 
		if(isset($_SESSION['adminErr']))
		echo "<div class='alert alert-danger' role='alert' id='errMsg' style='width:50%;margin:0px 0px 0px 100px;'><p><b>".$_SESSION['adminErr']."</b></p></div>";
		?>
			<h3><p>Login here..</p></h3>
			<form  method="POST" action="admin_login_authentication.php">
			<table class="table table-condensed table-hover myclass">
			<tr>
				<td>	<label><b>Username:</b></label></td>
				<td>	
					<input id="username" type="text" name="username"  required />
				</td>
			</tr>
			<tr>
			  <td> <label><b>Password:	</b></label></td>
				<td>
				    <input id="pass" type="password" name="password"  required/>
				</td>
			</tr>
			</table>
				
				<input class="btn btn-primary" type="submit" id="mybuton"  value="Login" />
				
				<input class="btn" type="reset" id="myReset"/>
			</form>		
			<div id="content" style="font-color:red" ></div>
		</div>		
		<div class="navbar navbar-default navbar-fixed-bottom">
			<div class="container">
				<p style="float:right" ><b>&copy;2015 Copyright protected.</b></p>
			</div>
		</div>
	</div>	
</div>
</body>
</html>