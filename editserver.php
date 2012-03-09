<?php
	require 'settings/server_settings.php';
	
	if (isset($_POST['submit'])) {
		file_put_contents($config_location, $_POST['content']);
	}
	$current = file_get_contents($config_location);
?>
<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
	<textarea rows="25" cols="100" name="content"><?php echo $current; ?></textarea>
	<br><input type="submit" name="submit" value="Save Changes"> 
</form>
<br><a href="index.php" />Go Back</a>