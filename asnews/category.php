<?php
	include "header.php";
	
?>
			<div class="section_conatiner">
				
				<div class="section_field">
				<?php
					$sql1 = "SELECT * FROM category WHERE category_id = {$post_cid}";
					$result1= mysqli_query($conn,$sql1) or die("Pagination Query Faied");
					$row1 = mysqli_fetch_assoc($result1);
				?>
				
					<h1 class="heading"><?php echo $row1["category_name"]; ?> </h1>
				<hr>
					<?php
							include "config.php";
							
							if(isset($_GET['cid'])){
								$post_cid = $_GET['cid'];
							}
							$limit = 3;
					
							if(isset($_GET['page'])){
								$page = $_GET['page'];
							}else{
								$page = 1;
							}
							$offset = ($page - 1) * $limit;
							
								$sql="SELECT post.post_id, post.title, post.description, post.post_date,post.post_img,
								category.category_name,users.username,users.first_name,users.last_name,post.category FROM post
								LEFT JOIN category ON post.category = category_id
								LEFT JOIN users ON post.author = user_id
								WHERE post.category = {$post_cid}
								LIMIT {$offset}, {$limit}";
							
								
							$result = mysqli_query($conn,$sql) or die("Query Faild ");
							
							if(mysqli_num_rows($result) > 0){
								while($row = mysqli_fetch_assoc($result)){
						
						?>
				
					<div class="section_group">
					
					
						<div class="section_img">
							<a href ="single.php?id=<?php echo $row["post_id"]; ?>"><img src="admin\upload\<?php echo $row['post_img'];?>"></a>
						
						</div>
						<div class="field_container">
							<div class="field_title">
								<p> <a href ="single.php?id=<?php echo $row["post_id"]; ?>"><?php echo $row['title'];?></a></p>
							
							</div>
							<div class="field_par">
								<span> <h5><i class="fa fa-tags"><a href="category.php?cid=<?php echo $row['category'];?>"><?php echo $row['category_name'];?></a></i></h5></span>
								<span> <h5><i class="fa fa-user"><a href="author.php?aid=<?php echo $row['author'];?>"><?php echo $row['first_name']." " .$row['last_name'];?></a></i></h5></span>
								<span> <h5><i class="fa fa-calendar"><?php echo $row['post_date'];?></i></h5></span>
							</div>
							<div class="field_disc">
								<p><h4><?php echo substr($row['description'],0,130)."...";?></h4></p>
							</div>
							<div class="read_more">
								<a href="single.php?id=<?php echo $row["post_id"]; ?>">Read More.... </a>
							
							</div>
													
						</div>
							
				
				</div>
				<?php
							}
							}
					
					if(mysqli_num_rows($result1)){
						
						$total_records = $row1['post'];
						
						$total_page = ceil($total_records / $limit);
						
						echo '<ul class="pagination">';
						if($page > 1){
							echo '<li><a href="category.php?cid='.$post_cid.'&page=',($page - 1),'"> PREV</a></li>';
						}
						for($i = 1; $i <= $total_page; $i++){
							if($i == $page){
								$active = "active";
							}else{
								$active = "";
							}
						echo '<li class ="'.$active.'"><a href="category.php?cid='.$post_cid.'&page='.$i.'">'.$i.'</a></li>';	
						}
						if($total_page > $page){
							echo '<li><a href="category.php?cid='.$post_cid.'&page=',($page + 1),'"> NEXT</a></li>';
						}
						echo '</ul>';
					}
					?>
				
				</div>
<!-- 			  end news colo
 -->					<?php
	include "sidebar.php";
?>
				</div>
				
					<?php
	include "footer.php";
?>




</body>








</html>