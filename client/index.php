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
							<h1 class="title">Welcome to 
							<?php 
								if(isset($_SESSION['status']))
								{
									echo $_SESSION['unm']; 
								}
								else
								{	
									echo 'Aditya Battery Service';
								}
							?>
							</h1>
							<div class="entry">
								<br>
								<p>
								An Automotive Battery Is A Rechargeable Battery That Supplies Electrical Energy To A Motor Vechicle.

	It Is Also Know As An SLI Battery (Starting-Lighting-Ignition) And Its Main Purpose Is To Start The Engine.

	Once The Engine Is Running Power For The Car's Electrical Systems Is Supplied By The Alternator.

	Typically,Starting Discharges Less Than Three Percent Of The Battery Capacity.

	SL1 Batteries Are Designed To Release A High Burst Of Current And Then Be Quicky Recharged.

	They Are Not Designed For Deep Discharge And A Full Discharge Can Reduce The Battery's Lifespan.

	<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Battery Electric Vechicles Are Powered By A High-Voltage Electric Vechicle Battery,
		But They Usually Have Automative Battery As Well,So That They Can Use Standard 
		Automative Accessories Which Are Designed To Run On 12V.
	</h3>
								</p>
										
								
								
								
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
