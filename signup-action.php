<?php
	include_once 'conn.php';
	if($conn)
	{	
		$uid = uniqid("CUST".date('dmy-his')."-");	//for Unique ID
		
		$query="insert into users (name,email,pass,role,uid)values('".$_REQUEST["username"]."','".$_REQUEST["mail"]."','".$_REQUEST["password"]."','guest','".$uid."')";
		$res=mysqli_query($conn,$query);
		if($res)
		{
			setcookie("hasErrorSignUp","false", time() + (3), "/");
			header("Location: ./login.php");
		}
		else{
			setcookie("hasErrorSignUp","true", time() + (3), "/");
			header("Location: ./login.php"); 
		}
	}
	else
	{
		echo "<center>Connection Error..!</center>";
	}
?>