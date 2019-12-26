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
		
		$wanm=$_POST['wa_nm'];
			
		include('connection.php');
		
		$qry="insert into warrnty (wa_nm) values('$wanm')";
		
		mysql_query($qry);
		
		header('location:view_warrnty.php');
	}
?>