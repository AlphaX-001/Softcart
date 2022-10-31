<?php
	session_start();  
	if(isset($_REQUEST["email"])&&isset($_REQUEST["pass"]))
	{
		include_once 'conn.php';
		if($conn)
		{
			$query="select * from users where email='".$_REQUEST["email"]."' and pass='".$_REQUEST["pass"]."'";
			$res=mysqli_query($conn,$query);
											//If User Logs in..
			if($row=mysqli_fetch_array($res))
			{
				//setcookie("isLoggedIn","true", time() + (86400*30), "/");	//for Holding log in
				$_SESSION["isLoggedIn"]="true";
				
				setcookie("hasErrorLogin","false", time() + (3), "/");		//For Validation
				setcookie("LoggedOutBanner","false", time() + (3), "/");	//for Logout Alert
				setcookie("LoggedInBanner","true", time() + (86400*30), "/");	//for Log in Alert
				
				//Collect user Details
				if(isset($row["name"])&& isset($row["email"]))
				{
					$_SESSION["name"] = $row["name"];  
					$_SESSION["email"] = $row["email"];
					$_SESSION["role"] = $row["role"];
					$_SESSION["uid"] = $row["uid"];


				}
				
				//print_r($currentUser);
				//printf ("%s (%s)\n", $row["Lastname"], $row["Age"]);
				header("Location: ./index.php"); 
			}
			else{
				setcookie("isLoggedIn","false", time() + (86400*30), "/");
				//$_SESSION["isLoggedIn"] = "false";

				setcookie("hasErrorLogin","true", time() + (3), "/");
				header("Location: ./login.php"); 
			}
		}
		else
		{
			echo "<center>Connection Error..!</center>";
		}
	}
	else
	{
		setcookie("isLoggedIn","false", time() + (86400*30), "/");
		//$_SESSION["isLoggedIn"] = "false";

		header("Location: ./login.php"); 
	}
	
?>