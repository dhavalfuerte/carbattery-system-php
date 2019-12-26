<html>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
body,td,th {
	font-size: 18px;
	font-style:inherit;
}
body {
	background-color:#9B9B9B;
}
.style3 {font-size: 20px;
		font-style:italic;
		}
-->
</style><body >
<table style="width:100%;height:100%;" border="1">
<tr>
    <td style="height:10%;"><div align="center" class="style3"><h1><img src="image/abs1.gif"></img></h1></div></td>
  </tr>
  <tr>
    <td style="height:5%;"><table  style="width:50%;" >
      <tr align="center">
        <td  style="width:15%;" class="MenuBarHorizontal"><a href="admin_home.php" class="style2"><b>HOME</b></a></td>
        <td  style="width:5%;">
        	
         
           <ul id="MenuBar1" class="MenuBarHorizontal">
         
          <li><a class="MenuBarItemSubmenu" href="#">View</a>
              <ul>
              	<li><a href="view_admin.php">Admin</a></li>
                
                <li><a href="view_category.php">Category</a></li>
                <li><a href="view_city.php">City</a></li>
                <li><a href="view_company.php">Company</a></li>
   		        <li><a href="view_feedback.php">Feedback</a></li>
				<li><a href="view_order.php">Order</a></li>
                <li><a href="view_products.php">Product</a></li>
                <li><a href="view_user.php">User</a></li>
                <li><a href="view_vehicle_type.php">Vehicle Type</a></li>
                <li><a href="view_vehicle_company.php">Vehicle Company</a></li>
                <li><a href="view_vehicle_model.php">Vehicle Model</a></li>
                <li><a href="view_warrnty.php">Warrnty</a></li>
              </ul>
          </li>
        </td>
        <td  style="width:10%;" ><?php
        	if(isset($_SESSION['admin']))
			{
				echo"<a href='logout.php' class='style2'><b>LOGOUT</b></a>";
			}
			else
			{
			echo"<a href='admin_login.php' class='style2'><b>LOGIN</b></a>";
			}?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td style="height:55%;">
  <script type="text/javascript">
<!--
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
//-->
  </script>
