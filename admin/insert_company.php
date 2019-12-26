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
	<form method="post" action="ins_company.php">
    <table border="1">
		<tr>
        	<td>com_name:</td>
            <td><input type="text" name="com_nm" onKeyPress="return char(event)" requried></td>
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