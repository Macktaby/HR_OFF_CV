<!DOCTYPE html>
<html>
<head>
	  <meta charset="UTF-8">
</head>
<body>
<form Method ="GET" action="cv.php">
<!--create db connection -->
     <?php
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
	

	  $conn->close(); ?>
	  
	  
	  <!--this is to view data inserted to database cv -->
	 
	 
	 <h1>Personal information</h1>
	 First name:
	  <?php echo " ".$_POST["firstname"] ?>
	<br>
	  Last name:
	  <?php echo " ".$_POST["lastname"] ?>
	<br>
	  Date of birth:
	  <?php echo " ".$_POST["dateofbirth"] ?>
	<br>
	  Gender:
	  <?php echo " ".$_POST["gender"] ?>
	<br>
	  Nationality:
	  <?php echo " ".$_POST["nationality"] ?>
	<br>
	  Visa status:
	  <?php echo " ".$_POST["Visastatus"] ?>
	<br>
	 Other nationalities:
	  <?php echo " ".$_POST["Visastatus"] ?>
	<br>
	  Country:
	  <?php echo " ".$_POST["Visastatus"] ?>
	<br>
	  Social status:
	  <?php echo " ".$_POST["Visastatus"] ?>
	<br>
	  Number of dependents:
	  <?php echo " ".$_POST["Visastatus"] ?>
	<br>
	  Driving license:
	  <?php echo " ".$_POST["Visastatus"] ?>
	<br><br>
	<input type="submit" value="edit" >
	  </form>
</body>