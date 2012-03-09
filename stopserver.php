<?php
	include_once 'functions/server_functions.php';
	include_once 'settings/server_settings.php';
	
	$status = stop_server($screen_name);
	echo $status;
?>
<br><a href="index.php" />Go Back</a>