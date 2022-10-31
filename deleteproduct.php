<?php
	include_once('conn.php');
	$id=$_REQUEST["pid"];
	if($conn)
	{
		$query="delete from products where pid='".$id."'";
		$res=mysqli_query($conn,$query);
		if($res)
		{
			setcookie("isDeleted","true",time() + (3), "/");	
			header("location:viewallproduct.php");
		}
	}
	else{
		echo "Connection error";
	}
?>