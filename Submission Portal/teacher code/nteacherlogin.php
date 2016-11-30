<?php
@session_start();
$_SESSION['tid']=$_POST['tid'];
$_SESSION['password']=$_POST['password'];
include_once("subdatabase.php");
$query="select * from teacher where tid='$_SESSION[tid]' and password='$_SESSION[password]'";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)>0)
{   
	$row= mysqli_fetch_array($result);
	$_SESSION['name']=$row['name'];
	$_SESSION['branch']=$row['branch'];
	ob_clean();

}
else
{	
echo "error: ".$query.$con->error;
echo "login failed";
}

header('Location:TEACHER.html');
exit;
?>