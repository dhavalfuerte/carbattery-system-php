<?php

	$cn=mysql_connect("localhost","root","")or die("Can't Connect...");
	
	$db=mysql_select_db("abs",$cn) or die("Can't Connect to Database...");;

?>