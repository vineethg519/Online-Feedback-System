<?php
session_start();
$username=$_POST["username"];
$pass=$_POST["password"];
if($username=="adminvjit" && $pass=="thisisadmin")
{   
	$_SESSION['loggedin']=1;
	header("location: admin_page.php");
	exit(0);
}
else
{
    $errMsg="Enter Valid Credentials.";
    $_SESSION['adminErr']=$errMsg;
    header("location: admin_login.php");
}
?>