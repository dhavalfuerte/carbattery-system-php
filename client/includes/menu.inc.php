<ul>
			<li class="current_page_item"><a href="index.php">Home</a></li>
			<!--<li><a href="register.php">Register</a></li>-->
			<?php 
					if(isset($_SESSION['status']))
					{
						
						echo '<li><a href="logout.php">Logout</a></li>
						<li ><a href="viewcart.php">View Cart</a></li>
						<li><a href="vieworder.php">View Order</a></li>';
					}
					else
					{
						echo '<li><a href="register.php">Register</a></li>';
					}
			?>
			
            <li class="last"><a href="product.php">Products</a></li>
			<li class="last"><a href="batterysearch.php">Battery Search</a></li>
            <li class="last"><a href="termsandcondition.php">Terms And Condition</a></li>
			<li class="last"><a href="contact.php">Contact</a></li>
			<li class="last"><a href="aboutus.php">About Us</a></li>
		
</ul>