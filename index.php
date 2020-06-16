<?php
session_start();
?>
<html>
	<head>
	    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" >
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="style_header.css">		
		<link rel="stylesheet" href="alertify/themes/alertify.core.css" />	
		<link rel="stylesheet" href="alertify/themes/alertify.default.css" />
		<title>Branch Login</title>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="jquery/jquery-1.11.2.min.js"></script>
		<script src="alertify/lib/alertify.min.js"></script>
		
		<script>
			function check_info()
			{
				var check_username=document.getElementById("br_username").value;
				var check_password=document.getElementById("br_password").value;
				if(check_username=="" || check_password=="")
				{
					alertify.alert("Please Fill in all details!!");
					return false;
				}
				else
				{
					return true;
				}
			}
		
	$(document).ready(function(){	
				$("#myResetBtn").click(function(){			
				$("#br_username").html("");		
				$("#br_password").html("");
			});	
		});
		</script>
	</head>
<body style="background:url(images/5.jpg) fixed no-repeat">
	<div class="container" style="box-shadow:0px 0px 20px #ffffff; width:100% !important; height:100%;" >
		<header>
		    <div class="page-header">
		       <div style="margin-left:20px;"> <a href="index.php" ><img src="images/logo.png" /></a> </div>
			   <div style="font-size:40px;position:absolute; top:50px;left:350px;"> <p ><b>Feedback Form Branch Login</b></p></div>		
			</div>
		</header>		
	<div class="container" style="width:90% !important;">
	<div style="float:right;margin-right:10px;">
			<input class="btn btn-primary" type="button"   value="Admin Login" onclick="location.href='admin_login.php';"/>
		</div>
		
	  <div class="shadow-center" style="margin-top:100px;" class="myDownloadedFont">		
		<?php 
		if(isset($_SESSION['errMsg']))
		echo "<div class='alert alert-success' role='alert' style='width:50%;margin:0px 0px 0px 150px;'><p><b>".$_SESSION['errMsg']."</b></p></div>";
		?>	  
		<h3><p>Enter your branch credentials.</p></h3>
			<form  method="POST" action="branch_login.php" onsubmit="return check_info();">
				<table class="table table-condensed table-hover myclass">
					<tr>
						<td >	<label><b>Username:</b></label></td>
						<td>	
						  <input style="height:30px;" type="text" id="br_username" name="br_username"/>
						</td>
					</tr>
					<tr>
					  <td> <label><b>Password:</b></label></td>
						<td>
						 <input style="height:30px;" type="password" id="br_password" name="br_password"/>
						</td>
					</tr>
				</table>				
				<input class="btn btn-primary" type="submit" id="mybutonclick"  value="Login" />				
				<input class="btn" type="reset" id="myResetBtn"/>
			</form>		
	  </div>
		
				<!-- result table div-->
		<div id="resultcontent"></div>
		<div class="navbar navbar-default navbar-fixed-bottom">
			<div class="container">
				<p style="float:right" ><b>&copy;2015 Copyright protected.</b></p>
			</div>
		</div>
	</div>	
</div>
</body>
</html>
