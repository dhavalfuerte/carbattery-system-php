<?php
	
	if(!empty($_POST))
	{
		$msg="";
		
		if(empty($_POST['fnm']) || empty($_POST['unm']) || empty($_POST['gender']) || empty($_POST['pwd']) || empty($_POST['cpwd']) || empty($_POST['mail'])||empty($_POST['city']))
		{
			$msg.="<li>Please full fill all requirement";
		}
		
		if($_POST['pwd']!=$_POST['cpwd'])
		{
			$msg.="<li>Please Enter your Password Again.....";
		}
		
		if(!ereg("^[a-z0-9_]+[a-z0-9_.]*@[a-z0-9_-]+[a-z0-9_.-]*\.[a-z]{2,5}$",$_POST['mail']))
		{
			$msg.="<li>Please Enter Your Valid Email Address...";
		}
		
		
		if(strlen($_POST['pwd'])>10)
		{
			$msg.="<li>Please Enter Your Password in limited Format....";
		}
		
		if(is_numeric($_POST['fnm']))
		{
			$msg.="<li>Name must be in String Format...";
		}
		
		if($msg!="")
		{
			header("location:register.php?error=".$msg);
		}
		else
		{
			$fnm=$_POST['fnm'];
			$unm=$_POST['unm'];
			$pwd=$_POST['pwd'];
			$gender=$_POST['gender'];
			$email=$_POST['mail'];
			$contact=$_POST['contact'];
			
			
			
		
			$link=mysql_connect("localhost","root","")or die("Can't Connect...");
			
			mysql_select_db("abs",$link) or die("Can't Connect to Database...");
			
			$query="insert into user(u_fnm,u_unm,u_pwd,u_gender,u_email,u_contact)
			values('$fnm','$unm','$pwd','$gender','$email','$contact')";
			
			mysql_query($query,$link) or die("Can't Execute Query...");
			header("location:register.php?ok=1");
		}
	}
	else
	{
		header("location:index.php");
	}
?>