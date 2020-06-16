<?php
$adm_host="localhost";
$adm_user="root";
$adm_pass="";
$adm_dbname="online_feedback_cse32";
$a=$_POST['name'];
$con=mysqli_connect($adm_host,$adm_user,$adm_pass,$adm_dbname);	
mysqli_select_db($con,"online_feedback_cse32");

if (!$con)
  {
  echo "Failed to connect to MySQL: ";
  }

$q1="SELECT * FROM `faculty_all_sections_average` WHERE `subject_facultyname` like '%$a%'";
$res=mysqli_query($con,$q1);
$row=mysqli_fetch_row($res);
$len=7;
for ($i=0;$i<$len;$i++)
   echo $row[$i];

?>