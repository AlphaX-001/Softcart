<?php
	include_once('header.php');
	include_once('conn.php');
	if(isset($_SESSION["role"]))
	{
		if($_SESSION["role"]=="admin")
		{
				?>
					<html>
						<head>
							<title>Admin Panel</title>
							<style>
								
								.drop-container {
								  position: relative;
								  display: flex;
								  gap: 10px;
								  flex-direction: column;
								  justify-content: center;
								  align-items: center;
								  height: 200px;
								  padding: 20px;
								  border-radius: 10px;
								  border: 2px dashed #555;
								  color: #444;
								  cursor: pointer;
								  transition: background .2s ease-in-out, border .2s ease-in-out;
								}

								.drop-container:hover {
								  background: #fff;
								  border-color: #111;
								}

								input[type=file] {
								  width: 350px;
								  max-width: 100%;
								  color: #444;
								  padding: 5px;
								  background: #fff;
								  border-radius: 10px;
								  border: 1px solid #555;
								}

								input[type=file]::file-selector-button {
								  margin-right: 20px;
								  border: none;
								  background: #384aeb;
								  padding: 10px 20px;
								  border-radius: 10px;
								  color: #fff;
								  cursor: pointer;
								  transition: background .2s ease-in-out;
								}

								input[type=file]::file-selector-button:hover {
								  background: #0d45a5;
								}
							
							</style>
						</head>
						
						<body>
							<center>
							<div class="list-container">
								<h1>Add a Product</h1>
								<hr>
								<br>
								<form action="./add-product-action.php" method="post" enctype="multipart/form-data">
									<br>
									<label>Product Name</label>
									<input name="pname" id="pname" type="text" required> 
									<br>
									<label>Price (INR)</label>
									<input name="price" id="price" type="number" required> 
									<br>
									<label>Category</label>
									<!--<input name="category" id="category" type="text" required> -->
									<select name="category" id="category" required>
										<option value="">Select a Category</option>
										<?php
											$query="select * from category";
											if($conn)
											{
												$res=mysqli_query($conn,$query);
												while($row = mysqli_fetch_array($res))
												{
													echo "<option>".$row['name']."</option>";
												}
											}
											else
											{
												echo "<option value=''>Server Error</option>";
											}
											
										?>
									</select>
									<br>
									<label>Available Stock (in Pieces)</label>
									<input name="stock" id="stock" type="number" required> 
									<br>
									<label>Description</label>
									<textarea name="desc" id="desc" rows="5"></textarea>
									<br>
									<label>Select a Profile for the Product</label>
									<input type="file" name="pic" id="pic" placeholder="Select a image" required>
									<br>
									<label>Select some good pictures of the Product</label>
									<input type="file" name="images[]" id="images" accept="image/*" multiple>
									<!--
									<label for="pics[]">Select some good pictures of the Product</label>
									<input type="file" name="pics[]" id="pic" placeholder="Select a image" multiple>-->
									<br>
									<input type="submit" class="btn" style="background:#04aa6d;" value="Submit">
								</form>
								
								
								<a href="./adminpanel.php"><div class="btn">Go Back</div></a>
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