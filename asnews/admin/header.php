
<?php
	
	include "config.php";
	session_start();
	if(!isset($_SESSION["usname"])){
		header ("Location:http://localhost/asnews/admin/");
		
	}



?>


<html>
<head>
	<title> Index </title>
	<link rel="stylesheet" href="../css/bootstrap.min.css" />
	<link rel="stylesheet" href="css\style.css">
</head>
<body>

		<div class ="main_container">
			<header>
			<?php
					include "config.php";
			
					
					$sql6 = "SELECT * FROM setting";
					$result6 = mysqli_query($conn,$sql6) or die("query failed");
					
					if(mysqli_num_rows($result6)){
						
					while($row6 = mysqli_fetch_assoc($result6)){
				?>
					<div class="logo"><img src="image\<?php echo $row6['logo'];?>"> </div>	
						<?php
						}
					}
				?>
					
					<div class="imf"> <h1>Hello</h1>
										<span class ="hun"> <?php echo $_SESSION['usdis']; ?> </span><br><br>		
										<span class ="hd"> <?php 
													if($_SESSION["usrole"] == 0){
														echo "Normal User";
													}else{
														echo "Admin User";
													}
												
												
												?> </span>
					</div>		
					<div class="logout"><a href="logout.php"> LOGOUT  </a></div>		
			</header>
				<div class="menu-bar">
					<ul>
						<li><a href="post.php"> POST</a></li>
						<?php
							if($_SESSION["usrole"] == 1){
						?>
						<li><a href="category.php"> CATOGORY</a></li>
						<li><a href="users.php"> USERS</a></li>
						<li><a href="setting.php"> Website Setting </a></li>
						<?php
							}
						?>
					</ul>
			
				</div>
			