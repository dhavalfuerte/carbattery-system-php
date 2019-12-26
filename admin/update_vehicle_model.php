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
		$moid=$_POST['mo_id'];
		$moname=$_POST['mo_name'];
		$coid=$_POST['co_id'];
		$tyid=$_POST['ty_id'];
		$catid=$_POST['cat_id'];
		
		include('connection.php');
		
		$qry="update vehicle_model set ve_mo_nm='$moname',ve_co_id='$coid',ve_ty_id='$tyid',cat_id='$catid' where ve_mo_id='$moid'";
		mysql_query($qry);
		
		header('location:view_vehicle_model.php');
	}
?>