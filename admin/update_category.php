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
		$catid=$_POST['cat_id'];
		$catnm=$_POST['cat_nm'];
			
		include('connection.php');
		
		$qry="update category set cat_name='$catnm' where cat_id=".$catid;
		
		mysql_query($qry);
		
		header('location:view_category.php');
	}
?>