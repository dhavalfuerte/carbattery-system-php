<?php
 	session_start();
	if(!isset($_SESSION['admin']))
	{
		header('location:admin_login.php');
	}
?>
<?php
	if(isset($_POST['submit']))
	{
		
		$ctnm=$_POST['ct_nm'];
			
		include('connection.php');
		
		$qry="insert into city (ct_name) values('$ctnm')";
		
		mysql_query($qry);
		
		header('location:view_city.php');
	}
?>