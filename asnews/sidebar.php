<div class ="sidebar">
<?php
	include "search.php";
?>

							<div class="recent_field">
								<?php
							include "config.php";
							$limit = 3;
					
							
							
								$sql="SELECT post.post_id, post.title, post.description, post.post_date,post.post_img,post.author,
								category.category_name,users.username,users.first_name,users.last_name,post.category FROM post
								LEFT JOIN category ON post.category = category_id
								LEFT JOIN users ON post.author = user_id
								ORDER BY post.post_id DESC LIMIT  {$limit}";
							
								
							$result = mysqli_query($conn,$sql) or die("Query Faild ");
							
							if(mysqli_num_rows($result) > 0){
								while($row = mysqli_fetch_assoc($result)){
						
						?>
								<div class="recent_group">
							
									<div class="recent_img">
										<a href ="single.php?id=<?php echo $row["post_id"]; ?>"><img src="admin\upload\<?php echo $row['post_img'];?>"></a>
						
										</div>
						<div class="field_container">
							<div class="recent_title">
								<p> <a href ="single.php?id=<?php echo $row["post_id"]; ?>"><?php echo $row['title'];?></a></p>
							
							</div>
							<div class="recent_par">
									<span> <h5><i class="fa fa-tags"><?php echo $row['category_name'];?></i></h5></span>
								
								<span> <h5><i class="fa fa-calendar"><?php echo $row['post_date'];?></i></h5></span>
							</div>
							
							<div class="recent_read_more">
								<a href="single.php?id=<?php echo $row["post_id"]; ?>">Read More.... </a>
							
							</div>
													
						</div>
							
							
							</div>
							<?php
								}
							}
							?>
							
								
							
						</div>
			
					</div>