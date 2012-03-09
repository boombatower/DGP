<?php
	include_once 'functions/server_functions.php';
	include_once 'settings/server_settings.php';
	
	$status = start_server($screen_name, $srcds_location, $game, $map, $maxplayers, $server_config, $add_commands);
	echo $status;
?>
<br><a href="index.php" />Go Back</a>