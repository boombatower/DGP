<?php
	require 'server_functions.php';
	require 'server_settings.php';
	
	$status = restart_server($screen_name, $srcds_location, $game, $map, $maxplayers, $server_config, $add_commands);
	echo $status;
?>
<br><a href="index.php" />Go Back</a>