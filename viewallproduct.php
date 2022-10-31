<?php
	include_once 'header.php';
	include_once 'conn.php';

if(isset($_SESSION["role"]))
	{
		if($_SESSION["role"]=="admin")
		{
?>
			<html>
				<head>
					<title>View All Products</title>
				</head>
				<body>
				<center>
					<?php
					
						$query="select * from products";
						if(isset($_COOKIE["isDeleted"]))
						{
							if($_COOKIE["isDeleted"]=="true")
							{
								echo "
									<center>
										<div class='alert'>
										  <span class='closebtn' onclick='this.parentElement.style.display=`none`;'>&times;</span> 
										  The Product has been <strong>Deleted Successfully!</strong>
										</div>
									</center>
								";
								setcookie("isDeleted","false", time() + (3), "/");
							}
						}
						if($conn)
						{
							$res=mysqli_query($conn,$query);
							while($row=mysqli_fetch_array($res))
							{
									echo '
									<!--Product-Card-->
									<div class="new-prod">
										<img class="prod" src="./Product-Profile/'.$row["picture"].'">
											<h2 class="prod-tittle">
												 '.$row["name"].'
											</h2>
											<p class="price">
												Price: &#8377;&nbsp;'.$row["price"].'
											</p>
											<p class="price" style="color:#107df2;">
												'.$row["category"].'
											</p>
											<div class="btn-grp">
												<button class="tocart"><i class="bi bi-pencil-square"></i>&nbsp;Modify</button>
												<a href="./deleteproduct.php?pid='.$row["pid"].'"><button class="buynow"><i class="bi bi-trash-fill"></i>&nbsp;Delete</button></a>
											</div>						
										</img>
									</div>
								';
							}
						}
						else
						{
							echo "Error";
						}
					?>
					</center>
				</body>
			</html>
<?php
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
	
	
?>