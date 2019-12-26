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
		$userid=$_POST['user_id'];
		$nm=$_POST['nm'];
		$username=$_POST['username'];
		$mo=$_POST['mo'];
		$email=$_POST['email'];
		$ctid=$_POST['ct_id'];
		$pwd=$_POST['pwd'];
			
		include('connection.php');
		
		$qry="update user set first_name='$nm',username='$username',contact_no='$mo',email='$email',ct_id='$ct_id',password='$pwd' where user_id=".$userid;
		
		mysql_query($qry);
		
		header('location:view_user.php');
	}
?>