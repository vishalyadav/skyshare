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
		<form name="login" id="login" method="post" action="">
			<!--<input type="text" name="user" id="user" placeholder="user" ></input><br>
			<input type="password" name="password" id="password" placeholder="password" ></input></br>
			<input type="submit" name="submit" id="submit" value="Login"></input>-->
			<input type="text" id="code" name="code" placeholder="Enter code here" ></input>
			<input type="submit" name="submit_code" id="submit_code" ></input>
		</form>
	</div>

	<?php
		//function code_validate() {
			$code = $_POST["code"];
			$server = "tuqhxl05rd.database.windows.net,1433";
			$username = "ashish@tuqhxl05rd";
			$password = "PennApps2013";
			$database = "SkyShareDB";
			try
			{
			    $conn = new PDO("sqlsrv:server=$server ; Database = $database", $username, $password);
			}
			catch(Exception $e)
			{
			    die(print_r($e));
			}
			$sql = "SELECT CodeURL FROM CodeDB WHERE Code=$code";
			$stmt = $conn->query($sql, PDO::FETCH_COLUMN, 0);

			if($stmt === false)
			{
				echo "Incorrect code";
			    die(print_r(sqlsrv_errors(), true));
			} else {
				//while ( $row = $stmt->fetch() ){
				//	echo "$row\n";
				//}
		//}
		//code_validate();
				echo '
				<form method="post" action="sendfiles.php" name="dummy">
					<input type="hidden" value="'.$row.'" name="url"></input>
				</form>';
				echo '
				<script type="text/javascript">
					document.dummy.submit();
				</script>
				';
				//header('Location: sendfiles.php');
			}
		
	?>

</body>
</html>