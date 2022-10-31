<?php
	include_once('header.php');
	if(isset($_SESSION["role"]))
	{
		if($_SESSION["role"]=="admin")
		{
				//Connection
				
				$server="localhost";
				$usr="root";
				$pass="";
				$db="ecomm";
				$conn=mysqli_connect($server,$usr,$pass,$db);
				
				//code for adding product
				
				$pid= uniqid("PRODUCT".date('dmy-his')."-");//for Unique ID
				$pname =    $_REQUEST["pname"];
				$price =    $_REQUEST["price"];
				$desc =     $_REQUEST["desc"];
				$stock  =   $_REQUEST["stock"];
				$category = $_REQUEST["category"];
				

				if($conn)
				{	
					$picturepath = saveImage($_FILES["pic"],"products","Product-Profile");
					$query="insert into products(pid,name,price,description,stock,picture,category)values".
					"('".$pid."','".$pname."','".$price."','".$desc."','".$stock."','".$picturepath."','".$category."')";
					$res=mysqli_query($conn,$query);
					
					if($res)
					{
						setcookie("IsAddproduct","true", time() + (3), "/");	//for Alert
						header("location:adminpanel.php");
					}
				}
				else
				{
					echo "Server Error.";
				}
				
				
		}
		else
		{
			include_once('error.php');
		}
	}
	else
	{
		include_once('error.php');
			
	}
	
	//function for save image in db and server
	function saveImage($image,$table,$path)
	{	
		include_once("conn.php");
		$filesize=$image["size"];
		$namearray=explode(".",$image["name"]);
		$extension=strtolower($namearray[sizeof($namearray)-1]);
		
		if($filesize<5585760 &&( $extension=="jpg" || $extension=="png" || $extension=="jpeg"))
		{
			if($conn)
			{
				do{
					$random=(rand(10,10000));
					$result=mysqli_query($conn,"select * from ".$table." where picture= 'Product-".$random.".png'");
				}
				while($row=mysqli_fetch_array($result));
					
				$new_file_name = $random.".png";
				move_uploaded_file($image["tmp_name"],$path."/Product-".$new_file_name);
				return "Product-".$new_file_name;				
			}
			else
			{
				mysqli_connect_error();
			}				
		}
		else{
			echo "<br>Message : Please Upload a jpg or png file with the size less than 5mb"."<br><br>";
		}
	}
	
?>