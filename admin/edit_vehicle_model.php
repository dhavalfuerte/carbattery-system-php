<?php
 	session_start();
	if(!isset($_SESSION['admin']))
	{
		header('location:admin_login.php');
	}
?>
<?php include("header.php"); ?>
<?php
	include('connection.php');
	$id=$_REQUEST['id'];
	$qry="select * from vehicle_model where ve_mo_id=".$id;
	$res=mysql_query($qry);
	$data=mysql_fetch_array($res);
?>

<html>
<script type="text/javascript" src="include\js\validate.js"></script>
<link rel="stylesheet" href="include/css/d.css" type="text/css" />
	<body>
		<center>
			<form method="post" action="update_vehicle_model.php">
			<table border="1">
			<tr>
				<td>vehicle_model_id:</td>
				<td><input type="text" name="mo_id" readonly="true" value="<?php echo $data[0]?>"></td>
			</tr>
			
			<tr>
				<td>vehicle_model_name:</td>
				<td><input type="text" name="mo_name" value="<?php echo $data[1]?>"requried maxlength="20" onKeyPress="return char(event)"></td>
			</tr>
			<tr>
				<td>vehicle_company_name:</td>
				<td><?php
					$qry1="select * from vehicle_company";
					$rs=mysql_query($qry1);
					echo"<select name='co_id'>";
					while($row=mysql_fetch_array($rs))
					{
						echo"<option value=$row[ve_co_id]>$row[ve_co_nm]</option>";
					}
					echo"</select>";
				?></td>
			</tr>
			<tr>
				<td>vehicle_type_name:</td>
				<td><?php
					$qry1="select * from vehicle_type";
					$rs=mysql_query($qry1);
					echo"<select name='ty_id'>";
					while($row=mysql_fetch_array($rs))
					{
						echo"<option value=$row[ve_ty_id]>$row[ve_ty_nm]</option>";
					}
					echo"</select>";
				?></td>
			</tr>
			<tr>
				<td>category_name:</td>
				<td><?php
					$qry1="select * from category";
					$rs=mysql_query($qry1);
					echo"<select name='cat_id'>";
					while($row=mysql_fetch_array($rs))
					{
						echo"<option value=$row[cat_id]>$row[cat_name]</option>";
					}
					echo"</select>";
				?></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="update"></td>
				<td><input type="reset" name="reset" value="cancel"></td>
			</tr>
			</table>
			</form>
		</center>
	</body>
</html>
<?php include("footer.php"); ?>