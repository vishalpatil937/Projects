<?php
@session_start();

$sem=$_GET['var'];
$_SESSION['semester']=$sem; //this needed in submitremarks
include_once("subdatabase.php");
if(!empty($_GET['var'])) {
	//USE IN SUBMITREMARKS,generate report
	$query ="SELECT * FROM subjectlist WHERE semester = '" . $sem . "' and branch='$_SESSION[branch]' and taught_by_id='$_SESSION[tid]'";
	$results = mysqli_query($con,$query);
	$sem=mysqli_fetch_assoc($results);
	
	//echo "<option value=''>Select subject</option>";
	$count=1;
	
	echo "<option value=''>Select subject</option>";
	foreach( $results as $sem ){
	echo "<option value='".$sem['subject']."' >" .$sem['subject']."</option>";

	}
}
?>   