<?php
 	session_start();
	if(!isset($_SESSION['admin']))
	{
		header('location:admin_login.php');
	}
?>
<?php include("header.php"); ?>

<center>
<?php
	include("connection.php");
	$q="select * from vehicle_company";
	$rs=mysql_query($q);
	echo"<table border='1'>";
		echo"<tr>";
		echo"<td>ve_company_id</td>";
		echo"<td>ve_company_nm</td>";
		echo"<td>ve_type_nm</td>";
		echo"<td>edit</td>";
		echo"<td>delete</td>";
		echo"</tr>";
		while($row=mysql_fetch_array($rs))
		{	
			$tq="select * from vehicle_type where ve_ty_id=$row[ve_ty_id]";
			$trs=mysql_query($tq);
			$trow=mysql_fetch_array($trs);

			echo"<tr>";
			echo"<td>$row[ve_co_id]</td>";
			echo"<td>$row[ve_co_nm]</td>";
			echo"<td>$trow[ve_ty_nm]</td>";
			echo"<td><a href='edit_vehicle_company.php?id=$row[0]'>edit</a></td>";
			echo"<td><a href='delete_vehicle_company.php?id=$row[0]'>delete</a></td>";
			echo"</tr>";
		}
	echo"<tr>";
	echo"<td align='center' colspan=5>";
			echo "<a href='insert_vehicle_company.php'>insert</a></td>";
	echo"</tr>";
	echo"</table>";
?>
</center>
<?php include("footer.php"); ?>