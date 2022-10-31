<?php  
   session_start();  
?>
<html>
	<head>
	<link href="./assets/logo.png" rel="icon">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="./css/site.css" rel="stylesheet">
		<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Allan' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=Allerta' rel='stylesheet'>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
		
		
		
	</head>
	<body onclick="dispnotcon();">
		<div class="nav-bar">
			
			<div class="logo">
				<a href="./index.php"><img src="./assets/logo-t.png" height="60px"></a>
			</div>
			
			<div class="nav-links">
				<ul>
					<a href="./#"><li>Home</li></a>
					<a href="#"><li>Shop</li></a>
					<a href="#"><li>About</li></a>
					<a href="#"><li>Contact</li></a>
					
				</ul>
			</div>
			
			<div class="nav-right-links">
				<ul style="margin-top: 6px;">
					<li>
						<div class="search-bar" id="searchbar">
							<form action="./search.php" method="get">
								<input type="text" name="searchs" id="searchs" class="search-pad" placeholder="Search Here" required>
								<button class="search-btn" type="submit"><i class="bi bi-search my-icon "></i></button>
							</form>
						</div>
					</li>
					<!--<li class="iconss" onclick="dispsearch();"><i class="bi bi-search my-icon"></i></li>-->
					<li class="iconss" onmouseover="dispcon();"><i class="bi bi-person my-icon"></i></li>
					<li class="iconss"><i class="bi bi-cart my-icon"></i></li>
				</ul>
				
			</div>
			
			<div class="ac-control" id="control">
				<center>
					<?php
						
						if(isset($_SESSION["isLoggedIn"]))
						{
							if($_SESSION["isLoggedIn"]=="false")
							{
								echo "
									<a href='./login.php'><li class='ac-items'>Log in</li></a>
								";
							}
							else
							{	
								
								if(isset($_SESSION['role']))
								{
									if($_SESSION['role']=="admin")
									{
										echo "
											<a href='./adminpanel.php'>
												<li class='ac-items'>
												<i class='bi bi-ui-checks'></i>
													&nbsp;Admin Panel
												</li>
											</a>
										";
									}
								
									echo "
										<a href='./profile.php'>
											<li class='ac-items'>
												<i class='bi bi-person-circle'></i>
												&nbsp;".$_SESSION["name"]."
											</li>
										</a>
									";
								}
								echo "
									<a href='./logout.php'>
										<li class='ac-items'>
										<i class='bi bi-box-arrow-left'></i>
											&nbsp;Log out
										</li>
									</a>
								";
							}
								
						}
						else
						{
							
							echo "
									<a href='./login.php'><li class='ac-items'>Log in</li></a>
								";
								
								
							/*
							if(isset($_SESSION['role']))
							{
								if($_SESSION['role']=="admin")
								{
									echo "
										<a href='./adminpanel.php'>
											<li class='ac-items'>
											<i class='bi bi-ui-checks'></i>
												&nbsp;Admin Panel
											</li>
										</a>
									";
								}
							}
							
							echo "
								<a href='./profile.php'>
									<li class='ac-items'>
										<i class='bi bi-person-circle'></i>
										&nbsp;'".$_SESSION["name"]."'
									</li>
								</a>
							";
							echo "
									<a href='./logout.php'>
										<li class='ac-items'>
										<i class='bi bi-box-arrow-left'></i>
											&nbsp;Log out
										</li>
									</a>
								";*/
						}

					?>
						
				</center>
				
			</div>
		</div>
		<script>
		function dispcon(){
			document.getElementById("control").style.display="block";
		}
		function dispnotcon(){
			document.getElementById("control").style.display="none";
		}
		
		function dispsearch(){
			document.getElementById("searchbar").style.display="block";
		}
	</script>
	</body>
</html>