<?php
include_once("subdatabase.php");
@session_start();
$_SESSION["roll"]=$_GET['var'];
//softcopy grades entery in modal

if($_SESSION['mode']=='softcopy')	
{
	
	
//student che assign details
$query1=" select * from st_submission where roll='$_SESSION[roll]' and assign_id='$_SESSION[assign_id]'";  //fetch student assignment
$result1=mysqli_query($con,$query1);
$row1=mysqli_fetch_array($result1);
	echo <<<table
		<table class="table table-striped">
		<thead>
		<th>Roll No. </th>
		<th>Submitted On. </th>
		<th>File</th>
		</thead>
		<tbody>
table;
	
	echo "<td>".$_SESSION["roll"]."</td>";
	echo "<td>".$row1['submit_date']."</td>";
	$filename=$row1['attachment'];
	echo "<td><a  href = \"uploads\\$filename\" target = \"_blank\" data-toggle='tooltip' data-placement='bottom' title='View' ><span  class='ajax_btn glyphicon glyphicon-eye-open' style='font-size:20px;color:blue;margin-right:40px;margin-left:20px;'></span></a>";
	echo "<a href = \"uploads\\$filename\" target = \"_blank\" download data-toggle='tooltip' data-placement='bottom' title='Download'><span class='glyphicon glyphicon-download-alt' style='font-size:20px;color:blue'></span></a></td></tr>";
echo "</tbody></table>";
echo "<center><p class='toggle-header' style='font-size:1.3em'>Enter Grades</p></center>
			<hr class='hr'>";

//enter grade for student 
echo "<center><form id='softcopygrades' method='POST' enctype='multipart/form-data'>
Grade :<br>
<input type='radio' id='grade' name='grade' value='A'>A</input>&nbsp;&nbsp;
<input type='radio' id='grade' name='grade' value='B'>B</input>&nbsp;&nbsp;
<input type='radio' id='grade' name='grade' value='C'>C</input>&nbsp;&nbsp;
<input type='radio' id='grade' name='grade' value='D'>D</input>&nbsp;&nbsp;
<br><br>Remarks :
<br><input type='text'id='remarks' name='remarks' style='height:50px; width:150px;'>  
<br><button type='submit' id='submit'>Submit</button></form></center>";

}//modal for softcopy end
?>

