<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Drupal Game Panel Home Page</title>
</head>
<body>
<?php
	header("Refresh: 3;");
	require 'functions/server_functions.php';
	require 'settings/server_settings.php';
?>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<input type="submit" name="submit" value="Update Now" />
		<?php 
			if (isset($_POST['submit'])) {
				$status = update_server($game);
				echo '<br />'.$status;
			} else {
				echo '<br /><br />Log:<hr><pre>'.file_get_contents($log).'</pre>'; 
			}
		?>
	</form>
<br />
<a href="index.php">Go Back</a>
</body>
</html>