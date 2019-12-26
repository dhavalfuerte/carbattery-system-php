<?php session_start();
	if(!isset($_SESSION['unm']))
	{
		$message = "please login";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<script type='text/javascript'>alert('$message');</script>";
		header('Location:index.php');
	}
?>
<?php
	include('include/connection/connection.php');
	$q="select user_id from user where username='$_SESSION[unm]'";
	//$q="select * from user where username='dd'";
	//echo $q;
	$rs=mysql_query($q);
	
	$row=mysql_fetch_array($rs);
	$q="insert into cart(user_id,pro_id) values($row[user_id],$_REQUEST[id])";
	mysql_query($q);
	header("location:viewcart.php");
?>