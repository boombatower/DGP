<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Drupal Game Panel Home Page</title>
</head>
<body>
<?php
	include_once 'functions/server_functions.php';
	include_once 'settings/server_settings.php';
	
	$status = start_server($screen_name, $srcds_location, $game, $map, $maxplayers, $server_config, $add_commands);
	echo $status;
?>
<br />
<a href="index.php">Go Back</a>
</body>
</html>