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
	
	$sql = "INSERT INTO workexperince (
		companyname,
		position,
	    startdate,
	    enddate,
		country,
		city
	
	)
VALUES (
       '$_POST[companyname]',
	   '$_POST[position]',
	   '$_POST[startdate]',
	   '$_POST[enddate]',
	   '$_POST[country]',
	   '$_POST[city]'
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
	<form Method ="POST" action="workexp.php">
		 <!-- this is the personal information section -->
		<h1>Work Experince </h1>
		
		
		  <label for="companyname">Company name</label><br>
		  <input type="text" name="companyname" value="" placeholder="Enter the company name ...">
		<br>
		  <label for="position">Position<label><br>
		  <input type="text" name="position" value="" placeholder="Enter your Position in the company  ...">
		<br>
		  <label for="startdate">Start date</label><br>
		  <input type="date" name="startdate" value="" >
		<br>
		  <label for="enddate">End date</label><br>
		  <input type="date" name="enddate" value="">
		<br>
		  <label for="country">Country</label><br>
		  <input type="text" name="country" value="" placeholder="Enter the country  ...">
		<br>
		  <label for="city">City</label><br>
		  <input type="text" name="city" value="" placeholder="Enter the city  ...">
		<br><br>
		<input type="submit" name = "insert" value="insert" id="insert" class="button button2">
		  
	</form> 
</div>
</body>
</html>