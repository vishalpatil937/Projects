<?php
session_start();
echo"<link rel='stylesheet' href='mainpanel.css'>
<div class='panel'>
<div style='height:80px; border:2px solid red; border-radius:20px;' ><h1>COMPANY NAME </h1></div>
<div class='home' style='float:left; width:200px; height:80px; border:2px solid blue; 
border-radius:20px;'><h1><a href='inter1home.php'>HOME</a></h1></div>
<div class='home' style='float:right; width:200px; height:80px; border:2px solid blue; 
border-radius:20px;'><h1><a href='signup.php'>SIGN-UP</a></h1></div>
<div  class='home' style='float:right; width:200px; height:80px; border:2px solid blue; 
border-radius:20px;'><h1><a href='userlogin.php'>USERS</a></h1></div>
<div class='home' style='float:right; width:200px; height:80px; border:2px solid blue; 
border-radius:20px;'><h1><a href='adminlogin.php'>ADMINS</a></h1></div>";

echo"<br><br><br><br><br><br><form method='POST' action='checkforadmins.php'>";
echo"USERNAME<input type='text' id='username' name='username'><br>";
echo"PASSWORD<input type='password' id='password' name='password'><br>";
echo"<input type='submit' value='LOGIN'>";
?>