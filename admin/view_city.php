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
	
	$qry="select * from city";
	$res=mysql_query($qry);
	
	echo"<table border='1' align='center'>";
	echo"<tr>";
		echo"<td>city_id</td>";
		echo"<td>city_name</td>";
		echo"<td>edit</td>";
		echo"<td>delete</td>";
	echo"</tr>";
	
	while($row=mysql_fetch_array($res))
	{
		echo"<tr>";
			echo"<td>$row[ct_id]</td>";
			echo"<td>$row[ct_name]</td>";
			echo"<td><a href='edit_city.php?id=$row[0]'>edit</td>";
			echo"<td><a href='delete_city.php?id=$row[0]'>delete</td>";
		echo"</tr>";
	}
	echo"<tr>";
		echo"<td align='center' colspan=10><a href='insert_city.php'>insert</a></td>";
	echo"</tr>";
	echo"</table>";
?>
<?php include("footer.php"); ?>