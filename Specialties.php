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
	
	$sql = "INSERT INTO specialties (
	one,
	two,
	three,
	four,
	five)
VALUES (
   '$_POST[one]',
   '$_POST[two]',
   '$_POST[three]',
   '$_POST[four]',
   '$_POST[five]'
   )";
	if ($conn->query($sql) === TRUE) {
		$last_id = $conn->insert_id;
		$last_id = $conn->insert_id;
		/*echo '<script>
				function myFunction() {
				alert("Your data was added successfully and your CV ID:'.$last_id.'");
				}
				myFunction();
			 </script>';*/
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
	<form Method ="POST" action="Specialties.php">
		 <!-- this is the personal information section -->
		<h1>Specialties</h1>
		<h2>Insert the most five Specialties you have</h2>
		  <span style="color:red">*</span>1:<input type="text" name="one" value="" placeholder="Example: c# developer ..." required>
		<br>
		  <span style="color:red">*</span>2:<input type="text" name="two" value="" placeholder="Example: c# developer ..." required>
		<br>
		  <span style="color:red">*</span>3:<input type="text" name="three" value="" placeholder="Example: c# developer ...">
		<br>
		  4:<input type="text" name="four" value="" placeholder="Example: c# developer ...">
		<br>
		  5:<input type="text" name="five" value=""placeholder="Example: c# developer ...">
		<br><br>
		<input type="submit" name = "insert" value="insert" id="insert" class="button button2">
		  
	</form> 
</div>
</body>
</html>