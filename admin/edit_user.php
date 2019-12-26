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
	$qry="select * from user where user_id=".$id;
	$res=mysql_query($qry);
	$data=mysql_fetch_array($res);
?>
<html>
<script type="text/javascript" src="include\js\validate.js"></script>
<link rel="stylesheet" href="include/css/d.css" type="text/css" />
<body>
<center>
	<form method="post" action="update_user.php" >
    <table border="1">
		<tr>
        	<td>user_id:</td>
            <td><input type="text" name="user_id" readonly="true" value="<?php echo $data[0]?>"></td>
        </tr>
        <tr>
        	<td>name:</td>
            <td><input type="text" name="nm" requried value="<?php echo $data[1]?>" maxlength="20" onKeyPress="return char(event)"></td>
        </tr>
        <tr>
        	<td>username:</td>
            <td><input type="text" name="username" requried value="<?php echo $data[2]?>" maxlength="20"></td>
        </tr>
        <tr>
        	<td>mobile_no:</td>
            <td><input type="text" name="mo" requried value="<?php echo $data[3]?>" maxlength="10" onKeyPress="return num(event)"></td>
        </tr>
        <tr>
        	<td>email:</td>
            <td><input type="text" name="email" requried value="<?php echo $data[4]?>" maxlength="20"></td>
        </tr>
        <tr>
        	<td>city:</td>
            <td><?php
				include("connection.php");
				$qry="select * from city";
				$r=mysql_query($qry);
				echo "<select name='ct_id'>";
				while($row=mysql_fetch_array($r))
				{
					echo "<option value=$row[ct_id]>$row[ct_name]</option>";
				}
				echo "</select>";
			?></td>
        </tr>
        <tr>
        	<td>password:</td>
            <td><input type="text" name="pwd" requried value="<?php echo $data[6]?>" maxlength="20"></td>
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