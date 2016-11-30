<?php
include_once("subdatabase.php");
@session_start();
//modal harcopy on submit goes to submitremarks
if($_SESSION['mode']=='hardcopy')//this is change
{echo 
			
	"
			<form id='submission' method='POST' action='javascript:hardcopygrades();' enctype='multipart/form-data'>
			
			Roll no :
			<input type='number' name='roll' id='roll'><br><br>
			Submitted date:
			<input type='date' name='submit_date' id='submit_date'><br>
		
			GRADE :&nbsp;&nbsp;
			<input type='radio' id='grade' name='grade' value='A'>A</input>
			<input type='radio' id='grade' name='grade' value='B'>B</input>
			<input type='radio' id='grade' name='grade' value='C'>C</input>
			<input type='radio' id='grade' name='grade' value='D'>D</input><br><br>
			Remarks :&nbsp;&nbsp;
			<input type='text'id='remarks' name='remarks' style='height:50px; width:150px;'>  
			
			<br><br><button type='submit' class='btn' id='submit'>Submit</button>
			</form></div></div>";


}
//	<center><p class="toggle-header" style='font-size:1.3em'>UPLOAD GRADES</p></center>
//<hr class="hr"><div style="float:left;margin-right:90px"><div style="margin-left:30px">
