<!DOCTYPE html>
<html lang="en">
<head>Page added successfully</head>
<?php

function random_code_generator($numDigits) {
  $codeTemp = "";

  for ($i = 0; $i < $numDigits; $i++) {
    $codeTemp .= rand(0, 9);
  }
  return (int)$codeTemp;
}

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

//////////////////////////////////////////////////////////
$random_coder = random_code_generator(5);
$codeURL = $_GET['codeURL'];
$days = $_GET['days'];;
$userID = 3455;
//////////////////////////////////////////////////////////


$sql = "SELECT CodeURL FROM CodeDB WHERE Code=$random_coder";
$stmt = $conn->query($sql, PDO::FETCH_COLUMN, 0);

if($stmt === false)
{
      die(print_r(sqlsrv_errors(), true));
}

$row = $stmt->fetch();
if (!$row)
{
	$sql = "INSERT INTO CodeDB VALUES ('$random_coder', '$codeURL', '$days', '$userID')";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
}
else
{
	$random_coder = random_code_generator(5);
	$sql = "SELECT CodeURL FROM CodeDB WHERE Code=$random_coder";
	$stmt = $conn->query($sql, PDO::FETCH_COLUMN, 0);
	if($stmt === false)
	{
	      die(print_r(sqlsrv_errors(), true));
	}
	$row = $stmt->fetch();
	if (!$row)
	{
		$sql = "INSERT INTO CodeDB VALUES ('$random_coder', '$codeURL', '$days', '$userID')";
		$stmt = $conn->prepare($sql);
		$stmt->execute();
	}
}

?>
</html>