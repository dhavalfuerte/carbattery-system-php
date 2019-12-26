<?php
	include('include/connection/connection.php');
	$id=intval($_GET['id']);
	$type=intval($_GET['type']);
			$qry="select * from vehicle_model where ve_co_id=".$id." and ve_ty_id=".$type;	
		
		$res=mysql_query($qry);


	
	
	echo "<select id='loadcities' name='model' id='model' onChange='abc(this.value)' >"; 
	echo "<option selected='selected'>Select Vehicle Model:</option>";
	while($row=mysql_fetch_array($res))
	{
		echo"<option value='$row[ve_mo_id]'>$row[ve_mo_nm]</option>";
	}
	echo "</select>";
?>