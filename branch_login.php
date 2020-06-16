<?php
session_start();
			//DB connection
require_once('db_connect.php');
			//END DB connection
$uname=$_POST['br_username'];
$pass=$_POST['br_password'];

$selectBranchQuery="SELECT branch FROM credentials WHERE username='$uname' AND password='$pass';";
$resultSelectBranchQuery=mysqli_query($con,$selectBranchQuery);
$resArray=mysqli_fetch_array($resultSelectBranchQuery,MYSQL_NUM);
if($resArray[0]=="")
{
 $errMsg="Enter valid Branch credentials.";
 $_SESSION['errMsg']=$errMsg;
 header("location: index.php");
 exit(0);
} 
else
{
// $resArray=mysqli_fetch_array($resultSelectBranchQuery,MYSQL_NUM);
    //$resArray[0]= "selected branch".....
$selectedBranch=$resArray[0];
$_SESSION['selectedBranch']=$selectedBranch;
header("location: semester.php");
}
?>