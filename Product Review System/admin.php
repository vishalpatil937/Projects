<?php
$con=mysqli_connect('localhost','root','','inter3');
$query="select * from review where authorize=0;";
$result=mysqli_query($con,$query);
$count=0;
$no_items=mysqli_num_rows($result);

while($count<=$no_items)
{
	$data=mysqli_fetch_array($result);
	$username=$data['username'];
	$review=$data['review'];
	echo"<div class='item'>";
echo"$username:$review";

	$count++;
include('tp.php');
echo"</div>";


}
?>