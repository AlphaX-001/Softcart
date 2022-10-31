<title>MyProfile | SoftCart - an E-Commerce Platform</title>
<?php
	
	include_once("header.php");
	if(isset($_SESSION["name"]) && isset($_SESSION["email"]) && isset($_SESSION["role"]) && isset($_SESSION["uid"]))
	{
		
		
		echo "Name: ".$_SESSION["name"]."<BR>";
		echo "Email: ".$_SESSION["email"]."<BR>";
		echo "Role: ".$_SESSION["role"]."<BR>";
		echo "UID: ".$_SESSION["uid"]."<BR>";
		
	}
	else
	{
		include_once('error.php');
	}
	
?>