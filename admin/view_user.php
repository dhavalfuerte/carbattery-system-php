<?php
 	session_start();
	if(!isset($_SESSION['admin']))
	{
		header('location:admin_login.php');
	}
?>
<?php include("header.php"); ?>
<?php
	include("connection.php");
	
	$qry="select * from user";
	$res=mysql_query($qry);
	
	echo"<table border='1' align='center'>";
	echo"<tr>";
		echo"<td>user_id</td>";
		echo"<td>name</td>";
		echo"<td>username</td>";
		echo"<td>contact_no</td>";
		echo"<td>email</td>";
		echo"<td>city_nm</td>";
		echo"<td>password</td>";
		echo"<td>edit</td>";
		echo"<td>delete</td>";
	echo"</tr>";
	
	while($row=mysql_fetch_array($res))
	{
		$q="select * from city";
		$r=mysql_query($q);
		$crow=mysql_fetch_array($r);
		
		echo"<tr>";
			echo"<td>$row[user_id]</td>";
			echo"<td>$row[first_name]</td>";
			echo"<td>$row[username]</td>";
			echo"<td>$row[contact_no]</td>";
			echo"<td>$row[email]</td>";
			echo"<td>$crow[ct_name]</td>";
			echo"<td>$row[password]</td>";
			echo"<td><a href='edit_user.php?id=$row[0]'>edit</td>";
			echo"<td><a href='delete_user.php?id=$row[0]'>delete</td>";
		echo"</tr>";
	}
	echo"<tr>";
		echo"<td align='center' colspan=10><a href='insert_user.php'>insert</a></td>";
	echo"</tr>";
	echo"</table>";
?>
<?php include("footer.php"); ?>