<?php
session_start();
if($_SESSION['loggedin']!=1)
{
	header("location: admin_login.html");
}
?>
<?php
$con;
$branch=$_POST['branch'];
$semester=$_POST['semester'];
$section=$_POST['section'];
			//DB connection
include "db_connect.php";
			//END DB connection
// $lowerCaseBranch = strtolower($branch);
// $facultyTableName="faculty_".$lowerCaseBranch;
			//Query
$getFaculty="SELECT `id`, `faculty_name` FROM `faculty_all` WHERE branch='$branch' AND semester='$semester' AND section='$section'";
			//End Query
			
			//Execute Query
$resultFaculty=mysqli_query($con,$getFaculty) or die(mysqli_error($con));	
if(mysqli_num_rows($resultFaculty)==0)
{?>
    <script> alert("No Faculty Assigned");</script>
<?php
	exit(0);
}
else
{
	$i=0;
	while($array2= mysqli_fetch_array($resultFaculty,MYSQL_NUM))
	{
		$sno[$i]=$array2[0];
		$facultyNameSubject[$i]=$array2[1];		
		$i++;
	}
}
?>
<html>
	<head>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" >
		<link rel="stylesheet" type="text/css" href="style.css">	
		<title>Change Faculty</title>
	</head>

<body style="background:url(images/5.jpg) no-repeat fixed ">
<div class="container" style="box-shadow:0px 0px 20px #ffffff;">
	<header>	 
		   <div class="page-header">
		       <div style="margin-left:20px;"> <a href="index.php" ><img src="images/logo.png" /></a> </div>
			   <div style="font-size:40px;position:absolute; top:50px;left:550px;"> <p ><b>ADMIN</b></p></div>		
			</div>	
	</header>	
	  <div class="container" >
	  <div style="float:right;margin-right:10px;">
			<input class="btn btn-primary" type="button"   value="Logout" onclick="location.href='logout.php';"/>
		</div>
		<div style="float:left;margin-left:10px;">
			<input class="btn btn-primary" type="button" id="mngFaculty"  value="Manage Faculty" onclick="location.href='manage_faculty.php';"/>
		</div>
		<p style="text-align:center;"><b>In order to change a faculty, type (new faculty name)"< br/>"(subject name) and then press CHANGE button.</b></p>
		<div id=""></div>
		<div class="shadow-center" style="margin-top:0px">
			<h3><p>Change Faculty</p></h3>
			<form method='POST' action='change_faculty_db.php'>
			<table class="table " >
			<tr>
			<td>S.no</td>
			<td>Name of the Faculty</td>					
			<td>Change faculty to</td>
			</tr>				
			<?php  	
			for($j=0,$flag1=1;$j<8;$j++,$flag1++)
			{
				echo "<tr><td>". $flag1 ."</td>
				<td>".$facultyNameSubject[$j]."</td>
				<td><input type='text' id='".$facultyNameSubject[$j]."' name='".$j."' style='visibility:none'/></td>
				 </tr>";			
			}					
			echo "</table>"; 
			?>
			<input type='hidden' name='fac_names' value="<?php echo htmlentities(serialize($facultyNameSubject)); ?>" />
			<input type='hidden' name='section' value="<?php echo $section ?>" />
			<input type='hidden' name='semester' value="<?php echo $semester ?>" />
			<input type='hidden' name='branch' value="<?php echo $branch ?>" />
			<input class="btn btn-primary"  value="Change" type="submit" />						
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