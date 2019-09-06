<!DOCTYPE html>
<html>
<head>
	<title>Student Management System</title>
</head>
<body bgcolor="	#C0C0C0">
<h3 align="right" style="margin-right:20px;"><a href="login.php">Admin Login</a></h3>
<h1 align="center">Welcome to Student Management System</h1>

<form method="post" action="index.php">
<table style="width: 30%;" align="center" border="1">
	<tr>
		<td colspan="2" align="center">Student Information</td>
	</tr>
	<tr>
		<td>Choose Standard</td>
		<td>
			<select name="std">
				<option value="1">1st</option>
				<option value="2">2nd</option>
				<option value="3">3rd</option>
				<option value="4">4th</option>
				<option value="5">5th</option>
				<option value="6">6th</option>
				<option value="7">7th</option>
				<option value="8">8th</option>
				<option value="9">9th</option>
				<option value="10">10th</option>
				<option value="11">11th</option>
				<option value="12">12th</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>Enter Rollno.</td>
		<td align="left">
			<input type="text" name="rollno" required/>
		</td>
	</tr>
	<tr>
		<td colspan="2" align="center"><input type="submit" name="submit" value="Show Info."></td>
	</tr>
</table>
</form>

</body>
</html>

<?php
if(isset($_POST['submit']))
{
	$standard =$_POST['std'];
	$rollno =$_POST['rollno'];
	include('dbcon.php');
	include('function.php');
   
	showdetails($standard,$rollno);
}
?>
<h4 align="center">Use std = 1 and rollno = 21 to see information about roll number 21. <a href="login.php">login</a> to inter more student information</h4>
