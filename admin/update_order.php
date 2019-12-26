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
		$or=$_POST['ord_id'];
		$name=$_POST['name'];
		$mob=$_POST['mob'];
		$add=$_POST['add'];
		$pay=$_POST['pay'];
		$ctid=$_POST['ct_id'];
		$prid=$_POST['pr_id'];
		$userid=$_POST['user_id'];
		$sup=$_POST['sup'];
		
		include('connection.php');
		
		$qry="update order1 set name='$name',mobileno='$mob',address='$add',payment='$pay',city='$ctid',pro_id='$prid',user_id='$userid',sup='$sup' where Ord_id='$or'";
		
		mysql_query($qry);
		
		header('location:view_order	.php');
	}
?>