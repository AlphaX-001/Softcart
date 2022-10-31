<center>
	<?php
	include_once('header.php');
	include_once('conn.php');
	
	if($conn)
	{	
		$query="SELECT * FROM products WHERE name LIKE '%".$_REQUEST["searchs"]."%' OR category LIKE '%".$_REQUEST["searchs"]."%' ";
		$res=mysqli_query($conn,$query);
		if($res)
		{
			if(mysqli_num_rows($res) == 0) 
			{
				echo "<h3>No results found for '".$_REQUEST["searchs"]."'</h3><hr><br>";
			}
			else 
			{
				echo "<h3>Search results for '".$_REQUEST["searchs"]."'</h3><hr><br>";
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
		}
		else{
			echo "<center><h3>Server error!</h3></center>";
		}
	}
	else
	{
		echo "<center><h3>Connection error!</h3></center>";
	}
?>
</center>