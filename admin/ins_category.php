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
		
		$catnm=$_POST['cat_nm'];
			
		include('connection.php');
		
		$qry="insert into category (cat_name) values('$catnm')";
		
		mysql_query($qry);
		
		header('location:view_category.php');
	}
?>