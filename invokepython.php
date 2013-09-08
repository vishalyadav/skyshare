<?php
	//shell_exec("skydrive-cli auth https://login.live.com/oauth20_desktop.srf?code=339fb74a-3128-2d00-75cb-ef9e478eef1d&lc=1033");
	//echo $_FILES > butts.txt
	//$f = fopen("file.txt", "w");
	$ds = DIRECTORY_SEPARATOR;  //1

	$storeFolder = '/var/www/';
	$tmpFolder = '/var/www/';

	if (!empty($_FILES)) {
		$tempFile = $_FILES['file']['tmp_name'];
		$targetPath = $storeFolder;  //4
		     
		$targetFile =  $targetPath.$_FILES['file']['name'];  //5
		
		rename($tempFile,$targetFile); //6
		$f = fopen("file.txt", "w");
		//fwrite($f, "what is going wrong????");
		$files = print_r($tempFile.$targetFile, true);
		fwrite($f, $files);
		fclose($f);
		
		shell_exec("chmod a+rw $targetFile");
		shell_exec("cp /home/skyshare_vm/standardlcrc /home/skyshare_vm/.lcrc");
		shell_exec("skydrive-cli auth /'https://login.live.com/oauth20_desktop.srf?code=339fb74a-3128-2d00-75cb-ef9e478eef1d&lc=1033'");
		shell_exec("skydrive-cli put ".$targetFile."");
	} else {
		$f = fopen("file.txt", "w");
		fwrite($f, "hi");
		fclose($f);
	}
?>