<?php
@session_start();
include_once("subdatabase.php");
$_SESSION['assign_id']=$_GET['var']; //session variable used in assigndetails2

echo <<<table
	<table class="table table-striped">
		<thead>
			<th>Subject</th>
			<th>Topic</th>
			<th>Mode</th>
			<th>File</th>
			<th>Assign Date</th>
			<th>Deadline</th>
		</thead>
		<tbody>
			<tr>
table;

$query1=" select * from submission where assign_id='$_SESSION[assign_id]' ";
$result1=mysqli_query($con,$query1);

	$row1=mysqli_fetch_array($result1);
	echo"<td>".$row1['subject']."</td>";
	echo"<td>".$row1['description']."</td>";
	echo "<td>".$row1['mode']."</td>";

	$filename=$row1['file'];
	echo "<td><a  href = \"uploads\\$filename\" target = \"_blank\" data-toggle='tooltip' data-placement='bottom' title='View' ><span  class='ajax_btn glyphicon glyphicon-eye-open' style='font-size:20px;color:blue;margin-right:40px;margin-left:20px;'></span></a>";
	echo "<a chref = \"uploads\\$filename\" target = \"_blank\" download data-toggle='tooltip' data-placement='bottom' title='Download'><span class='glyphicon glyphicon-download-alt' style='font-size:20px;color:blue'></span></a></td>";
	echo" <td>".$row1['datetime']."</td>";

	echo"<td>".$row1['deadline']."</td>";
	echo "</tr>";
  echo "</tbody></table>";
	
	
$_SESSION['mode']=$row1['mode']; 	//using it in teacherselectassign2,submitremarks
	
if($_SESSION['mode']=='hardcopy') //hardcopy -  gives list of students submitted, link(modal) to submit grades
{
	echo "<p class='toggle-header' style='font-size:1.3em' ><strong>Note :</strong>This is to submitted as Hardcopy:&nbsp;"; 
	echo "<a href='#' data-toggle='modal' data-target='#togglemodal' onclick=modalhardcopy()>Enter grades</a></p>";	//echo list of students who has submittedgrades and add more dropdown
	
}
else //softcopy - gives list of students submitted , link is roll no to view n submit grades

{
		$query2=" select * from st_submission where assign_id='$_SESSION[assign_id]' and status='uncheck'; ";	
		$result2=mysqli_query($con,$query2);
		$numrows=mysqli_num_rows($result2);
		echo "<center><p class='toggle-header' style='font-size:1.3em' >Unchecked Assignments:&nbsp;<b>".$numrows."</b></p></center>";  //no of students submitted
		echo "<hr class='hr'>";
		if($numrows!=0){
		$count =1;
		echo <<<TABLE
		<table class="table table-striped">
 		<thead>
 			<tr>
 				<th>Roll no </th>
 				<th>Submit date </th>
TABLE;

		if($numrows>0)
		{
		echo <<<TABLE
			 		</tr>
			 		</thead>
			 		<tbody>
TABLE;
		while($count<= $numrows)
		{
		$row2=mysqli_fetch_array($result2);
		echo"<tr>";
		echo "<td><a data-toggle='modal' data-target='#togglemodal' href='#' onclick=modalsoftcopy("."'".$row2['roll']."')>".$row2['roll']."</a><td>";
		echo"<td>".$row2['submit_date']."<td>";
		echo"</tr>";
		$count++;
		}
		}
<<<TABLE
	</tbody>
	</table>
TABLE;
}
}
// list of check assignments
$query2=" select * from st_submission where assign_id='$_SESSION[assign_id]' and status='check'; ";	
$result2=mysqli_query($con,$query2);
$numrows=mysqli_num_rows($result2);
echo "<center><p class='toggle-header' style='font-size:1.3em' >Checked Assignments:&nbsp;<b>".$numrows."</b></p></center>";//no of students submitted
		echo "<hr class='hr'>";
  if($numrows !=0){
$count =1;
echo <<<TABLE
 	<table class="table table-striped">
 		<thead>
 			<tr>
 				<th>Roll no </th>
 				<th>Submit date </th>
					<th>Grade </th>
TABLE;
if($numrows>0)
	{
	echo <<<TABLE
			 		</tr>
			 		</thead>
			 		<tbody>
TABLE;
	
	while($count<= $numrows)
	{
		$row2=mysqli_fetch_array($result2);
		echo"<tr>";
		echo  "<td>".$row2['roll']."</td>";
		echo"<td>".$row2['submit_date']."</td>";
		echo"<td>".$row2['grade']."</td>";
		echo"</tr>";
		$count++;
	}

<<<TABLE
	</tbody>
	</table>
TABLE;
	}
}

?>	
	