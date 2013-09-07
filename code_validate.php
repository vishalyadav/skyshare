<?php
/*	$code = $_POST["code"];
	$server = 'tuqhxl05rd.database.windows.net,1433';

	//$link = mssql_connect($server, "ashish@tuqhxl05rd", "PennApps2013");

	//if (!$link) {
	//	die('Oh sad times go cry cry cry cry cry');
	//}

	$username = "ashish@tuqhxl05rd";
	$password = "PennApps2013";
	$database = "SkyShareDB";
	try {
		$connectionInfo = new PDO("sqlsrv:server=$server ; Database = $database", $username, $password);
	}
	catch(Exception $e)
		die(echo $e);
	}*/

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
?>