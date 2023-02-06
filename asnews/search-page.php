<?php
	include "header.php";
	
?>
			<div class="section_conatiner">
				
				<div class="section_field">
				<?php
					include "config.php";
							
							if(isset($_GET['search'])){
								$search_cid = mysqli_real_escape_string($conn,$_GET['search']);
							}
					
				?>
				
					<h1 class="heading"> Search :-  <?php echo $search_cid ; ?> </h1>
				<hr>
					<?php
							
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
								WHERE post.title LIKE '%$search_cid%' OR post.description LIKE '%$search_cid%' OR users.first_name LIKE '%$search_cid%' OR users.last_name LIKE '%$search_cid%'
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
							}else{
								echo "<h1>NO RECORDS FOUND'S</h1>";
							}
					$sql1 = "SELECT * FROM post WHERE post.title LIKE '%{$search_cid}%'";
					$result1= mysqli_query($conn,$sql1) or die("Pagination Query Faied");
					
					
					if(mysqli_num_rows($result1)){
						
						$total_records = mysqli_num_rows($result1);
						
						$total_page = ceil($total_records / $limit);
						
						echo '<ul class="pagination">';
						if($page > 1){
							echo '<li><a href="search-page.php?search='.$search_cid.'&page=',($page - 1),'"> PREV</a></li>';
						}
						for($i = 1; $i <= $total_page; $i++){
							if($i == $page){
								$active = "active";
							}else{
								$active = "";
							}
						echo '<li class ="'.$active.'"><a href="search-page.php?search='.$search_cid.'&page='.$i.'">'.$i.'</a></li>';	
						}
						if($total_page > $page){
							echo '<li><a href="search-page.php?search='.$search_cid.'&page=',($page + 1),'"> NEXT</a></li>';
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