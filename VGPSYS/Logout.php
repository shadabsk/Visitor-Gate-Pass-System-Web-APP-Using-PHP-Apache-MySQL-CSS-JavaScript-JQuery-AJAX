<html>
</HEAD>
<BODY >
	</BODY>

<?php
session_start();
unset($_SESSION['user']);
session_destroy();
header('Location: http://localhost/VGPSYS/');
?>

	</html>