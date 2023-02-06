<?php
	include "header.php";


?>
			<div class="sec_container">
				
				<div class="form_conatainer">
				<h1>Add Post</h1>
					<form action="save-post.php" method="post" enctype="multipart/form-data">
						<div class="field_catainer 1">
							<label> Title </label>
							<input type ="text" class="input_field 1" Value=""name="title">
						
						</div>
						<div class="field_catainer 1">
							<label> Description </label>
							 <textarea name="postdesc" class="input_field_text 1" rows="5"  required></textarea>
						
						
						<div class="field_catainer 1">
							<label> Category  </label>
							<select class ="select" name="category">
							 <option disabled selected >Select Gategory</option>
							<?php
								include "config.php";
								
								
								$sql = "SELECT * FROM Category";
								$result = mysqli_query($conn,$sql) or die("Connection Failed");
								
								while($row = mysqli_fetch_assoc($result)){
									echo "<option value='{$row['category_id']}'> {$row['category_name']} </option>";
								}
							?>
							</select>
						
						</div>
						<div class="field_catainer 1">
							<label> Uplode </label>
							<input type ="file" name="fileToUpload">
						</div>
						<input type="submit" value="add" class="submit" name="submit">
						
					</form>
				
				</div>
			
			</div>
		
		</div>
</body>
</html>