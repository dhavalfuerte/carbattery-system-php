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
							<h1 class="title">Battery Search</h1>
							<div class="entry">
								<table  align="center" width="100%">
	
		
										
										<tr>
											<td ><script>
	$s=0;
		function showstate(str)
		{
			if(str=="")
			{
				document.getElementById("state").innerHTML="";
				return;
			}
			
			if(window.XMLHttpRequest)
			{
				xmlhttp=new XMLHttpRequest();
			}
			else
			{
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			
			xmlhttp.onreadystatechange=function()
			{
				if(xmlhttp.readyState==4 && xmlhttp.status==200)
				{
					document.getElementById("state").innerHTML=xmlhttp.responseText;
				}
			}
			xmlhttp.open("GET","get_vehicle_company.php?id="+str,true);
			xmlhttp.send();
		}
		
		function showcity(str)
		{
			var a=document.getElementById("u1").value;
			if(str=="")
			{
				document.getElementById("city").innerHTML="";
				return;
			}
			
			if(window.XMLHttpRequest)
			{
				xmlhttp=new XMLHttpRequest();
			}
			else
			{
				xmlhttp=new ActiveXObject("Mictosoft.XMLHTTP");
			}
			
			xmlhttp.onreadystatechange=function()
			{
				if(xmlhttp.readyState==4 && xmlhttp.status==200)
				{
					document.getElementById("city").innerHTML=xmlhttp.responseText;
					var v1=document.getElementById("s1");
					
					v1.disabled="";
				}
			}
			//alert("get_vehicle_model.php?id="+str+"&type="+a);
			xmlhttp.open("GET","get_vehicle_model.php?id="+str+"&type="+a,true);
			xmlhttp.send();
			
		}
		
		
	
		</script>	
	
	
	<body>
		<form action="products.php" method="post">
        <table border="0" align="center">
        <tr>
        	<td>
			<select name="users" onChange="showstate(this.value)" id="u1">
			<option value=" ">Select A Vechicle Type:</option>
			
			<?php
				include("include/connection/connection.php");
				$sql="select * from vehicle_type";
				$result=mysql_query($sql);
				
				while($row=mysql_fetch_array($result))
				{
					echo"<option value='$row[0]'>$row[1]</option>";
				}
			?>
			
			</select>
			</td>
           
           <td>
			<div id="state">
			<select id="loadstates" onChange="showcity(this.value)">
			<option value="a">Select A Vechicle Company:</option>
			</select></div>
			</td>
            
            <td>
			<div id="city">
			<select id="loadcities" name="modelold" id="modelold">
			<option value="">Select A Vechicle Model:</option>
			
            </select>
            </div>
            </td>
            </tr>
            <tr>
            <td align="center" colspan="3" >
        
           
		
            <input type="submit" value="Find Battery" name="submit" id="s1" disabled="disabled">
           
            </td>
            </tr>
            </table>
		</form>
	</body>

											</td>
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
