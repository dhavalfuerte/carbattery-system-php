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
		
		
		$nm=$_POST['nm'];
		$username=$_POST['username'];
		$mo=$_POST['mo'];
		$email=$_POST['email'];
		$ctid=$_POST['ct_id'];
		$pwd=$_POST['pwd'];
			
		include('connection.php');
		
		$qry="insert into user (first_name,username,contact_no,email,ct_id,password) values('$nm','$username','$mo','$email','$ctid','$pwd')";
		
		mysql_query($qry);
		
		header('location:view_user.php');
	}
?>