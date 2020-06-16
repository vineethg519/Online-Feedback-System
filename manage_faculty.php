<?php
session_start();
if($_SESSION['loggedin']!=1)
{
	header("location: admin_login.html");
}
?>
<!doctype html>
<html>
	<head>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" >
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="alertify/themes/alertify.core.css" />	
		<link rel="stylesheet" href="alertify/themes/alertify.default.css" />
		<script src="jquery/jquery-1.11.2.min.js"></script>
		<script src="alertify/lib/alertify.min.js"></script>
		<title>Manage Faculty</title>
		<script>
		$(document).ready(function valFunc(){
			$("#mybutonclick").click(function(){
					var branch=$("#branch").val();
					var semester=$("#sem").val();
					var section=$("#sec").val();
					if(branch=="-"||semester=="-"||section=="-")
					{
						alertify.alert("Please fill in all details!!");
						return false;
					}
					else
					{
						return true;
					}
					
				});
			});
		</script>
	</head>

<body style="background:url(images/5.jpg) no-repeat ">
<div class="container" style="box-shadow:0px 0px 20px #ffffff; width:100% !important;height:99%">
	<header>	 
		   <div class="page-header">
		       <div style="margin-left:20px;"> <a href="index.php" ><img src="images/logo.png" /></a> </div>
			   <div style="font-size:40px;position:absolute; top:50px;left:550px;"> <p ><b>ADMIN</b></p></div>		
			</div>	
	</header>	

	  <div style="float:right;margin-right:10px;">
			<input class="btn btn-primary" type="button"   value="Logout" onclick="location.href='logout.php';"/>
		</div>
	<!--	<div style="float:left;margin-left:10px;">
			<input class="btn btn-primary" type="button" id="getFeedback"  value="Get Feedback" onclick="location.href='admin_page.php';"/>
			<input class="btn btn-primary" type="button" id="srchFaculty"  value="Faculty History Search" onclick="location.href='faculty_search.php';"/>
		</div> -->
		<nav>
		<ul class="nav nav-tabs nav-justified">
		  <li role="navigation"><a href="admin_page.php"><b>Get Feedback</b></a></li>
		  <li role="navigation" class="active"><a href="manage_faculty.php"><b>Manage Faculty</b></a></li>
		  <li role="navigation"><a href="faculty_search.php"><b>Faculty History Search</b></a></li>
		</ul>
		</nav>
		<?php
		if(isset($_GET['msg']))
		{
			echo "<div class='alert alert-success' role='alert' style='width:50%;margin:0 auto;text-align: center;'><p><b>".$_GET['msg']."</b></p></div>";
		}		
		?>
		<div class="container" style="width:90% !important;">
		 <div class="shadow-center" style="margin-top:100px;">	 
			<p style="color:green;">Logged-in as ADMIN</p>
			<h3><p>Change faculty for...</p></h3>
			
			<form  method="POST" action="change_faculty.php">
			<table class="table table-condensed table-hover ">
			<tr>
				<td>	<label><b>Branch:</b></label></td>
				<td>	<select  id="branch" name="branch" >
						<option >-</option>
						<option value="CSE">CSE</option>
						<option value="IT">IT</option>
						<option value="EEE">EEE</option>
						<option value="ECE">ECE</option>
						<option value="MECH">MECH</option>
						
					</select>
				</td>
			</tr>
			<tr>
			  <td> <label><b>Semester:	</b></label></td>
				<td><select id="sem" name="semester" >
					<option >-</option>
					<option value="2-1">2-1</option>
					<option value="2-2">2-2</option>
					<option value="3-1">3-1</option>
					<option value="3-2">3-2</option>
					<option value="4-1">4-1</option>
					
				</select>
				</td>
			</tr>
			<tr>
			  <td> <label><b>Section:	</b></label></td>
				<td><select id="sec" name="section" >
					<option >-</option>			
					<option value="A">A</option>
					<option value="B">B</option>
					<option value="C">C</option>					
				</select>
				</td>
			</tr>
			</table>
				
				<input class="btn btn-primary" type="submit" id="mybutonclick"  value="Show Faculty" onsubmit="return valFunc();" />
				
				<input class="btn" type="reset" id="myResetBtn"/>
			</form>		
		</div>
	
	<div class="navbar navbar-default navbar-fixed-bottom">
			<div class="container">
				<p style="float:right" ><b>&copy;2015 Copyright protected.</b></p>
			</div>
		</div>

<script src="bootstrap/js/bootstrap.min.js"></script>
 </div>
</div>
</body>
</html>
