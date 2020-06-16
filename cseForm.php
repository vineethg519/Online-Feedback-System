<?php
session_start();
?>
<!doctype html>
<html>
<head>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link rel="stylesheet" type="text/css" href="style_header.css">
<title>Form</title>
<script>
function sum()
{
var firstValue=document.getElementById('num1').value;
var result=parseInt(firstValue);
document.getElementById('two').innerHTML=result;
}
function onSubmit()
{
var div_val_one=document.getElementById("one");
var div_val_two=document.getElementById("two");
var div_val_three=document.getElementById("three");
var div_val_four=document.getElementById("four");
var div_val_five=document.getElementById("five");
var div_val_six=document.getElementById("six");
var div_val_seven=document.getElementById("seven");
var div_val_eight=document.getElementById("eight");

var form_id_Sub1=document.getElementById("avg1");
var form_id_Sub2=document.getElementById("avg2");
var form_id_Sub3=document.getElementById("avg3");
var form_id_Sub4=document.getElementById("avg4");
var form_id_Sub5=document.getElementById("avg5");
var form_id_Sub6=document.getElementById("avg6");
var form_id_Lab1=document.getElementById("avg7");
var form_id_Lab2=document.getElementById("avg8");

form_id_Sub1.value=div_val_one.innerHTML;
form_id_Sub2.value=div_val_two.innerHTML;
form_id_Sub3.value=div_val_three.innerHTML;
form_id_Sub4.value=div_val_four.innerHTML;
form_id_Sub5.value=div_val_five.innerHTML;
form_id_Sub6.value=div_val_six.innerHTML;
form_id_Lab1.value=div_val_seven.innerHTML;
form_id_Lab2.value=div_val_eight.innerHTML;

} 
function empty_div()
{
var empty ="";
document.getElementById('one').innerHTML=empty;
document.getElementById('two').innerHTML=empty;
document.getElementById('three').innerHTML=empty;
document.getElementById('four').innerHTML=empty;
document.getElementById('five').innerHTML=empty;
document.getElementById('six').innerHTML=empty;
document.getElementById('seven').innerHTML=empty;
document.getElementById('eight').innerHTML=empty;
}
function sum1(id1)
{
var temp;
var res=0;
var temp1;
var temp2;
switch(id1.id)
{

	case '10':		for(var i=1;i<11;i++)
					{
						temp=i.toString();
						temp1=document.getElementById(temp).value;
						temp2=parseInt(temp1);
						res=res+temp2;
					}
					res=res/10;

					document.getElementById('one').innerHTML=res;
					break;
					
	case '20':		res=0;
					for(var i=11;i<21;i++)
					{
						temp=i.toString();
						temp1=document.getElementById(temp).value;
						temp2=parseInt(temp1);
						res=res+temp2;
					}
					res=res/10;

					document.getElementById('two').innerHTML=res;
					break;
	case '30':		res=0;
					for(var i=21;i<31;i++)
					{
						temp=i.toString();
						temp1=document.getElementById(temp).value;
						temp2=parseInt(temp1);
						res=res+temp2;
					}
					res=res/10;

					document.getElementById('three').innerHTML=res;
					break;
	case '40':		res=0;
					for(var i=31;i<41;i++)
					{
						temp=i.toString();
						temp1=document.getElementById(temp).value;
						temp2=parseInt(temp1);
						res=res+temp2;
					}
					res=res/10;

					document.getElementById('four').innerHTML=res;
					break;
	case '50':		res=0;
					for(var i=41;i<51;i++)
					{
						temp=i.toString();
						temp1=document.getElementById(temp).value;
						temp2=parseInt(temp1);
						res=res+temp2;
					}
					res=res/10;

					document.getElementById('five').innerHTML=res;
					break;
	case '60':		res=0;
					for(var i=51;i<61;i++)
					{
						temp=i.toString();
						temp1=document.getElementById(temp).value;
						temp2=parseInt(temp1);
						res=res+temp2;
					}
					res=res/10;

					document.getElementById('six').innerHTML=res;
					break;
	case '70':		res=0;
					for(var i=61;i<71;i++)
					{
						temp=i.toString();
						temp1=document.getElementById(temp).value;
						temp2=parseInt(temp1);
						res=res+temp2;
					}
					res=res/10;

					document.getElementById('seven').innerHTML=res;
					break;
	case '80':		res=0;
					for(var i=71;i<81;i++)
					{
						temp=i.toString();
						temp1=document.getElementById(temp).value;
						temp2=parseInt(temp1);
						res=res+temp2;
					}
					res=res/10;

					document.getElementById('eight').innerHTML=res;
					break;				
	
}
}
</script>
<style>
select
{
width:100px;
height:27px;

}
table {
width: 100%;
height: 525px;
text-align:center;

}
table td{
border-top: 1px solid #dddddd;

}

</style>

</head>
<?php  
include 'db_connect.php';
$semester=$_POST['selSem'];
$branch=$_SESSION['selectedBranch'];
$section=$_POST['section'];
			//Query
$getFaculty="SELECT  `faculty_name` FROM `faculty_all` WHERE branch='$branch' AND semester='$semester' AND section='$section'";	
			//End Query
			
			//Execute Query
$resultFaculty=mysqli_query($con,$getFaculty) or die(mysqli_error($con));
			//END Execute Query
	
?>
<body style="background:url(images/5.jpg) fixed">
<script src="bootstrap/js/bootstrap.min.js"></script>
<div  style=" height:100%;">
<!-- <img id=bg src="images/2.jpg"/> -->
    <header  >
	   <div class="page-header">
	   <div style="margin-left:20px;"> <a href="index.php" ><img src="images/logo.png" /></a> </div>
	   <div style="font-size:40px;position:absolute; top:50px;left:440px;"> <p style="font-size:40px;text-align:center; "><b><span style="font-family:verdana;"><?php echo $_SESSION['selectedBranch']." ".$semester." ".$section." ";?></span>Feedback Form</b></p> </div>
		</div>
	</header>	

 <div  >
<p style="text-align:center"><b>Rate your faculty in a range of 1 to 10. 1(poor)-10(Excellent) </b></p>
<form method="POST" action="submit_cse.php">
		<table  >
			<tr>
				<td><b> Quality</b></td>
				<?php	
				if (mysqli_num_rows($resultFaculty)!=0) 
				{
					while($arr1=mysqli_fetch_array($resultFaculty,MYSQL_NUM))
					foreach($arr1 as $facTableName)
					echo "<td><strong>".$facTableName."</strong></td>";
				}
				else
				{
					echo "<p style='text-align:center;color:red;font-weight:bold;'>FACULTY YET TO BE ASSIGNED TO THIS SECTION!!(Do not fill this form unless until assigned.)</p>";
				}
				?>
				
			</tr>
			<tr>
				<td><strong>1.Knows the Subject well<br/><br/></strong></td>
				<td> 
					<select id="1" name="11" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>						
					</select>
				</td>
				<td> 
					<select id="11" name="12" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="21" name="13" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="31" name="14" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="41" name="15" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="51"  name="16" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="61" name="17" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="71" name="18" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
			</tr>
			<tr>
				<td><strong>2.Communication<br/><br/></strong></td>
				<td> 
					<select id="2" name="21" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="12" name="22" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="22" name="23" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="32" name="24" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="42" name="25" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="52" name="26" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="62" name="27" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="72" name="28" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
			</tr>
			<tr>
				<td><strong> 3.Content of Lecture<br/><br/></strong></td>
				<td> 
					<select id="3" name="31" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="13" name="32" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="23" name="33" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="33" name="34" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="43" name="35" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="53" name="36" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="63" name="37" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="73" name="38" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
			</tr>
			<tr>
				<td><strong>4.Punctuality<br/><br/></strong></td>
				<td> 
					<select id="4" name="41" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="14" name="42" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="24" name="43" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="34" name="44" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="44" name="45" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="54" name="46" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="64" name="47" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="74" name="48" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
			</tr>
			<tr>
				<td><strong>5.Counselling<br/><br/></strong></td>
				<td> 
					<select id="5" name="51" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="15" name="52" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="25" name="53" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="35" name="54" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="45" name="55" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="55" name="56" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="65" name="57" required>
						<option value="">-</option>
					<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="75" name="58" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
			</tr>
			<tr>
				<td><strong>6.Commitment<br/><br/></strong></td>
				<td> 
					<select id="6" name="61" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="16" name="62" required>
						<option value="">-</option>
					<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select  id="26" name="63" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="36" name="64" required>
						<option value="">-</option>
					<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="46" name="65" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="56" name="66" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="66" name="67" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="76" name="68" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
			</tr>
			<tr>
				<td><strong>7.Professional Behaviour<br/><br/></strong></td>
				<td> 
					<select id="7" name="71" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="17" name="72" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="27" name="73" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="37" name="74" required>
						<option value="">-</option>
					<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="47" name="75" required>
						<option value="">-</option>
					<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="57" name="76" required>
						<option value="">-</option>
					<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="67" name="77" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="77" name="78" required>
						<option value="">-</option>
					<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
			</tr>
			<tr>
				<td><strong>8.Use of Modern Aids<br/><br/></strong></td>
				<td> 
					<select id="8" name="81" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="18" name="82" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="28" name="83" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="38" name="84" required>
						<option value="">-</option>
					<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="48" name="85" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="58" name="86" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="68" name="87" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="78" name="88" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
			</tr>
			<tr>
				<td><strong>9.Clarification of Doubts<br/><br/></strong></td>
				<td> 
					<select id="9" name="91" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="19" name="92" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="29" name="93" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="39" name="94" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="49" name="95" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="59" name="96" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="69" name="97" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="79" name="98" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
			</tr>
			<tr>
				<td><strong> 10.Explanation of Real Time<br> Examples</strong></td>
				<td> 
					<select id="10" name="101" onchange="sum1(this);" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="20" name="102" onchange="sum1(this);" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="30" name="103" onchange="sum1(this);" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="40" name="104" onchange="sum1(this);" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="50" name="105" onchange="sum1(this);" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="60" name="106" onchange="sum1(this);" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="70" name="107" onchange="sum1(this);" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
				<td> 
					<select id="80" name="108" onchange="sum1(this);" required>
						<option value="">-</option>
						<?php for($i=1;$i<11;$i++) echo "<option value='".$i."'>".$i."</option>"; ?>
					</select>
				</td>
			</tr>
							<!-- values that are being submitted START-->
			<tr>
			<td><strong>Comments</strong></td>
			<td><textarea rows="3" cols="15" name="Sub1Comm" style="width:auto"></textarea></td>
			<td><textarea rows="3" cols="15" name="Sub2Comm" style="width:auto"></textarea></td>
			<td><textarea rows="3" cols="15" name="Sub3Comm" style="width:auto"></textarea></td>
			<td><textarea rows="3" cols="15" name="Sub4Comm" style="width:auto"></textarea></td>
			<td><textarea rows="3" cols="15" name="Sub5Comm" style="width:auto"></textarea></td>
			<td><textarea rows="3" cols="15" name="Sub6Comm" style="width:auto"></textarea></td>
			<td><textarea rows="3" cols="15" name="Lab1Comm" style="width:auto"></textarea></td>
			<td><textarea rows="3" cols="15" name="Lab2Comm" style="width:auto"></textarea></td>
			
			</tr>
			<tr>
			   
				<td><strong>Average</strong></td>
				<td><strong><div id="one"> </div></strong></td>
				<td><strong><div id="two"> </div></strong></td>
				<td><strong><div id="three"> </div></strong></td>
				<td><strong><div id="four"> </div></strong></td>
				<td><strong><div id="five"> </div></strong></td>
				<td><strong><div id="six"> </div></strong></td>
				<td><strong><div id="seven"> </div></strong></td>
				<td><strong><div id="eight"> </div></strong></td>
			</tr>
							
							
			<input id="avg1" name="Sub1" value="" type="hidden"/>
			<input id="avg2" name="Sub2" value="" type="hidden"/>
			<input id="avg3" name="Sub3" value="" type="hidden"/>
			<input id="avg4" name="Sub4" value="" type="hidden"/>
			<input id="avg5" name="Sub5" value="" type="hidden"/>
			<input id="avg6" name="Sub6" value="" type="hidden"/>
			<input id="avg7" name="Lab1" value="" type="hidden"/>
			<input id="avg8" name="Lab2" value="" type="hidden"/>
			
				 
		</table>
		<input class="btn btn-primary" style="margin-left:1200px;" type="submit" value="Submit" onclick="onSubmit();"/>
		<input class="btn" type="reset" name="reset" onclick="empty_div();"/>
		
		
		<input class="btn btn-primary" type="hidden" name="selSem" value="<?php echo $_POST['selSem']?>" />
		<input class="btn btn-primary" type="hidden" name="section" value="<?php echo $_POST['section']?>" />
		
	</form>	
</div>

		<div class="navbar navbar-default navbar-fixed-bottom">
			<div class="container">
				<p style="float:right"><b>&copy;2015 Copyright protected .</b></p>
			</div>
		</div>

</body>
</html>