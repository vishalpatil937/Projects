<?php
session_start();
$con=mysqli_connect('localhost','root','','inter1');
$query="select * from items;";
$result=mysqli_query($con,$query);
$count=0;
$no_items=mysqli_num_rows($result);



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
if(isset($SESSION_["user_id"]))
{
	echo"<div class='home' style='float:right; width:200px; height:80px; border:2px solid blue; 
border-radius:20px;'><h1><a href='logout.php'>LOGOUT</a></h1></div>";
}
echo"<br><br><br><br><br><hr><center><h2>ITEMS</h2></center>";
echo"<div style=' height:800px; border:1px solid blue; margin-top:100px;'>";
while($count<$no_items)
{
	$data=mysqli_fetch_array($result);
	$imagepath=$data['image'];
	$itemname=$data['name'];
	echo"<div class='item'>";
	echo"<img src=$imagepath class='image'>";
	echo"<h3><a href='desc.php?selecteditem=$itemname'>$itemname</a></h3>";
	echo"</div>";
	$count++;
	
}
echo"</div>";

?>