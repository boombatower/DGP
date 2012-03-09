TF2 Control Panel<br>
<?php
require 'functions/server_functions.php';
?>
<input type="button" value="Start Server" onClick="window.location.href='startserver.php'" />
<input type="button" value="Stop Server" onClick="window.location.href='stopserver.php'" />
<input type="button" value="Restart Server" onClick="window.location.href='restartserver.php'" /> | 
<input type="button" value="Edit Server Config" onClick="window.location.href='editserver.php'" /><br />
<hr />
<?php
echo get_status();
?>
<br />
<br /><a href="index.php" />Go Back</a>