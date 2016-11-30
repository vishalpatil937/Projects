<?php
error_reporting(0);
session_start();
if($_SESSION['user_id']==1)
{
	echo"add karuya ";
}
else
{
	echo "<script type='text/javascript'>alert('YOU HAVE TO LOGIN FIRST');</script>";
include('userlogin.php');	
}

?>