<?php
 	session_start();
	if(!isset($_SESSION['admin']))
	{
		header('location:admin_login.php');
	}
?>
<?php include("header.php"); ?>
<?php include('connection.php'); ?>

<html>
<script type="text/javascript" src="include\js\validate.js"></script>
<link rel="stylesheet" href="include/css/d.css" type="text/css" />
	<body>
		<center>
			<form method="post" action="ins_order.php">
			<table border="1">
			<tr>
				<td>Name:</td>
				<td><input type="text" name="name" onKeyPress="return char(event)" maxlength="20"  requried></td>
			</tr>
			<tr>
				<td>Mobile No:</td>
				<td><input type="text" name="mob" onKeyPress="return num(event)" maxlength="20"  requried></td>
			</tr>
			<tr>
				<td>Adderess:</td>
				<td><input type="text" name="add"  maxlength="100"  requried></td>
			</tr>
			<tr>
				<td>Payment:</td>
				<td><input type="text" name="pay" onKeyPress="return num(event)" maxlength="10"  requried></td>
			</tr>
			<tr>
				<td>City:</td>
				<td><?php
					$qry1="select * from city";
					$rs=mysql_query($qry1);
					echo"<select name='ct_id'>";
					while($row=mysql_fetch_array($rs))
					{
						echo"<option value=$row[ct_id]>$row[ct_name]</option>";
					}
					echo"</select>";
				?></td>
			</tr>
			<tr>
				<td>Product Id:</td>
				<td><?php
					$qry1="select * from product";
					$rs=mysql_query($qry1);
					echo"<select name='pr_id'>";
					while($row=mysql_fetch_array($rs))
					{
						echo"<option value=$row[pr_id]>$row[pr_id]</option>";
					}
					echo"</select>";
				?></td>
			</tr>
			<tr>
				<td>user id:</td>
				<td><?php
					$qry1="select * from user";
					$rs=mysql_query($qry1);
					echo"<select name='user_id'>";
					while($row=mysql_fetch_array($rs))
					{
						echo"<option value=$row[user_id]>$row[username]</option>";
					}
					echo"</select>";
				?></td>
			</tr>
			<tr>
				<td>Sup:</td>
				<td><input type="text" name="sup" value="cod" onKeyPress="return char(event)" maxlength="20"  requried></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Insert"></td>
				<td><input type="reset" name="reset" value="cancel"></td>
			</tr>
			</table>
			</form>
		</center>
	</body>
</html>
<?php include("footer.php"); ?>