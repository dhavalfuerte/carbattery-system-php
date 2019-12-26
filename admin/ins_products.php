<?php
 	session_start();
	if(!isset($_SESSION['admin']))
	{
		header('location:admin_login.php');
	}

	if(isset($_POST['submit']))
	{
		$comid=$_POST['com_id'];
		$catid=$_POST['cat_id'];
		$price=$_POST['price'];
		$waid=$_POST['wa_id'];
		
		include('connection.php');
		
		$s=$_FILES['file']['tmp_name'];
		$d="../images/".$_FILES['file']['name'];
		
		move_uploaded_file($s,$d);
		
		$qry="insert into product(pr_img,com_id,cat_id,wa_id,price) values('$d','$comid','$catid','$waid','$price')";
		mysql_query($qry);
		
		header('location:view_products.php');
	}
?>