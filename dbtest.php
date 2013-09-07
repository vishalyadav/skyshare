 <?php

// 	$server = "tuqhxl05rd.database.windows.net";
// 	$link = mssql_connect($server, "ashish", "PennApps2013");

// 	if (!$link) {
//     die('Something went wrong while connecting to MSSQL');

//     mssql_close($link);

//$conn = new PDO ( \"sqlsrv:server = tcp:tuqhxl05rd.database.windows.net,1433; Database = SkyShareDB\", \"ashish\", \"PennApps2013\");\r\n    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );\r\n}\r\ncatch ( PDOException $e ) {\r\n   print( \"Error connecting to SQL Server.\" );\r\n   die(print_r($e));\r\n}\r\n\rSQL Server Extension Sample Code:\r\n\r\n$connectionInfo = array(\"UID\" => \"ashish@tuqhxl05rd\", \"pwd\" => \"PennApps2013\", \"Database\" => \"SkyShareDB\", \"LoginTimeout\" => 30, \"Encrypt\" => 1);\r\n$serverName = \"tcp:tuqhxl05rd.database.windows.net,1433\";\r\n$conn = sqlsrv_connect($serverName, $connectionInfo);
//echo "hello";


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

// $sql = "SELECT Code FROM CodeDB";
// $stmt = sqlsrv_query($conn, $sql);
// if($stmt === false)
// {
//       die(print_r(sqlsrv_errors(), true));
// }
// while($row = sqlsrv_fetch_object($stmt))
//       {
//            // print("Code:".$row['Code']);
//       	print("Code:");
//       }

 ?>