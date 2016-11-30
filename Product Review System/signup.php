<?php

echo"
<script>
function f1(value){
var http=new XMLHttpRequest();
http.onreadystatechange=function(){
if(http.readyState==4){
document.getElementById('strength').innerHTML=http.responseText;
}
}
http.open('GET','checkpassword.php?password='+value,true);
http.send();
}



</script>
<link rel='stylesheet' href='mainpanel.css'>
<div class='panel'>
<div style='height:80px; border:2px solid red; border-radius:20px;' ><h1>COMPANY NAME </h1></div>
<div class='home' style='float:left; width:200px; height:80px; border:2px solid blue; 
border-radius:20px;'><h1><a href='inter1home.php'>HOME</a></h1></div>
<div class='home' style='float:right; width:200px; height:80px; border:2px solid blue; 
border-radius:20px;'><h1><a href='signup.php'>SIGN-UP</a></h1></div>
<div  class='home' style='float:right; width:200px; height:80px; border:2px solid blue; 
border-radius:20px;'><h1><a href='userlogin.php'>USERS</a></h1></div>
<div class='home' style='float:right; width:200px; height:80px; border:2px solid blue; 
border-radius:20px;'><h1><a href='adminlogin.php'>ADMINS</a></h1></div></div>
<hr><h1><center>SIGN-UP</center></h1><hr>";


echo"<form method='POST' action='checksignup.php'>
<center>
USERNAME<input type='text'id='username' name='username'><br><br>
<img src='captcha.php'style='  margin-top:20px;' >
<input type='text'name='code' style='margin-top:-30px;'>

<br><br><br>
<input type='submit' value='SIGNUP' >
<br><br><br><br>
PASSWORD<input type='password' id='password' name='password' onkeyup='f1(this.value)' >
<div id='strength' style='height:20px; border:1px solid black;  
width:300px; margin-left:560px; margin-top:-20px;'>


</form>
";

?>