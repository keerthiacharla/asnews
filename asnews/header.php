<?php
	//echo "<h1>".. "</h1>";
	include "config.php";
	$page =basename($_SERVER['PHP_SELF']);

	switch($page){
	case "category.php";
	
		if(isset($_GET['cid'])){
			$sql_title = "SELECT * FROM category WHERE category_id = {$_GET['cid']}";
			$result_title = mysqli_query($conn,$sql_title) or die("Title Conn Failed");
			$row_title = mysqli_fetch_assoc($result_title);
			$title_post = "AS NEWS - ".$row_title['category_name'];
			
		}else{
			$title_post = "No Recods Found";
		}
			break;
			case "author.php";
			if(isset($_GET['aid'])){
			$sql_title = "SELECT * FROM users WHERE user_id = {$_GET['aid']}";
			$result_title = mysqli_query($conn,$sql_title) or die("Title Conn Failed");
			$row_title = mysqli_fetch_assoc($result_title);
			$title_post = "AS NEWS - ". $row_title['first_name']." ".$row_title['last_name'];
			
		}else{
			$title_post = "No Recods Found";
		}
			break;
		
		case "search-page.php";
			if(isset($_GET['search'])){
			
			$title_post ="AS NEWS - ". "Search " . $_GET['search'];
			
		}else{
			$title_post = "No Search Found";
		}
			break;
		case "single.php";
			if(isset($_GET['id'])){
			$sql_title = "SELECT * FROM post WHERE post_id = {$_GET['id']}";
			$result_title = mysqli_query($conn,$sql_title) or die("Title Conn Failed");
			$row_title = mysqli_fetch_assoc($result_title);
			$title_post = "AS NEWS - ".$row_title['title'];
			
		}else{
			$title_post = "No Recods Found";
		}
		break;
		
		default ;
			$title_post = "AS NEWS - ". " HOME";
			break;
			
		
			
	}
?>




<html>
<head>
	<title> <?php echo $title_post ?></title>
	<link rel="stylesheet" href="css\style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
</head>

		
<body>
		
		<header>
			<div class="logo">
			<?php
					include "config.php";
			
					
					$sql6 = "SELECT * FROM setting";
					$result6 = mysqli_query($conn,$sql6) or die("query failed");
					
					if(mysqli_num_rows($result6)){
						
					while($row6 = mysqli_fetch_assoc($result6)){
				?>
				<a href="index.php"><img src="admin\image\<?php echo $row6['logo'];?>"></a >
					<?php
						}
					}
				?>
			</div>
			<div class="td">
				 <h3><?php echo date("d-m-Y l",strtotime("now"))?> </h3>
			</div>
			
			
		</header>
		
			
			<div class="menu_bar">
			<?php
				include "config.php";
				
				if(isset($_GET['cid'])){
					$post_cid = $_GET['cid'];
				}
				
				$sql = "SELECT * FROM category WHERE post > 0";
					
				$result = mysqli_query($conn,$sql) or die("Query Faild ");
							
				if(mysqli_num_rows($result) > 0){
					$active = ""; 
			?>
			
			<ul>
				<li><a href="index.php"> Home</a></li>
			<?php
				while($row = mysqli_fetch_assoc($result)){
				if(isset($_GET['cid'])){
					if($row['category_id'] == $post_cid){
						$active = "active"; 
					}else{
						$active = ""; 
					}
				}
					echo "<li><a class= '{$active}' href ='category.php?cid={$row['category_id']}'> {$row['category_name']}</a></li>";
			
				}
			?>	
				</ul>
				<?php
				}
			?>
				
					
			</div>
			