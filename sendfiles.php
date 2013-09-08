<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SkyShare</title>
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="css/dropzone.css" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Bubbler+One' rel='stylesheet' type='text/css'>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script src="js/script.js"></script>
	<script src="dropzone.js"></script>
</head>
<body>
	<div id="main_box2">
	</div>
	<div id="main_main">
		<div id="title">
			SkyShare
		</div>
		<?php
			$url = $_POST["url"];
			//shell_exec('cd home/skyshare_vm');
			//shell_exec('cp /home/skyshare_vm/standardlcrc ~/.lcrc');
			//$output = shell_exec('./skydriveauth.sh "$url"');
			//$output = shell_exec('skydrive-cli auth "$url"');
			//$output2 = shell_exec('skydrive-cli tree');
			echo "<pre>test:$output2</pre>";
		?>
		<form action="invokepython.php" class="dropzone" id="my-awesome-dropzone"></form>
	</div>
</body>
</html>