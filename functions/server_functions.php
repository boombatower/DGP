<?php
function start_server($screen_name, $srcds_location, $game, $map, $maxplayers, $server_config, $add_commands) {
	stop_server($screen_name);
	$script = 'screen -m -d -S '.$screen_name.' '.$srcds_location.'/srcds_run -console -game '.$game.' +map '.$map.' +maxplayers '.$maxplayers.' +exec '.$server_config.' '.$add_commands;
	$run = server_exec($script);
	if ($run != 0) {
		$message = 'Server did not start successfully.';
	} else {
		$message = 'Server started successfully.';
	}		
	return $message;
}
function stop_server($screen_name) {
	$script = 'screen -S '.$screen_name.' -X quit';
	$run = server_exec($script);
	if ($run != 0) {
		$message = 'Server did not stop successfully.';
	} else {
		$message = 'Server stopped successfully.';
	}		
	return $message;
}
function restart_server($screen_name, $srcds_location, $game, $map, $maxplayers, $server_config, $add_commands) {
	stop_server($screen_name);
	$run2 = start_server($screen_name, $srcds_location, $game, $map, $maxplayers, $server_config, $add_commands);
	return $run2;
}
function server_exec($script) {
	exec($script, $output, $result);
	return $result;
}
function get_status() {
	$output = shell_exec('screen -ls');
	return $output;
}
?>
