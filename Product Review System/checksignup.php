<?php
session_start();
$con=mysqli_connect('localhost','root','','inter1');
$username=$_POST['username'];
$password=$_POST['password'];
$query="insert into users values('$username','$password')";
if($_POST["code"]!=$_SESSION['vercode'])
{
	
ob_clean();
include('signup.php');
echo"<br><br><br><h2 style='margin-left:-450px;'>INVALID CAPTCHA</h2>";
}
else if(strlen($password)<8)
{
	ob_clean();
include('signup.php');
echo"<br><br><br><h2 style='margin-left:-450px;'>WEAK PASSWORD</h2>";
}
else
{
mysqli_query($con,$query);
echo "<script type='text/javascript'>alert('SIGN-UP SUCCESSFUL');</script>";
include('inter1home.php');	
}

?>
