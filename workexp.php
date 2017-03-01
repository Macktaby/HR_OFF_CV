<!DOCTYPE html>
<html>
<head>
	  <meta charset="UTF-8">
	  <meta name="description" content="maktaby online cv">
	  <link rel="stylesheet" type="text/css" href="cvstyle.css">
	  <script src="javascript.js"></script>
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
	/*	echo '<script>
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
	<form Method ="POST" action="workexp.php">
		 <!-- this is the personal information section -->
		<h1>Work Experince </h1>
		
		
		  <span style="color:red">*</span><label for="companyname">Company name</label><br>
		  <input type="text" name="companyname" value="" placeholder="Enter the company name ..." required>
		<br>
		  <span style="color:red">*</span><label for="position">Position<label><br>
		  <input type="text" name="position" value="" placeholder="Enter your Position in the company  ..." required>
		<br>
		  <span style="color:red">*</span><label for="startdate">Start date</label><br>
		  <input type="date" name="startdate" value="" required>
		<br>
		  <label for="enddate">End date</label><br>
		  <input type="date" name="enddate" value="">
		<br>
		  <label for="country">Country</label><br>
		  <select id="country" name="country"></select>
		<br>
		  <label for="city">City</label><br>
		  <select name="city" id="state"></select>
		<br><br>
		<input type="submit" name = "insert" value="insert" id="insert" class="button button2">
		  
	</form> 
</div>
<script language="javascript">
            populateCountries("country", "state");
            populateCountries("country2");
        </script>
</body>
</html>