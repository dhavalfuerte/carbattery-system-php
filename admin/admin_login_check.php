<?php
	include("connection.php");
	
	$nm=$_POST['unm'];
	$pwd=$_POST['pwd'];
	
	$d="select * from admin where admin_name='$nm' and password='$pwd'";
	
	$res=mysql_query($d);
	$n=mysql_num_rows($res);
	
	if($n>0)
	{
		session_start();
		$_SESSION['admin']=$nm;
		header('location:admin_home.php');
	}
	else
	{
		header('location:admin_login.php');
	}
?>