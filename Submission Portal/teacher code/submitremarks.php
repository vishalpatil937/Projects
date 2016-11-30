<?php
include_once("subdatabase.php");
@session_start();
//if hardcopy insert , softcopy tar update-because details is already in st_sub table fakta grades n remarks has to updated

if($_SESSION['mode']=='hardcopy')
{
		$roll=$_POST['roll'];
		$grade=$_POST['grade'];
		$remarks=$_POST['remarks'];
		$submit_date=$_POST['submit_date'];
		$query1="INSERT st_submission(roll,branch,semester,assign_id,submit_date,grade,remarks,status)VALUES('$roll','$_SESSION[branch]','$_SESSION[semester]','$_SESSION[assign_id]','$submit_date','$grade','$remarks','check')";  //status initially unchecked is now checked and grades are entered
		if(mysqli_query($con,$query1))
			{
			//echo" remarks are sent";
			//echo"<BR><BR><a href='teacherviewassignment.php' >add more</a>"; //add remarks for more student
			}
		else
			{//echo "error: ".$query1.$con->error;}
		
}
else if($_SESSION['mode']=='softcopy')//softcopy

{
		$remarks=$_POST['remarks'];
		$grade=$_POST['grade'];
		$query1="UPDATE st_submission SET status='check', remarks='$remarks',grade='$grade' WHERE roll='$_SESSION[roll]' and assign_id='$_SESSION[assign_id]'"; //status initially unchecked is now checked and grades are entered
		if(mysqli_query($con,$query1))
			{
			//echo" remarks are sent";
			}			
		else
			{//echo "error: ".$sql.$con->error;}
}	
?>