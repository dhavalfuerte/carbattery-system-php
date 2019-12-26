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
	<form method="post" action="ins_user.php">
    <table border="1">
		 <tr>
        	<td>name:</td>
            <td><input type="text" name="nm" onKeyPress="return char(event)" maxlength="20"  requried></td>
        </tr>
        <tr>
        	<td>username:</td>
            <td><input type="text" name="username" maxlength="10" requried ></td>
        </tr>
        <tr>
        	<td>mobile_no:</td>
            <td><input type="text" name="mo" onKeyPress="return num(event)"  maxlength="10" requried ></td>
        </tr>
        <tr>
        	<td>email:</td>
            <td><input type="text" name="email" requried ></td>
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
            <td><input type="text" name="pwd" maxlength="20" requried ></td>
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