<?php
session_start();
$con=mysqli_connect('localhost','root','','inter1');
$filename=$_FILES["file"]["name"];
$name=$_POST['name'];
$desc=$_POST['desc'];
$cost=$_POST['cost'];
move_uploaded_file($_FILES["file"]["tmp_name"],$_FILES["file"]["name"]);
$fileurl=$filename;
echo$fileurl;
$query="insert into items values('$name','$desc','$fileurl',$cost)";
if(mysqli_query($con,$query))
{
ob_clean();
include('adminloggedin.php');
}
else echo mysqli_error($con);


?>