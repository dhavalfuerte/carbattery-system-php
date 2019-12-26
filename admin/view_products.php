<?php
 	session_start();
	if(!isset($_SESSION['admin']))
	{
		header('location:admin_login.php');
	}
?>
<?php include("header.php"); ?>
<?php
	include("Connection.php");
	
	$qry="Select * from product";
	$res=mysql_query($qry);
	
	echo"<center><table border=2>";
	echo"<tr>";
	echo"<td>pro_id</td>";
	echo"<td>pro_img</td>";
	echo"<td>pro_name</td>";
	echo"<td>com_name</td>";
	echo"<td>cat_name</td>";
	echo"<td>price</td>";
	echo"<td>warranty</td>";
	echo"<td>edit</td>";
	echo"<td>delete</td>";
	echo"</tr>";

		while($row=mysql_fetch_array($res))
		{
			$cq="select * from company where com_id=$row[com_id]";
			$cr=mysql_query($cq);
			$crow=mysql_fetch_array($cr);
			
			$caq="select * from category where cat_id=$row[cat_id]";
			$car=mysql_query($caq);
			$carow=mysql_fetch_array($car);
			
			$waq="select * from warranty where wa_id=$row[wa_id]";
			$war=mysql_query($waq);
			@$warow=mysql_fetch_array($war);
			
			echo"<tr align='center'>";
			echo"<td>$row[pr_id]</td>";
			echo"<td><img src='$row[pr_img]' height='150' width='150'></td>";
			echo"<td>$crow[com_nm]"."  "."$carow[cat_name]</td>";
			echo"<td>$crow[com_nm]</td>";
			echo"<td>$carow[cat_name]</td>";
			echo"<td>$row[price]</td>";
			echo"<td>$warow[wa_nm]</td>";
			
			echo"<td><a href='edit_products.php?id=$row[0]'>edit</a></td>";
			echo"<td><a href='delete_products.php?id=$row[0]'>delete</a></td>";
			
			echo"</tr>";
		}
		
		echo"<tr>";
		echo"<td align='center' colspan=10>";
		echo"<a href='insert_products.php'>insert</a></td>";
		echo"</tr>";
		echo"</center>";
		echo"</table>";
?>
<?php include("footer.php"); ?>