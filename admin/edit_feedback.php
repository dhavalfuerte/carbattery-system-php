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
	$qry="select * from feedback where feedback_id=".$id;
	$res=mysql_query($qry);
	$data=mysql_fetch_array($res);
?>
<html>
<script type="text/javascript" src="include\js\validate.js"></script>
<link rel="stylesheet" href="include/css/d.css" type="text/css" />
<body>
<center>
	<form method="post" action="update_feedback.php">
    <table border="1">
		<tr>
        	<td>feedback_id:</td>
            <td><input type="text" name="fd_id" readonly="true" value="<?php echo $data[0]?>"></td>
        </tr>
        <tr>
        	<td>name:</td>
            <td><input type="text" name="nm" onKeyPress="return char(event)" maxlength="20" requried value="<?php echo $data[1]?>"></td>
        </tr>
        <tr>
        	<td>feedback:</td>
            <td><input type="text" name="feedback" onKeyPress="return char(event)" maxlength="50" value="<?php echo $data[2]?>"></td>
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