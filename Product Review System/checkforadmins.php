<?php
session_start();
$con=mysqli_connect('localhost','root','','inter1');
$username=$_POST['username'];
$password=$_POST['password'];
$query="select * from admins where username ='$username' and password='$password'";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)>0)

{
	
	ob_end_clean();
	include'additem.php';	
}
else
{
	ob_end_clean();
	include'wrongdetails.php';	
}
?>