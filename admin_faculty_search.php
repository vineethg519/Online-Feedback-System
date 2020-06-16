<?php
@$faculty_name=$_POST["post_fac_name"];
			//DB connection
include "db_connect.php";
			//END DB connection

			//SELECT QUERY 	
			//QUERY GETTING FACULTY NAME THAT MATCHES WITH THE GIVEN STRING-- '$faculty_name'
$getFacultyName="SELECT `branch`, `semester`, `section`, `subject_facultyname`, `average`, `comments`, `date` FROM `faculty_all_sections_average` WHERE subject_facultyname like '%$faculty_name%'";
			//END SELECT QUERY
$facultyName=mysqli_query($con,$getFacultyName);			
echo "<br><h4><p class='alert alert-success' style='text-align:center;'><u>Faculty Search Details for '$faculty_name'</u>.<br/><h4></p>";
echo "<table class='table table-hover table-bordered tab' style='font-weight:bold;  box-shadow: 0px 0px 20px white;'>
 <tr>
 <td>S.NO</td><td>Branch</td><td>Semester</td><td>Section</td><td>Faculty Name</td><td>Average</td><td>Comments</td><td>Date</td></tr>";
 $serialNo=1;
while($final_fac_search=mysqli_fetch_array($facultyName,MYSQLI_ASSOC))
{

echo "<tr><td>".$serialNo."</td><td>".$final_fac_search['branch']."</td><td>".$final_fac_search['semester']."</td><td>".$final_fac_search['section']."</td><td>".$final_fac_search['subject_facultyname']."</td><td>".$final_fac_search['average']."</td><td>".$final_fac_search['comments']."</td><td>".$final_fac_search['date']."</td></tr>";
$serialNo++;
}
 echo "</table><br/><br/>";
// }
// else
// {
 // // if forms filled = 0
// echo "<br><p ><b> Number of forms filled = ".$count."<b></p>";
// exit(0);
//}	
?>