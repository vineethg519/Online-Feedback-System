<?php
session_start();
			//Fetching into variables
$Sub1=$_POST["Sub1"];
$Sub2=$_POST["Sub2"];
$Sub3=$_POST["Sub3"];
$Sub4=$_POST["Sub4"];
$Sub5=$_POST["Sub5"];
$Sub6=$_POST["Sub6"];
$Lab1=isset($_POST["Lab1"])?$_POST["Lab1"]:'';
$Lab2=isset($_POST["Lab2"])?$_POST["Lab2"]:'';
$Sub1Comm=isset($_POST["Sub1Comm"])?$_POST["Sub1Comm"]:'';
$Sub2Comm=isset($_POST["Sub2Comm"])?$_POST["Sub2Comm"]:'';
$Sub3Comm=isset($_POST["Sub3Comm"])?$_POST["Sub3Comm"]:'';
$Sub4Comm=isset($_POST["Sub4Comm"])?$_POST["Sub4Comm"]:'';
$Sub5Comm=isset($_POST["Sub5Comm"])?$_POST["Sub5Comm"]:'';
$Sub6Comm=isset($_POST["Sub6Comm"])?$_POST["Sub6Comm"]:'';
$Lab1Comm=isset($_POST["Lab1Comm"])?$_POST["Lab1Comm"]:'';
$Lab2Comm=isset($_POST["Lab2Comm"])?$_POST["Lab2Comm"]:'';

$branch=$_SESSION['selectedBranch'];
$semester=$_POST["selSem"];
$section=$_POST["section"];

			//END Fetching into variables

			//DB connection
include "db_connect.php";
			//END DB connection
			
			//INSERT query subject averages
$lowerCaseBranch = strtolower($branch);
$tableName="subjects_average_".$lowerCaseBranch;
$avg_insert_query="INSERT INTO `online_feedback_cse32`.`$tableName` (`id`, `branch`,`semester`,`section`,`ooad`, `vlsi`, `mefa`, `cd`, `wt`, `ns`, `cd/wt_lab`, `aelcs_lab`, `ooadComm`, `vlsiComm`, `mefaComm`, `cdComm`, `wtComm`, `nsComm`, `cdwtlabComm`, `aelcslabComm`,`date`) VALUES (NULL,'$branch','$semester','$section', '$Sub1', '$Sub2','$Sub3','$Sub4', '$Sub5', '$Sub6', '$Lab1', '$Lab2', '$Sub1Comm', '$Sub2Comm', '$Sub3Comm', '$Sub4Comm', '$Sub5Comm', '$Sub6Comm', '$Lab1Comm', '$Lab2Comm' , now())";		
if(mysqli_query($con,$avg_insert_query)==TRUE)
{
	//echo "<br> Values inserted";
}
else{
	//echo "Values Insertion failed";
}
            //END-- INSERT query subject_averages
			
			
header("location: tq.php");
?>