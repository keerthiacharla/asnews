<?php
	include "header.php";
	

	if($_SESSION["usrole"] == '0'){
		header ("Location:http://localhost/asnews/admin/post.php");
	}


?>
			<div class="sec_container">
				<div class="fleid_container">
						<div class="add"> <a href="add-category.php">ADD Category</a></div>
						<h1> ALL category </h1>
						<?php
						
							include "config.php";
							$limit = 3;
					
							if(isset($_GET['page'])){
								$page = $_GET['page'];
							}else{
								$page = 1;
							}
							$offset = ($page - 1) * $limit;
							$sql = "SELECT category.category_id,category.category_name, category.post,post.post_id FROM category 
							LEFT JOIN post ON category.post = post_id
							LIMIT {$offset}, {$limit}";
							$result= mysqli_query($conn,$sql) or die("Connection Failed");
							
							
							if(mysqli_num_rows($result)){
						
						
						?>
					<table border="3px solid black" cellspacing="0px" cellpadding="0px">
						<thead>
							<tr>
								<td> SNO</td>
								
								<td> Category Name </td>
								<td> NO OF POST</td>
								<td> edit</td>
								<td> Delete</td>
							</tr>
						</thead>
						<tbody>
						<?php
								while($row=mysqli_fetch_assoc($result)){
						?>
							<tr>
								<td> <?php echo $row['category_id']; ?></td>
								<td> <?php echo $row['category_name']; ?></td>
								<td> <?php echo $row['post']; ?></td>
								<td> 
									<a href="update-category.php?id=<?php echo $row['category_id']; ?>"> EDIT</a>
								</td>
								<td> 
									<a href="delete-category.php?id=<?php echo $row['category_id']; ?>&pid=<?php echo $row['post']; ?>"> delete</a>
								</td>
								
									
								<?php
								}
								?>							
												
						</tbody>
						
					</table>
					<?php
							}
					
					
					$sql1 = "SELECT * FROM category";
					$result1= mysqli_query($conn,$sql1) or die("Pagination Query Faied");
					
					if(mysqli_num_rows($result1)){
						
						$total_records = mysqli_num_rows($result1);
						
						$total_page = ceil($total_records / $limit);
						
						echo '<ul class="pagination">';
						if($page > 1){
							echo '<li><a href="category.php?page=',($page - 1),'"> PREV</a></li>';
						}
						for($i = 1; $i <= $total_page; $i++){
							if($i == $page){
								$active = "active";
							}else{
								$active = "";
							}
						echo '<li class="'.$active.'"><a href="category.php?page='.$i.'">'.$i.'</a></li>';	
						}
						if($total_page > $page){
							echo '<li><a href="category.php?page=',($page + 1),'"> NEXT</a></li>';
						}
						echo '</ul>';
					}
					?>
				
				
				
				
				
				</div>
			
			
			
			
			
			
			
			</div>
		
		
		
		</div>



</body>
</html>