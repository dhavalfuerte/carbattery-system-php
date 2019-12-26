<?php
 	session_start();
	if(!isset($_SESSION['admin']))
	{
		header('location:admin_login.php');
	}
?>
<?php
	include("connection.php");
	$id=$_REQUEST['id'];
	$qry="delete from vehicle_type where ve_ty_id=".$id;
	
	mysql_query($qry);
	
	header('location:view_vehicle_type.php');
?>