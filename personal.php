<!DOCTYPE html>
<html>
<head>
	  <meta charset="UTF-8">
	  <meta name="description" content="maktaby online cv">
	  <link rel="stylesheet" type="text/css" href="cvstyle.css">
</head>
<body>

<!--create db connection -->
<?php

//insert
 if(isset($_POST['insert'])) {
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "cv";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password,$db);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	//echo "Connected successfully";
		
	//insert
	
	$sql="INSERT INTO `personal`
	(
	  `firstname`,
	  `lastname`,
	  `dateofbirth`,
	  `gender`,
	  `nationality`,
	  `Visastatus`,
	  `Othernationalities`,
	  `Country`,
	  `Socialstatus`,
	  `Numberofdependents`,
	  `Drivinglicense`
	) 
	VALUES 
	(
	  '$_POST[firstname]',
	  '$_POST[lastname]',
	  '$_POST[dateofbirth]',
	  '$_POST[gender]',
	  '$_POST[nationality]',
	  '$_POST[Visastatus]',
	  '$_POST[Othernationalities]',
	  '$_POST[Country]',
	  '$_POST[Socialstatus]',
	  '$_POST[Numberofdependents]',
	  '$_POST[Drivinglicense]'
	)";
	if ($conn->query($sql) === TRUE) {
		$last_id = $conn->insert_id;
		echo "Your data was added successfully and your CV ID:$last_id";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
//update
elseif(isset($_POST['update'])) {
	$username = "root";
	$password = "";
	$db = "cv";
	// Create connection
		
	$conn = mysqli_connect($servername, $username, $password,$db);

	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	//echo "Connected successfully";
}
?>
<div>
	<form Method ="POST" action="cv.php">
		 <!-- this is the personal information section -->
		<h1>Personal Information</h1>
		
		
		  <label for="firstname">First Name</label><br>
		  <input type="text" name="firstname" value="" placeholder="Enter First Name ...">
		<br>
		  <label for="lastname">Last Name</label><br>
		  <input type="text" name="lastname" value="" placeholder="Enter your Last Name ...">
		<br>
		  <label for="dateofbirth">Date of birth</label><br>
		  <input type="date" name="dateofbirth" value="" placeholder="Enter your Date of birth ...">
		<br>
		  <label for="gender">Gender</label><br>
		  <input type="text" name="gender" value="" placeholder="Enter your Gender ...">
		<br>
		  <label for="nationality">Nationality</label><br>
		  <input type="text" name="nationality" value="" placeholder="Enter your Nationality ...">
		<br>
		  <label for="Visastatus">Visa status</label><br>
		  <input type="text" name="Visastatus" value="" placeholder="Enter value if you have visa ...">
		<br>
		  <label for="Othernationalities">Other nationalities</label><br>
		  <input type="text" name="Othernationalities" value="" placeholder="Enter your Nationality ...">
		<br>
		  <label for="Country">Country</label><br>
		  <input type="text" name="Country" value="" placeholder="Enter your Country ...">
		<br>
		  <label for="Socialstatus">Social status</label><br>
		  <input type="text" name="Socialstatus" value="" placeholder="Example : married ...">
		<br>
		  <label for="Numberofdependents">Number of dependents</label><br>
		  <input type="text" name="Numberofdependents" value="" placeholder="Enter number of dependents you have ...">
		<br>
		  <label for="Drivinglicense">Driving license</label><br>
		  <input type="text" name="Drivinglicense" value="" placeholder="Enter from where you git your Driving license ...">
		<br><br>
		
		<input type="submit" name = "insert" value="insert" id="insert" class="button button2">
		  
	</form> 
</div>
</body>
</html>
