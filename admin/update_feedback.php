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
		$fdid=$_POST['fd_id'];
		$nm=$_POST['nm'];
		$feedback=$_POST['feedback'];
			
		include('connection.php');
		
		$qry="update feedback set name='$nm',feedback='$feedback' where feedback_id=".$fdid;
		
		mysql_query($qry);
		
		header('location:view_feedback.php');
	}
?>