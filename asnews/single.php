<?php
	include "header.php";
?>
			<div class="section_conatiner">
					
				<div class="section_field">
				
					<div class="section_group">
						<div class="single_conatainer">
						<?php
							include "config.php";
							
								$post_id = $_GET['id'];
							
								$sql="SELECT post.post_id, post.title, post.description, post.post_date,post.post_img,
								category.category_name,users.username,users.first_name,users.last_name,post.category FROM post
								LEFT JOIN category ON post.category = category_id
								LEFT JOIN users ON post.author = user_id
								WHERE post.post_id ={$post_id}";
							
								
							$result = mysqli_query($conn,$sql) or die("Query Faild ");
							
							if(mysqli_num_rows($result) > 0){
								while($row = mysqli_fetch_assoc($result)){
						
						?>
				
						
						
						
							<div class="single_title">
									<p> <a href ="#"><?php echo $row['title'];?></a></p>
							</div>
							<div class="single_par">
								<span> <h5><i class="fa fa-tags"><?php echo $row['category_name'];?></i></h5></span>
								<span> <h5><i class="fa fa-user"><?php echo $row['first_name']." " .$row['last_name'];?></i></h5></span>
								<span> <h5><i class="fa fa-calendar"><?php echo $row['post_date'];?></i></h5></span>
							</div>
							<div class="single_img">
									<img src="admin\upload\<?php echo $row['post_img'];?>">
							</div>
							<div class="single_disc">
									<p><?php echo $row['description'];?></p>
							</div>
						<?php
							}
							}
					
					?>
						
						
						
						
						</div>
					
					
					</div>
				
				</div>
<!-- 			  end news colo
 -->									<?php
	include "sidebar.php";
?>
				</div>
								<?php
	include "footer.php";
?>





</body>








</html>