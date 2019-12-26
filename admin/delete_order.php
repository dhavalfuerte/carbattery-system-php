<?php
 	session_start();
	if(!isset($_SESSION['admin']))
	{
		header('location:admin_login.php');
	}
?>
<?php
	include("Connection.php");
	$id=$_REQUEST['id'];
	$qry="delete from order1 where ord_id=".$id;
	mysql_query($qry);
	header('location:view_order.php');
?>