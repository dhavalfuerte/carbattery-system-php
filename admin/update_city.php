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
		$ctid=$_POST['ct_id'];
		$ctnm=$_POST['ct_nm'];
			
		include('connection.php');
		
		$qry="update city set ct_name='$ctnm' where ct_id=".$ctid;
		
		mysql_query($qry);
		
		header('location:view_city.php');
	}
?>