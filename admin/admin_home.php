<?php
 	session_start();
	if(!isset($_SESSION['admin']))
	{
		header('location:admin_login.php');
	}
?>
<?php include('header.php'); ?>
	<center>
    	<h1>Welcome To Homepage:<?php echo$_SESSION['admin']; ?></h1>
     </center>
<?php include('footer.php'); ?>
