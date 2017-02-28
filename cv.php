<!DOCTYPE html>
<html>
<head>
	  <meta charset="UTF-8">
	  <meta name="description" content="maktaby online cv">
	  <link rel="stylesheet" type="text/css" href="cvstyle.css">
	  <link rel="stylesheet" type="text/css" href="cvin.css">
	  <style>

	 #go6:hover {
     box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
	 background-color: #999966;
     }
	 #go7:hover {
     box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
	 background-color: #4d4d4d;
     }
	  </style>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	  <script>
		$(document).ready(function(){
			$("#go1").click(function(){
				$(".div1").toggle(500);
			});
			$("#go2").click(function(){
				$(".div2").toggle(500);
			});
			$("#go3").click(function(){
				$(".div3").toggle(500);
			});
			$("#go4").click(function(){
				$(".div4").toggle(500);
			});
			$("#go5").click(function(){
				$(".div5").toggle(500);
			});
			$("#go6").click(function(){
				$(".div6").toggle(500);
			});
			$("#go7").click(function(){
				$(".div7").toggle(500);
			});
		});
      </script>
	  <script>
    function submitForm(action)
    {
        document.getElementById('columnarForm').action = action;
        document.getElementById('columnarForm').submit();
    }
	
     </script>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	 
</head>
<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] == false ){
header("Location: user.php");
}

?>
<body>

	<form Method ="POST" action="cvreporttemplate/orbit-v1.0/report.php"  >
	<div>
		<h1><center>Enter CV Contents </center></h1>
			  <center><input type="button" name = "personal" value="personal information" id="go1" class="go go2" style="width:50%"></center><br>
			  <div class="div1">
			  <iframe src="personal.php" style="border:none; width:100%; height:1050px;"></iframe>
			  </div>
			<br>
			  <center><input type="button" name = "cvcon" value="contact information" id="go2" class="go go2" style="width:50%"></center><br>
			  <div class="div2"><iframe src="cvcon.php" style="border:none; width:100%; height:500px;"></iframe>
			  </div>
			<br>
			  <center><input type="button" name = "specialties" value="specialties" id="go3" class="go go2" style="width:50%"></center><br>
			  <div class="div3"><iframe src="specialties.php" style="border:none; width:100%; height:600px;"></iframe>
			  </div>
			<br>
			  <center><input type="button" name = "languages" value="languages" id="go4" class="go go2" style="width:50%"></center><br>
			  <div class="div4"><iframe src="languages.php" style="border:none; width:100%; height:700px;"></iframe>
			  </div>
			<br>
			  <center><input type="button" name = "education" value="education" id="go5" class="go go2" style="width:50%"></center><br>
			  <div class="div5"><iframe src="education.php" style="border:none; width:100%; height:1050px;"></iframe>
			  </div>
			<br>
			  <center><input type="button" name = "job" value="required job" id="go6" class="go go2" style="width:50%"></center><br>
			  <div class="div6"><iframe src="job.php" style="border:none; width:100%; height:300px;"></iframe>
			  </div>
			<br>
			  <center><input type="button" name = "workexp" value="work experince" id="go7" class="go go2" style="width:50%"></center><br>
			  <div class="div7"><iframe src="workexp.php" style="border:none; width:100%; height:700px;"></iframe>
			  </div>
			<br><br>
			<center><input type="submit" name = "makecv" value="make CV" id="makecv" class="button button2" onclick="submitForm('cvreporttemplate/orbit-v1.0/Logout.php')" ></center> 
	</div>
	</form> 
	<form id="columnarForm" Method ="POST" action="">
		<div class="buttonHolder">
		<center><input type="submit" name = "signout" value="SignOut " id="signout" class="button button2" onclick="submitForm('Logout.php')" class="submit_button" ></center>
		</div>
	</form> 
