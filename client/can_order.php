<?php session_start();
	include("include/connection/connection.php");
	//$q="select user_id from user where u_nm='$_SESSION[unm]'";
	$q="select user_id from user where username='dd'";
	$urs=mysql_query($q);
	$urow=mysql_fetch_array($urs);
	mysql_query("delete from order1 where user_id=$urow[user_id] and Ord_id=$_REQUEST[id]");
	header("location:vieworder.php");
?>