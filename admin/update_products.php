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
		$proid=$_POST['pro_id'];
		$comid=$_POST['com_id'];
		$catid=$_POST['cat_id'];
		$price=$_POST['price'];
		$waid=$_POST['wa_id'];
		
		include('connection.php');
		
		$s=$_FILES['file']['tmp_name'];
		$d="../images/".$_FILES['file']['name'];
		move_uploaded_file($s,$d);
		
		$qry="update product set pr_img='$d',com_id='$comid',cat_id='$catid',price='$price',wa_id='$waid' where pr_id='$proid'";
		mysql_query($qry);
		
		header('location:view_products.php');
	}
?>