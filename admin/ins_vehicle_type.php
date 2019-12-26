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
		
		$tynm=$_POST['ty_nm'];
			
		include('connection.php');
		
		$qry="insert into vehicle_type (ve_ty_nm) values('$tynm')";
		
		mysql_query($qry);
		
		header('location:view_vehicle_type.php');
	}
?>