<?php
session_start();
$con=mysqli_connect('localhost','root','','inter1');
$item=$_GET['selecteditem'];

$query="select * from product_info where name='$item';";
$result=mysqli_query($con,$query);
$data=mysqli_fetch_array($result);
$image=$data['image'];
$name=$data['name'];
$desc=$data['description'];
$cost=$data['cost'];

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


echo"<div style=' height:350px;width:350px; border:2px solid blue; margin-top:100px;float:left;
margin-left:-200px;'>";

echo"<img src=$image style='height:325px; width:325px;'></div>";
echo"<div style='height:350px;width:600px;border:2px solid blue;margin-left:375px; margin-top:100px;'>";
echo"<h2>$name</h2>";
echo"<br>";
echo"<h2>$desc</h2>";
echo"<br>";
echo"<h2>$cost</h2>";

echo"<form action='addtocart.php'><input type='submit' value='ADD TO CART' ></form>";
echo"</div>";




?>