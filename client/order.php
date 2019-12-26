<?php session_start();
	if(!isset($_SESSION['unm']))
	{
		$message = "please login";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<script type='text/javascript'>alert('$message');</script>";
		header('Location:index.php');
	}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
			include('include/connection/connection.php');
		?>
</head>

<body>
			<!-- start header -->
				<div id="header">
					<div id="menu">
						<?php
							include("includes/menu.inc.php");
						?>
					</div>
				</div>
				
				<div id="logo-wrap">
					<div id="logo">
							<?php
								include("includes/logo.inc.php");
							?>
					</div>
				</div>
			<!-- end header -->
			
			<!-- start page -->

				<div id="page">
					<!-- start content -->
					<div id="content">
						<div class="post">
							<h1 class="title"></h1>
							<div class="entry">
<table style="width:100%;height:100%;">
<form action="buy_sql.php" method="post">
	<tr>
    	<td style="width:70%;" valign="top">
			<table style="width:100%;height:100%;">
				<tr>
                	<th>YOUR NAME : </th>
                    <td><input type="text" name="nm" onkeypress="return char(event)" required /></td>
                </tr>
            	<tr>
                	<th>YOUR MOBILE NO. :</th>
                    <td><input type="text" name="mob" maxlength="10" onkeypress="return num(event)" required pattern="[0-9]{10}" /></td>
                </tr>
                <tr>
                	<th>ADDRESS : </th>
                    <td><textarea name="add" rows="5" cols="30"  required></textarea></td>
                </tr>
                <tr><td></td> <td>Only For Gujarat State.Only For This City Aviaible in Selling</td></tr>
                <tr>
													<th>CITY:</th>
													<td>
													<select style="width: 195px;" name="city">
    													<option value="" selected="selected">Select City</option>
    	<?
			include("include\connection\connection.php");
			$qry="select * from city";
			$res=mysql_query($qry);
			 
			while($row=mysql_fetch_array($res))
			{
				echo"<option value='$row[ct_id]'>$row[ct_nm]</option>";
			}
		?>
    </select>
     </td>
                                                   
												
				</tr>
                <tr>
                	<th>PAY PAYMENT: </th>
                    <td><input type="radio" name="pay"  value="Cash On Delivery" />Cash On Delivery</td>
                </tr>
                <tr>
                	<td colspan="2" align="center"><input type="submit" name="order" value="ORDER NOW" /></td>
                </tr>
			</table>
		</td>
        <td style="width:30%;" valign="top">
  		<?php
		$q="select * from product where pr_id=$_REQUEST[id]";
		$rs=mysql_query($q);
		$row=mysql_fetch_array($rs);
		$q="select * from company where com_id=$row[com_id]";
		$brs=mysql_query($q);
		$brow=mysql_fetch_array($brs);
		$q="select * from category where cat_id=$row[cat_id]";
		$crs=mysql_query($q);
		$crow=mysql_fetch_array($crs);
		$q="select * from warranty  where wa_id=$row[wa_id]";
		$crs=mysql_query($q);
		$wrow=mysql_fetch_array($crs);
		$_SESSION["id"]=$row["pr_id"];
		?>
        	<table style="width:100%;">
            	<tr>
                	<td align="center"><img src="<?php echo $row['pr_img'];?>" height="200" width="200" /></td>
                </tr>
                <tr>
                	<th><?php echo $brow["com_nm"]; echo $crow["cat_name"]; ?></th>
                </tr>
                <tr>
                	<th>Warrnty:<?php echo $wrow["wa_nm"];?></th>
                </tr>
                <tr>
                	<th>PRICE : <?=$row["price"];?></th>
                </tr>
            </table>
        </td>
	</tr>
</form>
</table>
					</div>
							
						</div>
						
					</div>
					<!-- end content -->
					
					<!-- start sidebar -->
					<div id="sidebar">
							<?php
								include("includes/search.inc.php");
							?>
					</div>
					<!-- end sidebar -->
					<div style="clear: both;">&nbsp;</div>
				</div>
			<!-- end page -->
			
			<!-- start footer -->
				<div id="footer">
							<?php
								include("includes/footer.inc.php");
							?>
				</div>
			<!-- end footer -->
</body>
</html>
