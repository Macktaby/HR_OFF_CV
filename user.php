<!DOCTYPE html>
<html>
<head>
	  <meta charset="UTF-8">
	  <meta name="description" content="maktaby online cv">
	  <link rel="stylesheet" type="text/css" href="cvstyle.css">
	  
</head>
<?php
     session_start();
	/* 
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
	/////////////////////////////////////////////////////////////////////////////
	if(isset($_POST['insert'])) {
	$email=$_POST['email'];
    $password=$_POST['password'];
	$email = stripslashes($email);
	$password = stripslashes($password);
	$email = mysql_real_escape_string($email);
	$password = mysql_real_escape_string($password);
	$db = mysql_select_db("cv", $connection);
	$query = mysql_query("select * from login where password='$password' AND email='$email'", $connection);
    $rows = mysql_num_rows($query);
	if ($rows == 1) {
$_SESSION['login_in']=$email; // Initializing Session
	header("location: cv.php"); // Redirecting To Other Page
	} else {
	$error = "email or Password is invalid";
	echo $error;
	}
	mysql_close($connection); // Closing Connection
	
	 */
	 $email="email";
	 $password="password";
	 if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']= true){
	     header("Location: cv.php");
	 }
	 if(isset($_POST['email']) && isset($_POST['password'])){
		 if($_POST['email'] == $email && $_POST['password'] == $password){
		     $_SESSION['logged_in']= true;
			  header("Location: cv.php");
		 }
	 }
	 
	
?>
<body>
<div>
	<form Method ="POST" action="user.php">
	<h1>login</h1>
		<br>
		  <label for="email">E-mail</label><br>
		  <input type="text" name="email" value="" placeholder="Example email@Website.com ...">
		<br>
		  <label for="website">password</label><br>
		  <input type="password" name="password" value="" placeholder="Enter the password ...">
		<br><br>
		<input type="submit" name = "signin" value="signin" id="insert" class="button button2">
	</form> 
</div>