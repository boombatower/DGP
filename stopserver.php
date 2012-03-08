<?php
	include_once 'server_functions.php';
	include_once 'server_settings.php';
	
	$status = stop_server($screen_name);
	echo $status;
?>
<br><a href="index.php" />Go Back</a>