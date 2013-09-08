<?php
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
		echo("Incorrect Code");
	}
	while ( $row = $stmt->fetch() ){
		echo "$row\n";
	}
?>