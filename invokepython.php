<?php
	//shell_exec("skydrive-cli auth https://login.live.com/oauth20_desktop.srf?code=339fb74a-3128-2d00-75cb-ef9e478eef1d&lc=1033");
	//echo $_FILES > butts.txt
	$f = fopen("file.txt", "w");
	fwrite($f, $_FILES);
	fclose($f);
?>