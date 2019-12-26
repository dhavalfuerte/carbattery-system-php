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
	$id=$_REQUEST['id'];
	$qry="select * from product where pr_id=".$id;
	$res=mysql_query($qry);
	$data=mysql_fetch_array($res);
?>

<html>
<script type="text/javascript" src="include\js\validate.js"></script>
<link rel="stylesheet" href="include/css/d.css" type="text/css" />
	<body>
		<center>
			<form method="post" action="update_products.php" enctype="multipart/form-data">
			<table border="1">
				<tr>
					<td>pro_id</td>
					<td><input type="text" readonly="true" name="pro_id" value="<?php echo $data[0]?>"></td>
				</tr>
				<tr>
					<td><img src="<?php echo $data[1];?>" height="100" width="100"></td>
					<td><input type="file" name="file"></td>
				</tr>
				<tr>
					<td>Company</td>
					<td><?php
						$qry1="select * from company";
						$rs=mysql_query($qry1);
												
						echo "<select name='com_id'>";
						while($row=mysql_fetch_array($rs))
						{
							echo "<option value=$row[com_id]>$row[com_nm]</option>";
						}
						echo "</select>";
						
					?></td>
				</tr>
				<tr>
					<td>Category</td>
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
					<td>Price</td>
					<td><input type="text" name="price" value="<?php echo $data[5]?>" onKeyPress="return num(event)" maxlength="10" required></td>
				</tr>
				
				<tr>
					<td>Warranty</td>
					<td><?php
						$qry1="select * from warrnty";
						$rs=mysql_query($qry1);
						echo"<select name='wa_id'>";
						
						while($row=mysql_fetch_array($rs))
						{
							echo"<option value=$row[wa_id]>$row[wa_nm]</option>";
						}
						
						echo"</select>";
					?></td>
				</tr>
				
				<tr>
					<td><input type="submit" name="submit" value="Update"></td>
					<td><input type="reset" name="reset" value="cancel"></td>
				</tr>
			</table>
			</form>
		</center>
	</body>
</html>
<?php include("footer.php"); ?>