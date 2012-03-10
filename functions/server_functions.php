<?php
function start_server($screen_name, $srcds_location, $game, $map, $maxplayers, $server_config, $add_commands) {
	stop_server($screen_name);
	$script = 'screen -m -d -S '.$screen_name.' '.$srcds_location.'/srcds_run -console -game '.$game.' +map '.$map.' +maxplayers '.$maxplayers.' +exec '.$server_config.' '.$add_commands;
	$run = server_exec($script);
	return return_process_status($run);
}
function stop_server($screen_name) {
	$script = 'screen -S '.$screen_name.' -X quit';
	$run = server_exec($script);
	return return_process_status($run);
}
function restart_server($screen_name, $srcds_location, $game, $map, $maxplayers, $server_config, $add_commands) {
	stop_server($screen_name);
	$run2 = start_server($screen_name, $srcds_location, $game, $map, $maxplayers, $server_config, $add_commands);
	return $run2;
}
function update_server($game) {
	$script = '/srv/games/steam -command update -game '.$game.' -dir "/srv/games/tf2" 2>&1 | tee update.log &';
	//$script = '/srv/games/steam -command update -game '.$game.' -dir "/srv/games/tf2"';
	$run = server_exec($script);
	return return_process_status($run);
}
function server_exec($script) {
	exec($script, $output, $result);
	return $result;
}
function get_status() {
	$output = shell_exec('screen -ls');
	return $output;
}
function return_process_status($result) {
	if ($result != 0) {
		$message = 'Server modification was unsuccessful.';
	} else {
		$message = 'Server modification was successful.';
	}		
	return $message;
}
?>
