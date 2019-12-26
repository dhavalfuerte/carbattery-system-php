<?php
	include('include/connection/connection.php');

		$id=intval($_GET['id']);
		$qry="select * from vehicle_company where ve_ty_id=".$id;	
		
		$res=mysql_query($qry);
	

	
	
	echo "<select id='loadstates' onChange='showcity(this.value)' name='company' id='company'>";
	echo "<option selected='selected'>Select Vehicle Company:</option>";
	while($row=mysql_fetch_array($res))
	{
		echo"<option value=$row[ve_co_id]>$row[ve_co_nm]</option>";
	}
	echo "</select>";
?>