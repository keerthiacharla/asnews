<?php
	include "header.php";
	if($_SESSION["usrole"] == 0){
		$postid = $_GET['id'];
								
								
	$sql2="SELECT author FROM post WHERE post.post_id = {$postid}";
	$result2 = mysqli_query($conn,$sql2) or die("Query Faild ");
	$row2 = mysqli_fetch_assoc($result2);
		if($row2['author'] != $_SESSION["usid"]){
			header ("Location:http://localhost/asnews/admin/post.php");
		}
		
		
	}
		


?>
			<div class="sec_container">
				
				<div class="form_conatainer">
				<h1>Update Post</h1>
				<?php
							include "config.php";
							
								$postid = $_GET['id'];
								
								
								$sql="SELECT * FROM post
								LEFT JOIN category ON post.category = category_id
								LEFT JOIN users ON post.author = user_id
								WHERE post.post_id = {$postid}";
								
							$result = mysqli_query($conn,$sql) or die("Query Faild ");
							
							if(mysqli_num_rows($result) > 0){
							while($row = mysqli_fetch_assoc($result)){
						
						?>
					<form action="save-update-post.php" method="POST" enctype="multipart/form-data">
					<div class="field_catainer 1">
							
							<input type ="hidden" class="input_field 1" Value="<?php echo $row['post_id']; ?>" name = "post_id">
						
						</div>
						<div class="field_catainer 1">
							<label> Title </label>
							<input type ="text" class="input_field 1" Value="<?php echo $row['title']; ?>"name = "post_title">
						
						</div>
						<div class="field_catainer 1">
							<label> Description </label>
							 <textarea name="postdesc" class="input_field_text 1" rows="5"  required> 
								<?php echo $row['description']; ?>
							</textarea>
						
						
						<div class="field_catainer 1">
							<label> Category  </label>
							<select class ="select"name ="category">
								<option value="0" selected> Select Category </option>
									<?php
								
								include "config.php";
														
								$sql1 = "SELECT * FROM category";
								$result1 = mysqli_query($conn,$sql1) or die("Query Unseccessfull");
								
								if(mysqli_num_rows($result1) > 0){
									
									while($row1 = mysqli_fetch_assoc($result1)){
										if($row['category']== $row1['category_id']){
											$selected = 'selected';
										}else{
											$selected = '';
										}
										echo "<option {$selected} value='{$row1['category_id']}'>{$row1['category_name']}</option>";
									}
								}
							  
							  
							?>
							</select>
							<input type ="hidden" name = "old_category" value="<?php echo $row['category'];?>"/>
						
						</div>
						<div class="field_catainer 1">
							<label> Uplode </label>
							<input type ="file" name="new-image">
								<img src="upload\<?php echo $row['post_img']; ?>" class= "image" height="150px">
							<input type ="hidden" name="old_image" value="<?php echo $row['post_img'];?>">
						</div>
						<input type="submit" value="Update" class="submit">
					</form>
					<?php
							}
					
							}
					?>
				
				
				
				
				
				
				
				</div>
			
			
			
			
			
			
			
			</div>
		
		
		
		</div>



</body>
</html>