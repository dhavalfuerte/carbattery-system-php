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
		?>
</head>

<body>
			<!-- start header -->
				<div id="header">
					<div id="menu">
						<?php
							 include("include/connection/connection.php");
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
							<h1 class="title">View Orders</h1>
							<div class="entry">
						
							<?php
							
							echo"<table width='100%' border='0'>";
							echo"<tr >";
							echo"<Td><b>No";
                            echo" <td> <b>Product Image";
							echo"<td> <b>Product Name";
                            echo" <td> <b>Adderess";
							echo"<td> <b>Sup";
							echo"<td> <b>Payment";
							echo"<td> <b>Cancel Order";
							echo"</tr>";
							echo"	<tr><td colspan='7'><hr style='border:1px Solid #a1a1a1;'></tr>";
							//	print_r($_SESSION);
								$urs=mysql_query("select user_id from user where username='$_SESSION[unm]'");
								//$urs=mysql_query("select user_id from user where username='dd'");
								$urow=mysql_fetch_array($urs);
								$vrs=mysql_query("select * from order1 where user_id=$urow[user_id]");
						
								$cnt=1;
								while($cnt<=mysql_num_rows($vrs))
								{
							
									$vrow=mysql_fetch_array($vrs);
									$q="select * from product where pr_id=$vrow[pro_id]";
									$rs=mysql_query($q);
									$row=mysql_fetch_array($rs);
		
									$cq="select * from company where com_id=$row[com_id]";
									$cr=mysql_query($cq);
									$crow=mysql_fetch_array($cr);
										
									$caq="select * from category where cat_id=$row[cat_id]";
									$car=mysql_query($caq);
									$carow=mysql_fetch_array($car);
								
									$waq="select * from warranty where wa_id=$row[wa_id]";
									$war=mysql_query($waq);
									$warow=mysql_fetch_array($war);
						
									if($vrow["sup"] == "Pending") {	
										echo '
											<tr>
											<Td> '.$cnt.'
											<td> <img src="'.$row['pr_img'].'" height="50" width="100">
											<td> '.$crow['com_nm'].$carow['cat_name'] .'
											<td> '.$vrow['address'].'
											<td> '.$vrow['sup'].'
											<td> '.$vrow['payment'].'
										
											<td> <a href="can_order.php?id='.$vrow['Ord_id'].'">Cancel</a>
										</tr>
										';
									echo"	<tr><td colspan='7'><hr style='border:1px Solid #a1a1a1;'></tr>";
									}	
									$cnt=$cnt+1;
									}
									
								
								?>
							<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
						 
							
							
							<Br>
								</table>						

								<br><br>
							<center>
							
							</center>
							</form>
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
