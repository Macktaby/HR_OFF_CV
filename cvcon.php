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
	
	$sql = "INSERT INTO cvcon (	email, phonenumber, website)
VALUES ('$_POST[email]', '$_POST[phonenumber]', '$_POST[website]')";

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
	<form Method ="POST" action="cvcon.php">
		 <!-- this is the personal information section -->
		<h1>Contact Information</h1>
		
		
		  <label for="email">E-mail</label><br>
		  <input type="text" name="email" value="" placeholder="Example email@Website.com ...">
		<br>
		  <label for="phonenumber">Phone Number</label><br>
		  <input type="text" name="phonenumber" value="" placeholder="Enter your phone number ...">
		<br>
		  <label for="website">Web Site</label><br>
		  <input type="text" name="website" value="" placeholder="Example www.somthing.somthing ...">
		<br><br>
		<input type="submit" name = "insert" value="insert" id="insert" class="button button2">
		  
	</form> 
</div>
</body>
</html>