<?php   
		//DB connection
$adm_host="localhost";
$adm_user="root";
$adm_pass="";
$adm_dbname="online_feedback_cse32";
$con=mysqli_connect($adm_host,$adm_user,$adm_pass,$adm_dbname,3306);	
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }	
		//END DB connection
?>