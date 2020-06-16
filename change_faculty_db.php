<?php
session_start();
			//DB connection
include "db_connect.php";
			//END DB connection
@$passed_array = unserialize($_POST['fac_names']);
$section_db=$_POST['section'];
$semester_db=$_POST['semester'];
$branch_db=$_POST['branch'];
for($i=0;$i<8;$i++)
{
	$var1[$i]=$_POST[$i];
}
$z=0;
for($i=0;$i<8;$i++)
{
 
  if(!($_POST[$i]==""))
  {
	//echo "<br/>changed ".$passed_array[$i];
	$arrNewFac[$i]=$_POST[$i];
	$arrOldFac[$i]=$passed_array[$i];
	$strngFac[$i]=htmlentities($arrOldFac[$i], ENT_QUOTES);
	//echo $strngFac[$i];
	$selectQuery[$i]="SELECT id from faculty_all where faculty_name='$arrOldFac[$i]' AND section='$section_db' AND semester='$semester_db' AND branch='$branch_db'";
	$selectQueryRes[$i]=mysqli_query($con,$selectQuery[$i]);
	$resultId[$i]= mysqli_fetch_array($selectQueryRes[$i],MYSQL_NUM);
	      // Update query 
	$query[$i]="UPDATE faculty_all SET faculty_name = '$arrNewFac[$i]' WHERE id='".$resultId[$i][$z]."' AND  section='$section_db';";
	     // END update query		
  }
}
//print_r($query);	
//print_r($resultId);
		//EXECUTING ALL UPDATE QUERIES
foreach($query as $newQuery)
{
	mysqli_query($con,$newQuery);

}	
		//END EXECUTING ALL UPDATE QUERIES
 mysqli_close($con);
header("location: manage_faculty.php?msg='Faculty has been changed successfully'");
?>
</pre>