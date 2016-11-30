<?php
$con=mysqli_connect('localhost','root','','wtl');
if ($con->connect_error) {
	die("Connection Failed: ".$con->connect_error);
}

?>