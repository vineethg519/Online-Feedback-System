<?php
@$adm_branch=$_POST["post_branch"];
@$adm_sem=$_POST["post_sem"];
@$adm_section=$_POST["post_sec"];
//@$adm_date=$_POST["post_date"];

			//DB connection
include "db_connect.php";
			//END DB connection

			//SELECT query 	
$lowerCaseBranch = strtolower($adm_branch);
$tableNameAdmin="subjects_average_".$lowerCaseBranch;
//isset($_POST["post_sec"])?$ifSection="AND `section`='$adm_section'":$ifSection="";
$cse_32_query="SELECT `ooad`,`vlsi`,`mefa`,`cd`,`wt`,`ns`,`cd/wt_lab`,`aelcs_lab`, `ooadComm`, `vlsiComm`, `mefaComm`, `cdComm`, `wtComm`, `nsComm`, `cdwtlabComm`, `aelcslabComm` FROM `$tableNameAdmin` WHERE `branch`='$adm_branch' AND `semester`='$adm_sem' AND `section`='$adm_section' AND `date` BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE()";
$result=mysqli_query($con,$cse_32_query);
			//END SELECT query

$ooad_sum=0;
$vlsi_sum=0;
$mefa_sum=0;
$cd_sum=0;
$wt_sum=0;
$ns_sum=0;
$cd_wt_lab_sum=0;
$aelcs_sum=0;
$count=0;
$ooad_comm="";
$vlsi_comm="";
$mefa_comm="";
$cd_comm="";
$wt_comm="";
$ns_comm="";
$cd_wt_lab_comm="";
$aelcs_comm="";
while($array1= mysqli_fetch_array($result,MYSQL_NUM))
{
$count++;
// POINTS
$ooad_sum=$ooad_sum+$array1[0];
$vlsi_sum=$vlsi_sum+$array1[1];
$mefa_sum=$mefa_sum+$array1[2];
$cd_sum=$cd_sum+$array1[3];
$wt_sum=$wt_sum+$array1[4];
$ns_sum=$ns_sum+$array1[5];
$cd_wt_lab_sum=$cd_wt_lab_sum+$array1[6];
$aelcs_sum=$aelcs_sum+$array1[7];

// COMMENTS

$ooad_comm=$ooad_comm.(($array1[8]==""||$array1[8]==" "||$array1[8]=="-")?'':"#".$array1[8]."<br/>");
$vlsi_comm=$vlsi_comm.(($array1[9]==""||$array1[9]==" "||$array1[9]=="-")?'':"#".$array1[9]."<br/>");
$mefa_comm=$mefa_comm.(($array1[10]==""||$array1[10]==" "||$array1[10]=="-")?'':"#".$array1[10]."<br/>");
$cd_comm=$cd_comm.(($array1[11]==""||$array1[11]==" "||$array1[11]=="-")?'':"#".$array1[11]."<br/>");
$wt_comm=$wt_comm.(($array1[12]==""||$array1[12]==" "||$array1[12]=="-")?'':"#".$array1[12]."<br/>");
$ns_comm=$ns_comm.(($array1[13]==""||$array1[13]==" "||$array1[13]=="-")?'':"#".$array1[13]."<br/>");
$cd_wt_lab_comm=$cd_wt_lab_comm.(($array1[14]==""||$array1[14]==" "||$array1[14]=="-")?'':"#".$array1[14]."<br/>");
$aelcs_comm=$aelcs_comm.(($array1[15]==""||$array1[15]==" "||$array1[15]=="-")?'':"#".$array1[15]."<br/>");

// print_r ($commentsArr);
}



if($count!=0)
{
$ooad_sum=$ooad_sum/$count;
$vlsi_sum=$vlsi_sum/$count;
$mefa_sum=$mefa_sum/$count;
$cd_sum=$cd_sum/$count;
$wt_sum=$wt_sum/$count;
$ns_sum=$ns_sum/$count;
$cd_wt_lab_sum=$cd_wt_lab_sum/$count;
$aelcs_sum=$aelcs_sum/$count;

//Forming the points and comments array
$commentsArr=array($ooad_comm,$vlsi_comm,$mefa_comm,$cd_comm,$wt_comm,$ns_comm,$cd_wt_lab_comm,$aelcs_comm);
$pointsArr=array(round($ooad_sum,2),round($vlsi_sum,2),round($mefa_sum,2),round($cd_sum,2),round($wt_sum,2),round($ns_sum,2),round($cd_wt_lab_sum,2),round($aelcs_sum,2));

$getFacultyName="SELECT `faculty_name` FROM `faculty_all` WHERE branch='$adm_branch' AND semester='$adm_sem' AND section='$adm_section'";
$facultyName=mysqli_query($con,$getFacultyName);
$flag_fac=0;
while($facultyName1= mysqli_fetch_array($facultyName,MYSQL_NUM))
{
	$fac[$flag_fac]=$facultyName1[0];
	$flag_fac++;
}

echo "<br><h4><p class='alert alert-success' style='text-align:center;'><u>Feedback of ".$adm_branch." ".$adm_sem." Section ".$adm_section."</u>.<br/>Number of forms filled = ".$count."<h4></p>";
echo "<table class='table table-hover table-bordered tab' style='font-weight:bold;  box-shadow: 0px 0px 20px white;'>
<tr>
<td>Faculty Name(Subject)</td>";
foreach($fac as $fac_sub_name)
	echo "<td>".$fac_sub_name."</td>";
echo "</tr>
<tr>
<td>Average</td>";
foreach($pointsArr as $points)
	echo "<td>".$points."</td>";
echo "</tr>
	  </table>
      <table class='table table-bordered table-hover tab' style='font-weight:bold;  box-shadow: 0px 0px 20px white;'>
	  <tr>
	  <th style='text-align:center;'>COMMENTS SECTION</th>
	  </tr>";
foreach (array_combine($fac, $commentsArr) as $facTable => $commentsArrTable)
{
	echo "<tr>
	<td>".$facTable."</td><td>".$commentsArrTable."</td>
	</tr>";
}
echo "</table><br/><br/>";
}
else
{
 // if forms filled = 0
echo "<br><p style='color:orange;'><b> Number of forms filled = ".$count."</b></p>";
exit(0);
}

// $facTableName="faculty_".$adm_branch;
$getFacultyName="SELECT  `faculty_name` FROM `faculty_all` WHERE branch='$adm_branch' AND semester='$adm_sem' AND section='$adm_section'";
$facultyName=mysqli_query($con,$getFacultyName);

$k=0;
while($facultyName1= mysqli_fetch_array($facultyName,MYSQL_NUM))
{
	//echo $facultyName1[0]."<br>" ;	
	if(mysqli_query($con,"INSERT INTO `online_feedback_cse32`.`faculty_all_sections_average` (`id`, `branch`, `semester`, `section`, `subject_facultyname`,`average`, `comments`, `date`) VALUES (NULL,'$adm_branch', '$adm_sem','$adm_section','$facultyName1[0]',round($pointsArr[$k],2),'$commentsArr[$k]',now())"))
	{
		//echo "inserted";
	}
	else
	{
		//echo "failed";
	}	
	$k++;
}
	
	
?>