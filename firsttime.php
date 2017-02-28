<!DOCTYPE html>
<html>
<head>
	  <meta charset="UTF-8">
	  <meta name="description" content="maktaby online cv">
	  <link rel="stylesheet" type="text/css" href="cvstyle.css">
	  
</head>
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
	
	$sql = "INSERT INTO login (
	username,
	email,
	password
	)
	VALUES (
	'$_POST[username]',
	'$_POST[email]',
	'$_POST[password]'
	)";
	if ($conn->query($sql) === TRUE) {
		$last_id = $conn->insert_id;
		echo '<script>
					function myFunction() {
					alert("Your data was added successfully and your CV ID:'.$last_id.'");
					}
					myFunction();
			</script>';
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
<body>
<div>
	<form Method ="POST" action="firsttime.php">
	<h1>Singin</h1>
		
		  <label for="username">user name</label><br>
		  <input type="text" name="username" value="" placeholder="Enter your name ...">
		<br>
		  <label for="email">E-mail</label><br>
		  <input type="text" name="email" value="" placeholder="Example email@Website.com ...">
		<br>
		  <label for="website">password</label><br>
		  <input type="password" name="password" value="" placeholder="Enter the password ...">
		<br><br>
		<input type="submit" name = "insert" value="signin" id="insert" class="button button2">
	</form> 
</div>