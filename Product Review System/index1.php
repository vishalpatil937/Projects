<?php
echo
"<link rel='stylesheet' href='mainpanel.css'>
<div class='panel'>
<div style='height:80px; border:2px solid red; border-radius:20px;' ><h1>COMPANY NAME </h1></div>
<div style='float:left; width:200px; height:80px; border:2px solid blue; 
border-radius:20px;'><h1>HOME</h1></div>
<div style='float:right; width:200px; height:80px; border:2px solid blue; 
border-radius:20px;'><h1>SIGN-UP</h1></div>
<div style='float:right; width:200px; height:80px; border:2px solid blue; 
border-radius:20px;'><h1>USERS</h1></div>
<div style='float:right; width:200px; height:80px; border:2px solid blue; 
border-radius:20px;'><h1>ADMINS</h1></div>";
echo"<br><br><br><br><br><hr><center><h2>USER LOGIN</h2></center><hr>";
echo"
<form action='check.php' method='POST'>
USERNAME<input type='text' name='username' id='username'>";
echo"<br>PASSWORD<input type='password' name='password' id='password'>";
echo"<br><input type='submit' value='LOGIN' id='submit'> </form>";

?>