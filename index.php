<html>
	<head>		
		<?php 
			include_once 'header.php';
			include_once 'conn.php';
		?>	
		<title>Home | SoftCart - an E-Commerce Platform</title>
	</head>
	<style>
		
	</style>
	<body>
		<?php
			if(isset($_COOKIE["LoggedOutBanner"]))
			{
				if($_COOKIE["LoggedOutBanner"]=="true")
				{
					echo "
						<center>
							<div class='alert'>
							  <span class='closebtn' onclick='this.parentElement.style.display=`none`;'>&times;</span> 
							  <strong>Successfully!</strong> Logged Out.
							</div>
						</center>
					";
					setcookie("LoggedOutBanner","false", time() + (3), "/");
				}
			}
			if(isset($_COOKIE["LoggedInBanner"]))
			{
				if($_COOKIE["LoggedInBanner"]=="true")
				{
					echo "
						<center>
							<div class='alert alert-info'>
							  <span class='closebtn' onclick='this.parentElement.style.display=`none`;'>&times;</span> 
							  <strong>Successfully!</strong> Logged In.
							</div>
						</center>
					";
					setcookie("LoggedInBanner","false", time() + (86400*30), "/");
					
				}
			}
		?>
		<div class="banners">
			<div class="r-banners"></div>
			<div class="l-banners">

					<h5>Shopping is fun.</h5>
					<h1>Browse Our Premium Products!</h1>
					<button class="nav-btn">Shop Now</button>
					<img src="./products/product(4).png">
			</div>
		</div>
		<br>
		<div class="new-arrival">
			<p class="tittle-desc">New Item in the market</p>
			<h2 class="tittles">New Arrivals</h2>
			<center>
			<?php
				$query="select * from products";
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
									<div class="btn-grp">
										<button class="tocart"><i class="bi bi-cart3"></i>&nbsp;Add to Cart</button>
										<a href="#"><button class="buynow"><i class="bi bi-bag-check"></i>&nbsp;Buy Now</button></a>
									</div>						
								</img>
							</div>
						';
					}
				}
				else{
					echo "Error";
				}
				
			
				/*$j=1;
			
				for($i=0;$i<9;$i++)
				{
					echo '
						<!--Product-Card-->
						<div class="new-prod">
							<img class="prod" src="./products/product('.$j.').png">
								<h2 class="prod-tittle">
									 Lorem Ipsum
								</h2>
								<p class="price">
									Price: $45,743
								</p>
								<div class="btn-grp">
									<button class="tocart"><i class="bi bi-cart3"></i>&nbsp;Add to Cart</button>
									<a href="#"><button class="buynow"><i class="bi bi-bag-check"></i>&nbsp;Buy Now</button></a>
								</div>						
							</img>
						</div>
					';
					$j=$j+1;
					if($j==5)
					{
						$j=1;
					}
				}*/
			?>	
				<!--
				<div class="new-prod"><img class="prod" src="./assets/product(1).png"><h2 class="prod-tittle">Thermo Ball Etip Gloves</h2><p style="color:#ff2020;margin:0px;">$45,743</p></img></div>
				<div class="new-prod"><img class="prod" src="./assets/product(3).png"><h2 class="prod-tittle">Thermo Ball Etip Gloves</h2><p style="color:#ff2020;margin:0px;">$45,743</p></img></div>				
				<div class="new-prod"><img class="prod" src="./assets/product(1).png"><h2 class="prod-tittle">Thermo Ball Etip Gloves</h2><p style="color:#ff2020;margin:0px;">$45,743</p></img></div>
				<div class="new-prod"><img class="prod" src="./assets/product(2).png"><h2 class="prod-tittle">Thermo Ball Etip Gloves</h2><p style="color:#ff2020;margin:0px;">$45,743</p></img></div>
				<div class="new-prod"><img class="prod" src="./assets/product(3).png"><h2 class="prod-tittle">Thermo Ball Etip Gloves</h2><p style="color:#ff2020;margin:0px;">$45,743</p></img></div>				
				<div class="new-prod"><img class="prod" src="./assets/product(1).png"><h2 class="prod-tittle">Thermo Ball Etip Gloves</h2><p style="color:#ff2020;margin:0px;">$45,743</p></img></div>
				<div class="new-prod"><img class="prod" src="./assets/product(2).png"><h2 class="prod-tittle">Thermo Ball Etip Gloves</h2><p style="color:#ff2020;margin:0px;">$45,743</p></img></div>
				<div class="new-prod"><img class="prod" src="./assets/product(3).png"><h2 class="prod-tittle">Thermo Ball Etip Gloves</h2><p style="color:#ff2020;margin:0px;">$45,743</p></img></div>
				-->
			</center>
		</div>
		<div class="popular-items"></div>
		<div class="of-choice"></div>
		<div class="footer"></div>
	</body>

</html>
<!--
Designs-
https://preview.colorlib.com/theme/aroma/#
https://preview.colorlib.com/theme/timezone/index.html
->