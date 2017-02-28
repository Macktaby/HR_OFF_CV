<!DOCTYPE html>
<html>
<head>
	  <meta charset="UTF-8">
	  <meta name="description" content="maktaby online cv">
	  <link rel="stylesheet" type="text/css" href="cvstyle.css">
	  
</head>
<?php
     session_start();
	 $email="email1";
	 $password="password1";
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
	<form Method ="POST" action="admin.php">
	<h1>login</h1>
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