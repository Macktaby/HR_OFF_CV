<!DOCTYPE html>
<html>
<head>
	  <meta charset="UTF-8">
	  <meta name="description" content="maktaby online cv">
	  <link rel="stylesheet" type="text/css" href="cvstyle.css">
	  <style>
	     .buttonHolder{
			 text-align: center;
		 }
	  </style>
	 
	  <script>
    function submitForm(action)
    {
        document.getElementById('columnarForm').action = action;
        document.getElementById('columnarForm').submit();
    }
     </script>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
<div>
	<form id="columnarForm" Method ="POST" action="">
		<div class="buttonHolder">
		<input type="submit" name = "signin1" value="signin as user " id="signin1" class="button button2" onclick="submitForm('firsttime.php')" class="submit_button" >
		<input type="submit" name = "signin2" value="login as admin" id="signin2" class="button button2" onclick="submitForm('admin.php')" class="submit_button">
		<input type="submit" name = "signin3" value="login as user " id="signin3" class="button button2" onclick="submitForm('user.php')" class="submit_button" >
		</div>
	</form> 
</div>
