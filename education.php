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
	
	$sql = "INSERT INTO education (
	educationalinstitution,
	certificate,
	specialization,
	certificatedate,
	country,
	city,
	grade
	)
VALUES (
   '$_POST[educationalinstitution]',
   '$_POST[certificate]',
   '$_POST[specialization]',
   '$_POST[certificatedate]',
   '$_POST[country]',
   '$_POST[city]',
   '$_POST[grade]'
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
	<form Method ="POST" action="education.php">
		 <!-- this is the personal information section -->
		<h1>Education</h1>
		
		
		  <label for="educationalinstitution">Educational institution</label><br>
		  <input type="text" name="educationalinstitution" value="" placeholder="Enter your educational institution ...">
		<br>
		  <label for="certificate">Certificate</label><br>
		  <input type="text" name="certificate" value="" placeholder="Enter your certificate ...">
		<br>
		  <label for="specialization">Specialization</label><br>
		  <input type="text" name="specialization" value="" placeholder="Enter your specialization ...">
		<br>
		  <label for="certificatedate">Certificate date</label><br>
		  <input type="date" name="certificatedate" value="" >
		<br>
		  <label for="country">Country</label><br>
		  <input type="text" name="country" value="" placeholder="Enter the country where you graduated ...">
		<br>
		  <label for="city">City</label><br>
		  <input type="text" name="city" value="" placeholder="Enter your city ...">
		<br>
		<label for="grade">Grade</label><br>
		  <input type="text" name="grade" value="" placeholder="Example : number from 1 to 100 followed by % ...">
		<br><br>
		<input type="submit" name = "insert" value="insert" id="insert" class="button button2">
		  
	</form> 
</div>
</body>
</html>