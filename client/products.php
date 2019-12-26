<?php session_start();?>

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
							<h1 class="title">Your Battery Search </h1>
         							<div class="entry">
								<table height="100%" width="100%" align="center">
        <tr height="95%">
        	<td>
        	<?php include("include/connection/connection.php");
			$id=$_POST["model"];
			$co=$_POST["company"];
			if($id != "" && $co != "")
			{
				//$id=$_POST["model"];
				//echo "*****".$id;
				$query="select * from vehicle_model where ve_mo_id=".$id;
				$res=mysql_query($query);
				$row=mysql_fetch_array($res);
				
				//echo $res;
				$qry="select * from product where cat_id=$row[cat_id]";
				$ro=mysql_query($qry);
            	echo "<table align='center'><tr>";
				$cnt=1;
				while($r=mysql_fetch_array($ro))
				{
					$cq="select * from company where com_id=$r[com_id]";
					$cr=mysql_query($cq);
					$crow=mysql_fetch_array($cr);
			
					$caq="select * from category where cat_id=$r[cat_id]";
					$car=mysql_query($caq);
					$carow=mysql_fetch_array($car);
			
					$waq="select * from warranty where wa_id=$r[wa_id]";
					$war=mysql_query($waq);
					$warow=mysql_fetch_array($war);
					if($cnt==3)
					{
						echo "</tr><tr>";
						$cnt=1;
					}
					echo "<td><table><tr><td colspan='2' align='center'><img src='".$r['pr_img']."' height='100' width='150'></img></td></tr>";

					echo "<td align='center' colspan='2'>$crow[com_nm]"."  "."$carow[cat_name]</td></tr>";
					
					echo "<tr><td align='center'>Warranty Type : </td>";
					echo "<td align='left'>$warow[wa_nm]</td></tr>";

					echo "<tr><td align='right'>Battery Type : </td>";
					echo "<td align='left'>$carow[cat_name]</td></tr>";

					echo "<tr><td align='right'>Price : </td>";
					echo "<td align='left'>$r[price]/-</td></tr>";

					echo "<tr><td align='right'><button><a href='order.php?id=$r[0]'>Buy Now</a></button></td>
					<td align='right'><button><a href='addcart.php?id=$r[0]'>Add To Cart</a></button></td></tr>";
					
    				
					
					echo "</table>";
					$cnt=$cnt+1;
				}
					echo "</tr></table>";
				
            }
			else
			{
				//echo"---hiii";
//				header('Location:batterysearch.php');
			}?></td>
        </tr>
       
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
