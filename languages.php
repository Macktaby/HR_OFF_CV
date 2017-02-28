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
	
	$sql = "INSERT INTO languages (
	lang1,
	rate1,
	lang2,
	rate2,
	lang3,
	rate3
	)
VALUES (
    '$_POST[lang1]',
	'$_POST[rate1]',
	'$_POST[lang2]',
	'$_POST[rate2]',
	'$_POST[lang3]',
	'$_POST[rate3]'
	
	)";
	if ($conn->query($sql) === TRUE) {
		$last_id = $conn->insert_id;
		echo '<script>
function myFunction() {
    alert("Your data was added successfully and your CV ID:'.$last_id.'");
}
myFunction();
</script>
';
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
	<form Method ="POST" action="languages.php">
		 <!-- this is the personal information section -->
		<h1>Specialties</h1>
		<h2>Choose the most three languages you have</h2>
        <select data-placeholder="Choose a Language..." class="chzn-select" tabindex="4" name="lang1">
			<option value="Afrikanns">Afrikanns</option>
			<option value="Albanian">Albanian</option>
			<option value="Arabic">Arabic</option>
			<option value="Armenian">Armenian</option>
			<option value="Basque">Basque</option>
			<option value="Bengali">Bengali</option>
			<option value="Bulgarian">Bulgarian</option>
			<option value="Catalan">Catalan</option>
			<option value="Cambodian">Cambodian</option>
			<option value="Chinese (Mandarin)">Chinese (Mandarin)</option>
			<option value="Croation">Croation</option>
			<option value="Czech">Czech</option>
			<option value="Danish">Danish</option>
			<option value="Dutch">Dutch</option>
			<option value="English">English</option>
			<option value="Estonian">Estonian</option>
			<option value="Fiji">Fiji</option>
			<option value="Finnish">Finnish</option>
			<option value="French">French</option>
			<option value="Georgian">Georgian</option>
			<option value="German">German</option>
			<option value="Greek">Greek</option>
			<option value="Gujarati">Gujarati</option>
			<option value="Hebrew">Hebrew</option>
			<option value="Hindi">Hindi</option>
			<option value="Hungarian">Hungarian</option>
			<option value="Icelandic">Icelandic</option>
			<option value="Indonesian">Indonesian</option>
			<option value="Irish">Irish</option>
			<option value="Italian">Italian</option>
			<option value="Japanese">Japanese</option>
			<option value="Javanese">Javanese</option>
			<option value="Korean">Korean</option>
			<option value="Latin">Latin</option>
			<option value="Latvian">Latvian</option>
			<option value="Lithuanian">Lithuanian</option>
			<option value="Macedonian">Macedonian</option>
			<option value="Malay">Malay</option>
			<option value="Malayalam">Malayalam</option>
			<option value="Maltese">Maltese</option>
			<option value="Maori">Maori</option>
			<option value="Marathi">Marathi</option>
			<option value="Mongolian">Mongolian</option>
			<option value="Nepali">Nepali</option>
			<option value="Norwegian">Norwegian</option>
			<option value="Persian">Persian</option>
			<option value="Polish">Polish</option>
			<option value="Portuguese">Portuguese</option>
			<option value="Punjabi">Punjabi</option>
			<option value="Quechua">Quechua</option>
			<option value="Romanian">Romanian</option>
			<option value="Russian">Russian</option>
			<option value="Samoan">Samoan</option>
			<option value="Serbian">Serbian</option>
			<option value="Slovak">Slovak</option>
			<option value="Slovenian">Slovenian</option>
			<option value="Spanish">Spanish</option>
			<option value="Swahili">Swahili</option>
			<option value="Swedish">Swedish </option>
			<option value="Tamil">Tamil</option>
			<option value="Tatar">Tatar</option>
			<option value="Telugu">Telugu</option>
			<option value="Thai">Thai</option>
			<option value="Tibetan">Tibetan</option>
			<option value="Tonga">Tonga</option>
			<option value="Turkish">Turkish</option>
			<option value="Ukranian">Ukranian</option>
			<option value="Urdu">Urdu</option>
			<option value="Uzbek">Uzbek</option>
			<option value="Vietnamese">Vietnamese</option>
			<option value="Welsh">Welsh</option>
			<option value="Xhosa">Xhosa</option>
		</select>
		<br><label for="rate">Rate</label><br>
		<select name="rate1" >
			<option value="accepted">accepted</option>
			<option value="good">good</option>
			<option value="verygood">very good</option>
			<option value="excellent">excellent</option>
		</select>
		<br>
		<select data-placeholder="Choose a Language..." class="chzn-select"  tabindex="4" name="lang2">
			<option value="Afrikanns">Afrikanns</option>
			<option value="Albanian">Albanian</option>
			<option value="Arabic">Arabic</option>
			<option value="Armenian">Armenian</option>
			<option value="Basque">Basque</option>
			<option value="Bengali">Bengali</option>
			<option value="Bulgarian">Bulgarian</option>
			<option value="Catalan">Catalan</option>
			<option value="Cambodian">Cambodian</option>
			<option value="Chinese (Mandarin)">Chinese (Mandarin)</option>
			<option value="Croation">Croation</option>
			<option value="Czech">Czech</option>
			<option value="Danish">Danish</option>
			<option value="Dutch">Dutch</option>
			<option value="English">English</option>
			<option value="Estonian">Estonian</option>
			<option value="Fiji">Fiji</option>
			<option value="Finnish">Finnish</option>
			<option value="French">French</option>
			<option value="Georgian">Georgian</option>
			<option value="German">German</option>
			<option value="Greek">Greek</option>
			<option value="Gujarati">Gujarati</option>
			<option value="Hebrew">Hebrew</option>
			<option value="Hindi">Hindi</option>
			<option value="Hungarian">Hungarian</option>
			<option value="Icelandic">Icelandic</option>
			<option value="Indonesian">Indonesian</option>
			<option value="Irish">Irish</option>
			<option value="Italian">Italian</option>
			<option value="Japanese">Japanese</option>
			<option value="Javanese">Javanese</option>
			<option value="Korean">Korean</option>
			<option value="Latin">Latin</option>
			<option value="Latvian">Latvian</option>
			<option value="Lithuanian">Lithuanian</option>
			<option value="Macedonian">Macedonian</option>
			<option value="Malay">Malay</option>
			<option value="Malayalam">Malayalam</option>
			<option value="Maltese">Maltese</option>
			<option value="Maori">Maori</option>
			<option value="Marathi">Marathi</option>
			<option value="Mongolian">Mongolian</option>
			<option value="Nepali">Nepali</option>
			<option value="Norwegian">Norwegian</option>
			<option value="Persian">Persian</option>
			<option value="Polish">Polish</option>
			<option value="Portuguese">Portuguese</option>
			<option value="Punjabi">Punjabi</option>
			<option value="Quechua">Quechua</option>
			<option value="Romanian">Romanian</option>
			<option value="Russian">Russian</option>
			<option value="Samoan">Samoan</option>
			<option value="Serbian">Serbian</option>
			<option value="Slovak">Slovak</option>
			<option value="Slovenian">Slovenian</option>
			<option value="Spanish">Spanish</option>
			<option value="Swahili">Swahili</option>
			<option value="Swedish">Swedish </option>
			<option value="Tamil">Tamil</option>
			<option value="Tatar">Tatar</option>
			<option value="Telugu">Telugu</option>
			<option value="Thai">Thai</option>
			<option value="Tibetan">Tibetan</option>
			<option value="Tonga">Tonga</option>
			<option value="Turkish">Turkish</option>
			<option value="Ukranian">Ukranian</option>
			<option value="Urdu">Urdu</option>
			<option value="Uzbek">Uzbek</option>
			<option value="Vietnamese">Vietnamese</option>
			<option value="Welsh">Welsh</option>
			<option value="Xhosa">Xhosa</option>
         </select>
		 <br><label for="rate">Rate</label><br>
	     <select name="rate2">
			<option value="accepted">accepted</option>
			<option value="good">good</option>
			<option value="verygood">very good</option>
			<option value="excellent">excellent</option>
	     </select>
		<br>
		<select data-placeholder="Choose a Language..." class="chzn-select"  tabindex="4" name="lang3">
			<option value="Afrikanns">Afrikanns</option>
			<option value="Albanian">Albanian</option>
			<option value="Arabic">Arabic</option>
			<option value="Armenian">Armenian</option>
			<option value="Basque">Basque</option>
			<option value="Bengali">Bengali</option>
			<option value="Bulgarian">Bulgarian</option>
			<option value="Catalan">Catalan</option>
			<option value="Cambodian">Cambodian</option>
			<option value="Chinese (Mandarin)">Chinese (Mandarin)</option>
			<option value="Croation">Croation</option>
			<option value="Czech">Czech</option>
			<option value="Danish">Danish</option>
			<option value="Dutch">Dutch</option>
			<option value="English">English</option>
			<option value="Estonian">Estonian</option>
			<option value="Fiji">Fiji</option>
			<option value="Finnish">Finnish</option>
			<option value="French">French</option>
			<option value="Georgian">Georgian</option>
			<option value="German">German</option>
			<option value="Greek">Greek</option>
			<option value="Gujarati">Gujarati</option>
			<option value="Hebrew">Hebrew</option>
			<option value="Hindi">Hindi</option>
			<option value="Hungarian">Hungarian</option>
			<option value="Icelandic">Icelandic</option>
			<option value="Indonesian">Indonesian</option>
			<option value="Irish">Irish</option>
			<option value="Italian">Italian</option>
			<option value="Japanese">Japanese</option>
			<option value="Javanese">Javanese</option>
			<option value="Korean">Korean</option>
			<option value="Latin">Latin</option>
			<option value="Latvian">Latvian</option>
			<option value="Lithuanian">Lithuanian</option>
			<option value="Macedonian">Macedonian</option>
			<option value="Malay">Malay</option>
			<option value="Malayalam">Malayalam</option>
			<option value="Maltese">Maltese</option>
			<option value="Maori">Maori</option>
			<option value="Marathi">Marathi</option>
			<option value="Mongolian">Mongolian</option>
			<option value="Nepali">Nepali</option>
			<option value="Norwegian">Norwegian</option>
			<option value="Persian">Persian</option>
			<option value="Polish">Polish</option>
			<option value="Portuguese">Portuguese</option>
			<option value="Punjabi">Punjabi</option>
			<option value="Quechua">Quechua</option>
			<option value="Romanian">Romanian</option>
			<option value="Russian">Russian</option>
			<option value="Samoan">Samoan</option>
			<option value="Serbian">Serbian</option>
			<option value="Slovak">Slovak</option>
			<option value="Slovenian">Slovenian</option>
			<option value="Spanish">Spanish</option>
			<option value="Swahili">Swahili</option>
			<option value="Swedish">Swedish </option>
			<option value="Tamil">Tamil</option>
			<option value="Tatar">Tatar</option>
			<option value="Telugu">Telugu</option>
			<option value="Thai">Thai</option>
			<option value="Tibetan">Tibetan</option>
			<option value="Tonga">Tonga</option>
			<option value="Turkish">Turkish</option>
			<option value="Ukranian">Ukranian</option>
			<option value="Urdu">Urdu</option>
			<option value="Uzbek">Uzbek</option>
			<option value="Vietnamese">Vietnamese</option>
			<option value="Welsh">Welsh</option>
			<option value="Xhosa">Xhosa</option>
         </select>
		 <br><label for="rate">Rate</label><br>
		 <select name="rate3">
			<option value="accepted">accepted</option>
			<option value="good">good</option>
			<option value="verygood">very good</option>
			<option value="excellent">excellent</option>
		</select>
		<br><br>
		<input type="submit" name = "insert" value="insert" id="insert" class="button button2">
		  
	</form> 
</div>
</body>
</html>