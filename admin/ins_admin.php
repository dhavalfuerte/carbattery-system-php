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
		$adnm=$_POST['ad_nm'];
		$pwd=$_POST['pwd'];
		
		include('connection.php');
		
		$qry="insert into admin (admin_name,password) values('$adnm','$pwd')";
		
		mysql_query($qry);
		
		header('location:view_admin.php');
	}
?>