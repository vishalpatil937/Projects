<?php
include_once("subdatabase.php");
@session_start();
$stat=$_GET['var'];

if($stat==2){
$query2=" select * from submission where branch='$_SESSION[branch]' and semester='$_SESSION[semester]' order by deadline";
$result2=mysqli_query($con,$query2);
$numrows=mysqli_num_rows($result2);
$count =1; 
$count2=0; //this is internal query count, this is useful as link n for geting total number of to be submitted
if($numrows>0)
{
	while($count<= $numrows)
	{
		$row2=mysqli_fetch_array($result2);
		
				$query=" select * from st_submission where assign_id='$row2[assign_id]' and roll='$_SESSION[id]'  ";
				$result=mysqli_query($con,$query);
				$nrows=mysqli_num_rows($result);
		if ($nrows==0)			//assignment not submitted, checks if exists in st_submission table
		{		
				$count2++;
		}
		
		$count++;
			
	}
}

$_SESSION['tobesubmitted']=$count2;
echo $count2;
}


// Unchecked count
if($stat==4){
$query3=" select * from st_submission where roll='$_SESSION[id]' and status='uncheck' ";
$result3=mysqli_query($con,$query3);
$numrows=mysqli_num_rows($result3);
$count3=$numrows;

$_SESSION['uncheck']=$count3;
echo $count3;
}
// Checked count
if($stat==3){
$query4=" select * from st_submission where roll='$_SESSION[id]' and status='check'";
$result4=mysqli_query($con,$query4);
$numrows=mysqli_num_rows($result4);
$count4 =$numrows;

$_SESSION['check']=$count4;
echo $count4;
}
if($stat==1){
	$submitted=$_SESSION['check'] + $_SESSION['uncheck'];
	echo $submitted;

}
?>