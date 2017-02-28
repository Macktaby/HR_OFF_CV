<!DOCTYPE html>
<html>
<head>
	  <meta charset="UTF-8">
	  <link rel="stylesheet" type="text/css" href="cvstyle.css">
</head>
<body>
<!--create db connection -->
<?php

$con = mysql_connect("localhost","root","");
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}
mysql_select_db("cv", $con);

if(isset($_GET['id']))
{
	$id=$_GET['id'];
	if(isset($_POST['submit']))
	{
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$dateofbirth=$_POST['dateofbirth'];
		$gender=$_POST['gender'];
		$nationality=$_POST['nationality'];
		$Visastatus=$_POST['Visastatus'];
		$Othernationalities=$_POST['Othernationalities'];
		$Country=$_POST['Country'];
		$Socialstatus=$_POST['Socialstatus'];
		$Numberofdependents=$_POST['Numberofdependents'];
		$Drivinglicense=$_POST['Drivinglicense'];
		$query3="update `personal` set 
			firstname='$firstname',
			lastname='$lastname',
			dateofbirth='$dateofbirth',
			gender='$gender',
			nationality='$nationality',
			Visastatus='$Visastatus',
			Othernationalities='$Othernationalities',
			Country='$Country',
			Socialstatus='$Socialstatus',
			Numberofdependents='$Numberofdependents',
			Drivinglicense='$Drivinglicense'
			where id='$id'";
		mysql_query($query3);
		echo "Your data was saved successfully";
	}
	$result = mysql_query("select * from `personal` where id='$id'");
	while($rowval = mysql_fetch_array($result))
	{
		 $row = $rowval;
	}
	mysql_close($con);
}
?>
<!--this is to view data inserted to database cv -->
<div>	 
<form method="POST" action="update.php?id=<?php echo $id ?>">	 
	 <h1>Personal information</h1>
	 First name:<br>
	  <input type="text" name="firstname" value="<?php echo $row["firstname"] ?>">
	<br>
	  Last name:<br>
	  <input type="text" name="lastname" value="<?php echo $row["lastname"] ?>">
	<br>
	  Date of birth:<br>
	  <input type="date" name="dateofbirth" value="<?php echo $row["dateofbirth"] ?>">
	<br>
	  Gender:<br>
	  <input type="text" name="gender" value="<?php echo $row["gender"] ?>">
    <br>
	  Nationality:<br>
	  <input type="text" name="nationality" value="<?php echo $row["nationality"] ?>">
	<br>
	  Visa status:<br>
	  <input type="text" name="Visastatus" value="<?php echo $row["Visastatus"] ?>">
	<br>
	  Other nationalities:<br>
	  <input type="text" name="Othernationalities" value="<?php echo $row["Othernationalities"] ?>">
	<br>
	  Country:<br>
	  <input type="text" name="Country" value="<?php echo $row["Country"] ?>">
	<br>
	  Social status:<br>
	  <input type="text" name="Socialstatus" value="<?php echo $row["Socialstatus"] ?>">
	<br>
	  Number of dependents:<br>
	  <input type="text" name="Numberofdependents" value="<?php echo $row["Numberofdependents"] ?>">
	<br>
	  Driving license:<br>
	  <input type="text" name="Drivinglicense" value="<?php echo $row["Drivinglicense"] ?>">
	<br><br>
	<input type="submit" name="submit" value="update" class="button button2">
	  </form>
</div>
</body>