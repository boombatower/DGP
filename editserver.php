<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Drupal Game Panel Home Page</title>
</head>
<body>
<?php
	require 'settings/server_settings.php';
	
	if (isset($_POST['submit'])) {
		file_put_contents($config_location, $_POST['content']);
	}
	$current = file_get_contents($config_location);
?>
<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
  <textarea rows="25" cols="100" name="content"><?php echo $current; ?></textarea>
  <br />
  <input type="submit" name="submit" value="Save Changes" />
</form>
<br />
<a href="index.php">Go Back</a>
</body>
</html>