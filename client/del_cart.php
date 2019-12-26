<?php session_start();
	include("include/connection/connection.php");
	$q="select user_id from user where username='$_SESSION[unm]'";
	//$q="select user_id from user where username='dd'";
	$urs=mysql_query($q);
	$urow=mysql_fetch_array($urs);
	mysql_query("delete from cart where User_id=$urow[user_id] and Cart_id=$_REQUEST[id]");
	header("location:viewcart.php");
?>