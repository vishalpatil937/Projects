<?php
session_start();
$con=mysqli_connect('localhost','root','','inter1');
$username=$_POST['username'];
$password=$_POST['password'];
$query="select * from users where username ='$username' and password='$password'";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)>0)

{
	$_SESSION["user_id"]=1;
	ob_clean();
	include'userloggedin.php';	
}
else
{
	ob_clean();
	include'wrongdetails.php';	
}
?>