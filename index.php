<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Drupal Game Panel Home Page</title>
</head>
<body>
TF2 Control Panel<br />
<?php
	require 'functions/server_functions.php';
	?>
<input type="button" value="Start Server" onclick="window.location.href='startserver.php'" />
<input type="button" value="Stop Server" onclick="window.location.href='stopserver.php'" />
<input type="button" value="Restart Server" onclick="window.location.href='restartserver.php'" />
|
<input type="button" value="Edit Server Config" onclick="window.location.href='editserver.php'" />
<br />
<hr />
<p>Sever Status: </p>
<p>
  <?php
    echo get_status();
    ?>
  <br />
  <br />
  <a href="index.php">Go Back</a></p>
</body>
</html>