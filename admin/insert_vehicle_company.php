<?php
 	session_start();
	if(!isset($_SESSION['admin']))
	{
		header('location:admin_login.php');
	}
?>
<?php include("header.php"); ?>

<html>
<script type="text/javascript" src="include\js\validate.js"></script>
<link rel="stylesheet" href="include/css/d.css" type="text/css" />
	<body>
		<center>
			<form method="post" action="ins_vehicle_company.php">
			<table border="1">
					
			<tr>
				<td>vehicle_company_name:</td>
				<td><input type="text" name="co_name" onKeyPress="return char(event)" maxlength="20" requried></td>
			</tr>
			
			<tr>
				<td>vehicle_type_name:</td>
				<td><?php
					include("connection.php");
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
				<td><input type="submit" name="submit" value="update"></td>
				<td><input type="reset" name="reset" value="cancel"></td>
			</tr>
			</table>
			</form>
		</center>
	</body>
</html>