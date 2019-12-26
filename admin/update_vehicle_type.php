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
		$tyid=$_POST['ty_id'];
		$tynm=$_POST['ty_nm'];
			
		include('connection.php');
		
		$qry="update vehicle_type set ve_ty_nm='$tynm' where ve_ty_id=".$tyid;
		
		mysql_query($qry);
		
		header('location:view_vehicle_type.php');
	}
?>
