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
		
		$qry="insert into vehicle_model(ve_mo_nm,ve_co_id,ve_ty_id,cat_id) values('$moname',$coid,$tyid,$catid)";
		mysql_query($qry);
		
		header('location:view_vehicle_model.php');
	}
?>