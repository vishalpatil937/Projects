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
border-radius:20px;'><h1><a href='adminlogin.php'>ADMINS</a></h1></div>
<div class='home' style='float:right; width:200px; height:80px; border:2px solid blue; 
border-radius:20px;'><h1><a href='logout.php'>LOGOUT</a></h1></div></div>";


echo"<div class='additem'>
<form method='POST' action='addfile.php' enctype='multipart/form-data'>
<br><br>PRODUCT NAME<input type='text' id='name' name='name'/>
<br><br>CITY NAME<input type='text'/>
<br><br>UPLOAD IMAGE<input type='file' name='file' id='file'>
<br><brn>PRODUCT DESCRIPTION<input type='text' id='desc' name='desc'>
<br><br>COST<input type='number' id='cost' name='cost'>
<br><br><center><input type='submit' value='ADD ITEM'></center>
</form>






</div>";




?>