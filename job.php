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
		<h1>The Required Job </h1>
		
		
		 
		  <input type="text" name="job" value="" placeholder="Example: developer ...">
		<input type="submit" name = "insert" value="insert" id="insert" class="button button2">
		  
	</form> 
</div>
</body>
</html>