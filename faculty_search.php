<?php
session_start();
if($_SESSION['loggedin']!=1)
{
	header("location: admin_login.html");
}
			//DB connection
include "db_connect.php";
			//END DB connection
?>
<html>

	<head class="noprint">
	    <link rel="stylesheet" type="text/css"  media="print" href="print.css"/>
	    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"/>
		<link rel="stylesheet" type="text/css" href="style.css"/>	
		<link rel="stylesheet" type="text/css" href="style_header.css"/>	
		<link rel="stylesheet" href="alertify/themes/alertify.core.css" />	
		<link rel="stylesheet" href="alertify/themes/alertify.default.css" />
		<title>ADMIN PAGE</title>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="jquery/jquery-1.11.2.min.js"></script>
		<script src="alertify/lib/alertify.min.js"></script>
		<script>
		$(document).ready(function(){
			$("#mybutonclick").click(function(){
					var fac_name=$("#fac_name").val();
					if(fac_name=="-")
					{
						alertify.alert("Please fill in a name!!");
					}
					else
					{
					 $.post("admin_faculty_search.php",
							{
							  post_fac_name:fac_name
							},
							function(data,status){
							 <!--  alert("Data: " + data + "\nStatus: " + status); -->
							  $("#resultcontent").html(data);
							});
					}	
					<!-- testclick(); -->
			});						
		});
	$(document).ready(function(){	
				$("#myResetBtn").click(function(){			
				$("#resultcontent").html("");		
				$("#truncdiv").html("");
				$("#truncdiv").css('display','none');
			});	
		});
		</script>
		<style>
	
		</style>
	</head>

<body style="background:url(images/5.jpg) fixed no-repeat">
	<div class="container" style="box-shadow:0px 0px 20px #ffffff; width:100% !important;" >
		<header class="noprint">
		   <div class="page-header">
		       <div style="margin-left:20px;"> <a href="index.php" ><img src="images/logo.png" /></a> </div>
			   <div style="font-size:40px;position:absolute; top:50px;left:550px;"> <p ><b>ADMIN</b></p></div>		
			</div>
		</header>
		<div style="float:right;margin-right:10px;" class="noprint">
			<input class="btn btn-primary" type="button" id="logout"  value="Logout" onclick="location.href='logout.php';"/>
		</div>
	<!--	<div style="float:left;margin-left:10px;" class="noprint">
			<input class="btn btn-primary" type="button" id="mngFaculty"  value="Manage Faculty" onclick="location.href='manage_faculty.php';"/>
			<input class="btn btn-primary" type="button" id="getFeedback"  value="Get Feedback" onclick="location.href='admin_page.php';"/>
		</div> -->
				<nav class="noprint">
		<ul class="nav nav-tabs nav-justified">
		  <li role="navigation"><a href="admin_page.php"><b>Get Feedback</b></a></li>
		  <li role="navigation"><a href="manage_faculty.php"><b>Manage Faculty</b></a></li>
		  <li role="navigation" class="active"><a href="faculty_search.php"><b>Faculty History Search</b></a></li>
		</ul>
		</nav>
	<div class="container" style="width:90% !important;">
	  <div class="shadow-center noprint" style="margin-top:100px;">
			<p style="color:green;">Logged-in as ADMIN</p>
			<h3><p>Get Feedback of..</p></h3>
			<form  method="POST" action="admin_results.php">
			<table class="table table-condensed table-hover ">
			<tr>
				<td>	<label><b>Name of Faculty:</b></label></td>
				<td>	<input type="text"  id="fac_name" name="fac_name" style="height:30px;width: 220px;"/></td>

			</tr>
			</table>
				
				<input class="btn btn-primary" type="button" id="mybutonclick"  value="Search" />
				
				<input class="btn" type="reset" id="myResetBtn"/>
			</form>		
		</div>
		<div style="float:right;margin-right:10px;">
			<button class="btn btn-primary noprint " style="width:200px;" onClick="window.print()">Print this page</button>
		</div>	
		<script>
			function check_info()
			{
				var check_fac_name=document.getElementById("fac_name").value;
				if(check_fac_name=="-")
				{
					alert("Please Fill in a name!!");
					return false;
				}
				else
				{
					return true;
				}
			}
			function logout()
			{
				$_SESSION['loggedin']=0;
				
			}
		
		</script>
				<!-- result table div-->
		<div id="resultcontent"></div>
		<div class="navbar navbar-default navbar-fixed-bottom noprint">
			<div class="container">
				<p style="float:right" ><b>&copy;2015 Copyright protected.</b></p>
			</div>
		</div>
	</div>	
</div>

</body>
</html>