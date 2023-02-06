<?php
	include "header.php";


?>
			<div class="sec_container">
				<div class="fleid_container">
						<div class="add"> <a href="add-post.php">ADD POST</a></div>
						<h1> ALL Post </h1>
						<?php
							include "config.php";
							$limit = 3;
					
							if(isset($_GET['page'])){
								$page = $_GET['page'];
							}else{
								$page = 1;
							}
							$offset = ($page - 1) * $limit;
							if($_SESSION["usrole"] == '1'){	
								$sql="SELECT post.post_id, post.title, post.description, post.post_date,
								category.category_name,users.username,users.first_name,users.last_name,post.category FROM post
								LEFT JOIN category ON post.category = category_id
								LEFT JOIN users ON post.author = user_id
								LIMIT {$offset}, {$limit}";
							}elseif($_SESSION["usrole"] == '0'){
								$sql="SELECT post.post_id, post.title, post.description, post.post_date,
								category.category_name,users.username,users.first_name,users.last_name,post.category FROM post
								LEFT JOIN category ON post.category = category_id
								LEFT JOIN users ON post.author = user_id
								WHERE post.author = {$_SESSION["usid"]}
								LIMIT {$offset}, {$limit}";
							}
								
							$result = mysqli_query($conn,$sql) or die("Query Faild ");
							
							if(mysqli_num_rows($result) > 0){
						
						
						?>
					
					<table border="3px solid black" cellspacing="0px" cellpadding="0px">
						<thead>
							<tr>
								<td> SNO</td>
								<td> Title</td>
								<td> Category</td>
								<td> Date</td>
								<td> Author</td>
								<td> edit</td>
								<td> Delete</td>
							</tr>
						</thead>
						<tbody>
						<?php
							$serial = $offset + 1;
							while($row = mysqli_fetch_assoc($result)){
						
						
						?>
							<tr>
								<td> <?php echo $serial ; ?></td>
								<td> <?php echo $row["title"]; ?></td>
								<td> <?php echo $row["category_name"]; ?></td>
								<td> <?php echo $row["post_date"]; ?></td>
								<td> <?php echo $row["first_name"]." " .$row["last_name"]; ?></td>
								<td> 
									<a href="update-post.php?id=<?php echo $row["post_id"]; ?>"> EDIT</a>
								</td>
								<td> 
									<a href="delete-post.php?id=<?php echo $row["post_id"]; ?>&catid=<?php echo $row["category"];?>"> delete</a>
								</td>
							</tr>
													
							<?php
							
					$serial++					
					?>					
						</tbody>
					<?php
							}
					
					
					?>
					</table>
					<?php
							}
					
					
					$sql1 = "SELECT * FROM post";
					$result1= mysqli_query($conn,$sql1) or die("Pagination Query Faied");
					
					if(mysqli_num_rows($result1)){
						
						$total_records = mysqli_num_rows($result1);
						
						$total_page = ceil($total_records / $limit);
						
						echo '<ul class="pagination">';
						if($page > 1){
							echo '<li><a href="post.php?page=',($page - 1),'"> PREV</a></li>';
						}
						for($i = 1; $i <= $total_page; $i++){
							if($i == $page){
								$active = "active";
							}else{
								$active = "";
							}
						echo '<li class="'.$active.'"><a href="post.php?page='.$i.'">'.$i.'</a></li>';	
						}
						if($total_page > $page){
							echo '<li><a href="post.php?page=',($page + 1),'"> NEXT</a></li>';
						}
						echo '</ul>';
					}
					?>
					
				
				</div>
			
			
			</div>
		
		</div>
</body>
</html>