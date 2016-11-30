<?php
@session_start();
include_once("subdatabase.php");

$tid=$_SESSION['tid'];
$branch=$_SESSION['branch'];
$sem=$_POST['sem'];
$subject=$_POST['subject'];
$deadline=$_POST['deadline'];
$mode=$_POST['mode'];
$description=$_POST['description'];
$filename='0.x';
$filename=$_FILES['file']['name'];
if($filename!='0.x')
{
$type=$_FILES["file"]["type"];
move_uploaded_file($_FILES["file"]["tmp_name"],"uploads/".$_FILES["file"]["name"]);
}


$query="INSERT INTO submission (`branch`, `semester`, `tid`, subject, `description`,mode,`file`,datetime,`deadline`) VALUES ('$branch','$sem','$tid','$subject','$description','$mode','$filename',now(),'$deadline')";


if(mysqli_query($con,$query))
{
	echo" assignment sent";
	echo"<BR><BR><a href='logout.php' >LOGOUT</a>";
}
else
{ echo "error: ".$query.$con->error;}

?>