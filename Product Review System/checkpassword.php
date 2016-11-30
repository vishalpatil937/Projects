<?php
$password=$_GET['password'];
if(strlen($password)<8)
{
	echo"weak,minimum 8 characters required";
	
}
else
{
	echo"appropriate";
}
?>