
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
		$waid=$_POST['wa_id'];
		$wanm=$_POST['wa_nm'];
			
		include('connection.php');
		
		$qry="update warrnty set wa_nm='$wanm' where wa_id=".$waid;
		
		mysql_query($qry);
		
		header('location:view_warrnty.php');
	}
?>