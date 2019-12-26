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
		$coid=$_POST['co_id'];
		$coname=$_POST['co_name'];
		$tyid=$_POST['ty_id'];
		
		include('connection.php');
		
		$qry="update vehicle_company set ve_co_nm='$coname',ve_ty_id='$tyid' where ve_co_id='$coid'";
		mysql_query($qry);
		
		header('location:view_vehicle_company.php');
	}
?>