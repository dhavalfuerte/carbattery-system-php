<?php
 	session_start();
	if(!isset($_SESSION['admin']))
	{
		header('location:admin_login.php');
	}
?>
<?php
	session_start();
	session_destroy();
	header('location:admin_login.php');
?>