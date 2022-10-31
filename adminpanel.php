<?php
	include_once('header.php');
	if(isset($_SESSION["role"]))
	{
		if($_SESSION["role"]=="admin")
		{
				?>
					<html>
						<head>
							<title>Admin Panel</title>
						</head>
						<body>
						<center>
						<?php
							
								if(isset($_COOKIE["IsAddproduct"]))
								{
									if($_COOKIE["IsAddproduct"]=="true")
									{
										echo "
											<center>
												<div class='alert alert-info'>
												  <span class='closebtn' onclick='this.parentElement.style.display=`none`;'>&times;</span> 
												  <strong>Successfully!</strong> Added product.
												</div>
											</center>
										";
										setcookie("IsAddproduct","false", time() + (3), "/");
									}
								}
								
								if(isset($_COOKIE["NotAddproduct"]))
								{
									if($_COOKIE["NotAddproduct"]=="true")
									{
										echo "
											<center>
												<div class='alert'>
												  <span class='closebtn' onclick='this.parentElement.style.display=`none`;'>&times;</span> 
												  <strong>Failed!</strong> to add the product.
												</div>
											</center>
										";
										setcookie("IsAddproduct","false", time() + (3), "/");
									}
								}
							?>
							</center>
							<center>
							
							<div class="list-container">
								<h1>Admin Panel</h1>
								<hr>
								<br>
								
								<a href="./add-product.php"><div class="list-container-item"><p>Add Products</p></div></a>
								<a href="#"><div class="list-container-item"><p>View Orders</p></div></a>
								<a href="./viewallproduct.php"><div class="list-container-item"><p>View Products</p></div></a>
								<a href="#"><div class="list-container-item"><p>View All Customers</p></div></a>
								
								<a href="./index.php"><div class="btn">Go Back</div></a>
							</div>
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