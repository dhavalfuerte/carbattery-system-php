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
		//$comid=$_POST['com_id'];
		$comnm=$_POST['com_nm'];
		
		include('connection.php');
		
		$qry="insert into company (com_nm) values('$comnm')";
		
		mysql_query($qry);
		
		header('location:view_company.php');
	}
?>