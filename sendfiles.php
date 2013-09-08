<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SkyShare</title>
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Bubbler+One' rel='stylesheet' type='text/css'>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script src="js/script.js"></script>
</head>
<body>
	<div id="main_box">
	</div>
	<div id="main_main">
		<div id="title">
			SkyShare
		</div>
		<?php
			if(isset($_POST["code"]) == false) {
				echo "lord";
			} else {
				echo $_POST["code"];
			}
		?>
	</div>
</body>
</html>