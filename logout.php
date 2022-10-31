<?php
	//setcookie("isLoggedIn","false", time() + (86400*30), "/");
	session_start();
	$_SESSION["isLoggedIn"]="false";
	session_destroy();	
	
	
	//session_unset(); // remove all session variables
	//session_destroy(); // destroy the session
	//unset($_SESSION["isLoggedIn"]);
	setcookie("userDetails",$currentUser, time() - (86400*30), "/");
	setcookie("LoggedOutBanner","true", time() + (3), "/");
	header("Location: ./index.php"); 
?>