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
	include('connection.php');
	$q="select * from vehicle_model";
	$rs=mysql_query($q);
	
	echo"<table border='1'>";
	echo"<tr>";
	echo"<td>ve_model_id</td>";
	echo"<td>ve_model_nm</td>";
	echo"<td>ve_company_nm</td>";
	echo"<td>ve_type_nm</td>";
	echo"<td>category</td>";
	echo"<td>edit</td>";
	echo"<td>delete</td>";
	echo"</tr>";
	
	while($row=mysql_fetch_array($rs))
	{
		$tq="select * from vehicle_type where ve_ty_id=$row[ve_ty_id]";
		$tr=mysql_query($tq);
		$trow=mysql_fetch_array($tr);
		
		$coq="select * from vehicle_company where ve_co_id=$row[ve_co_id]";
		$cor=mysql_query($coq);
		$corow=mysql_fetch_array($cor);
		
		$cq="select * from category where cat_id=$row[cat_id]";
		$cr=mysql_query($cq);
		$crow=mysql_fetch_array($cr);
		
		echo"<tr>";
		echo"<td>$row[ve_mo_id]</td>";
		echo"<td>$row[ve_mo_nm]</td>";
		echo"<td>$corow[ve_co_nm]</td>";
		echo"<td>$trow[ve_ty_nm]</td>";
		echo"<td>$crow[cat_name]</td>";
		echo"<td><a href='edit_vehicle_model.php?id=$row[0]'>edit</a></td>";
		echo"<td><a href='delete_vehicle_model.php?id=$row[0]'>delete</a></td>";
		echo"</tr>";
	}
	
	echo"<tr>";
	echo"<td align='center' colspan=8>
			<a href='insert_vehicle_model.php'>inset</a></td>";
	echo"</tr>";
		
	echo"</table>";
?>
</center>
<?php include("footer.php"); ?>