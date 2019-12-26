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
	
	$qry="select * from vehicle_type";
	$res=mysql_query($qry);
	
	echo"<table border='1' align='center'>";
	echo"<tr>";
		echo"<td>vehicle_id</td>";
		echo"<td>vehicle_name</td>";
		echo"<td>edit</td>";
		echo"<td>delete</td>";
	echo"</tr>";
	
	while($row=mysql_fetch_array($res))
	{
		echo"<tr>";
			echo"<td>$row[ve_ty_id]</td>";
			echo"<td>$row[ve_ty_nm]</td>";
			echo"<td><a href='edit_vehicle_type.php?id=$row[0]'>edit</td>";
			echo"<td><a href='delete_vehicle_type.php?id=$row[0]'>delete</td>";
		echo"</tr>";
	}
	echo"<tr>";
		echo"<td align='center' colspan=10><a href='insert_vehicle_type.php'>insert</a></td>";
	echo"</tr>";
	echo"</table>";
?>
<?php include("footer.php"); ?>