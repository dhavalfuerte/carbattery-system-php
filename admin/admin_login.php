
<?php include("header.php"); ?>
<link rel="stylesheet" href="include/css/d.css" type="text/css" />
<center>
	<form method="post" action="admin_login_check.php">
    <table border="1">
    <tr>
    <td>UserName:</td>
    <td><input type="text" name="unm" required /></td>
    </tr>
    <tr>
    <td>Password:</td>
    <td><input type="password" name="pwd" required /></td>
    </tr>
    <tr>
    <td align="center" colspan="2"><input type="submit" value="Login" name="login" /></td>
   </tr>
    
    </table>
    </form>
</center>
<?php include("footer.php"); ?>