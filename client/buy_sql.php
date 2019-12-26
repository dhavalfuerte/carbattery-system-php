<?php session_start();
	
		$mob=$_POST["mob"];
		$add=$_POST["add"];
		$pay=$_POST["pay"];
		$id=$_SESSION["id"];
		$nm=$_POST["nm"];
		$city=$_POST["city"];
		if( $mob != "" && $add != "" && $pay != "" && $id != "" && $nm != "" && $city != "")
		{
			include('include/connection/connection.php');
			$u=mysql_query("select user_id from user where username='$_SESSION[unm]'");
			//$u=mysql_query("select user_id from user where username='dd'");
			$urow=mysql_fetch_array($u);
			$rs=mysql_query("select * from product where pr_id=$id");
			$row=mysql_fetch_array($rs);
			//echo "insert into order1(name,mob,addr,payment,pin_id,pid,uid,sup) values('$nm','$mob','$add','$row[price]','$pin','$id','$urow[u_id]','Pending')";
			$qry="insert into order1(name,mobileno,address,payment,city,pro_id,user_id,sup) values('$nm','$mob','$add',$row[price],'$city',$id,$urow[user_id],'Pending')";
			//echo $qry;
			mysql_query($qry);
			header("location:vieworder.php");
		}
	
?>