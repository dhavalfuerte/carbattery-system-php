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
		
		$qry="insert into vehicle_company(ve_co_nm,ve_ty_id)values('$coname','$tyid')";
		mysql_query($qry);
		
		header('location:view_vehicle_company.php');
	}
?>