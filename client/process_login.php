<?php session_start();
	
	if(!empty($_POST))
	{
		$msg="";
		
		if(empty($_POST['usernm']))
		{
			$msg[]="No such User";
		}
		
		if(empty($_POST['pwd']))
		{
			$msg[]="Password Incorrect........";
		}
		
		
		if(!empty($msg))
		{
			echo '<b>Error:-</b><br>';
			
			foreach($msg as $k)
			{
				echo '<li>'.$k;
			}
		}
		else
		{
			
			include("include/connection/connection.php");
			 
			$unm=$_POST['usernm'];
			
			$q="select * from user where username='$unm'";
			
			$res=mysql_query($q);
			
			$row=mysql_fetch_assoc($res);
			
			if(!empty($row))
			{
				if($_POST['pwd']==$row['password'])
				{
					$_SESSION=array();
					$_SESSION['unm']=$row['username'];
					$_SESSION['uid']=$row['password'];
					$_SESSION['status']=true;
					
					if($_SESSION['unm'])
					{
						header("location:index.php");
					}
					
				}
				
				else
				{
					echo 'Incorrect Password....';
				}
			}
			else
			{
				echo 'Invalid User';
			}
		}
	
	}
	else
	{
		header("location:index.php");
	}
			
?>