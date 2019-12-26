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
		$adid=$_POST['ad_id'];
		$adnm=$_POST['ad_nm'];
		$pwd=$_POST['pwd'];
		
		include('connection.php');
		
		$qry="update admin set admin_name='$adnm',password='$pwd' where admin_id=".$adid;
		
		mysql_query($qry);
		
		header('location:view_admin.php');
	}
?>