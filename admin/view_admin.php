<?php
 	session_start();
	if(!isset($_SESSION['admin']))
	{
		header('location:admin_login.php');
	}
?>
<link rel="stylesheet" href="include/css/d.css" type="text/css" />
<?php include("header.php"); ?>
<?php
	include("connection.php");
	
	$qry="select * from admin";
	$res=mysql_query($qry);
	$a=$_SESSION['admin'];
	echo"<table border='1' align='center'>";
	echo"<tr>";
		echo"<td>admin_id</td>";
		echo"<td>admin_name</td>";
		echo"<td>password</td>";
		echo"<td>edit</td>";
		echo"<td>delete</td>";
	echo"</tr>";
	$r=mysql_num_rows($res);
	while($row=mysql_fetch_array($res))
	{
		//$r=mysql_fetch_lengths($res);
		echo"<tr>";
			echo"<td>$row[admin_id]</td>";
			echo"<td>$row[admin_name]</td>";
			echo"<td>$row[password]</td>";
			echo"<td><a href='edit_admin.php?id=$row[0]'>edit</td>";
			if($r==1 || $a==$row['admin_name'])
			{
				
				echo"<td>Not Deleted</td>";
			}
			else
			{
				
				echo"<td><a href='delete_admin.php?id=$row[0]'>delete</td>";
			}
			
		echo"</tr>";
	}
	echo"<tr>";
		echo"<td align='center' colspan=10><a href='insert_admin.php'>insert</a></td>";
	echo"</tr>";
	echo"</table>";
?>
<?php include("footer.php"); ?>