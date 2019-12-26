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
	
	$qry="select * from order1";
	$res=mysql_query($qry);
	
	echo"<table border='1' align='center'>";
	echo"<tr>";
		echo"<td>Order_id</td>";
		echo"<td>Name</td>";
		echo"<td>Mobile No</td>";
		echo"<td>Adderess</td>";
		echo"<td>Payment</td>";
		echo"<td>City</td>";
		echo"<td>Product Image</td>";
		echo"<td>User Name</td>";
		echo"<td>Sup</td>";
		echo"<td>Edit</td>";
		echo"<td>delete</td>";
	echo"</tr>";
	
	while($row=mysql_fetch_array($res))
	{
		$tq="select username from user where user_id=$row[user_id]";
		$tr=mysql_query($tq);
		$trow=mysql_fetch_array($tr);
		
		$coq="select * from product where pr_id=$row[pro_id]";
		$cor=mysql_query($coq);
		$corow=mysql_fetch_array($cor);
		
		$cityq="select * from city where ct_id=$row[city]";
		$cir=mysql_query($cityq);
		$cirow=mysql_fetch_array($cir);
		

		
		echo"<tr>";
			echo"<td>$row[Ord_id]</td>";
			echo"<td>$row[name]</td>";
			echo"<td>$row[mobileno]</td>";
			echo"<td>$row[address]</td>";
			echo"<td>$row[payment]</td>";
			echo"<td>$cirow[ct_name]</td>";
			echo"<td><img src='$corow[pr_img]' height='100' width='100'></img></td>";
			echo"<td>$trow[username]</td>";
			echo"<td>$row[sup]</td>";
			echo"<td><a href='edit_order.php?id=$row[0]'>edit</td>";
			echo"<td><a href='delete_order.php?id=$row[0]'>delete</td>";
		echo"</tr>";
	}
	echo"<tr>";
		echo"<td align='center' colspan=11><a href='insert_order.php'>insert</a></td>";
	echo"</tr>";
	echo"</table>";
?>
<?php include("footer.php"); ?>