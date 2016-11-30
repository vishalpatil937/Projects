<?php
@session_start();
include_once("subdatabase.php");
$subject=$_GET['var'];

$today=date('Y-m-d');
$query2=" select * from submission where subject='$subject' order by deadline";
$result2=mysqli_query($con,$query2);
$numrows=mysqli_num_rows($result2);
echo "<center><p class='toggle-header' style='font-size:1.3em' >Number of Assignments given:&nbsp;<b> ".$numrows."</b></p></center>";  
$count =1;
if($numrows>0)
{	echo "<div class='list-group'>";
	while($count<= $numrows)
	{
		$row2=mysqli_fetch_array($result2);
	
		echo "<a class='list-group-item' href='#' onclick=assignmentdetails("."'".$row2['assign_id']."')><b>".$count.".&nbsp;</b>".$row2['description']."</a>";
	
		$count++;
	}
	echo "</div>";
}