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
		$feedback=$_POST['feedback'];	
		include('connection.php');
		
		$qry="insert into feedback (name,feedback) values('$nm','$feedback')";
		
		mysql_query($qry);
		
		header('location:view_feedback.php');
	}
?>