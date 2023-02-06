<?php
	include "header.php";


?>
			<div class="sec_container">
				
				<div class="form_conatainer">
						
				<h1>update Category </h1>
					<?php
						
							include "config.php";
							
							$post_id = $_GET['id'];
							
							$sql = "SELECT * FROM category WHERE category_id = {$post_id}";
							$result= mysqli_query($conn,$sql) or die("Connection Failed");
							
							
							if(mysqli_num_rows($result)){
						
							while($row=mysqli_fetch_assoc($result)){
						?>
					<form action ="<?php $_SERVER['PHP_SELF']; ?>" method= "post">
						<div class="field_catainer 1">
							
							<input type ="hidden" class="input_field 1" Value="<?php echo $row['category_id'];?>" name="catid">
						
						</div>
						<div class="field_catainer 1">
							<label> Category Name </label>
							<input type ="text" class="input_field 1" Value="<?php echo $row['category_name'];?>" name="catname">
						
						</div>
						
						<input type="submit" value="Update" class="submit"name="save">
						
					</form>
						<?php
								}
							}
								?>							
									
				</div>
			
			
						<?php
							if(isset($_POST['save'])){
								
							include "config.php";
							
											
							$sql = "UPDATE category SET category_name = ('{$_POST['catname']}') WHERE category_id = {$post_id}";
							$result= mysqli_query($conn,$sql) or die("Connection Failed");
							
								if($result){
									header ("Location:http://localhost/asnews/admin/category.php");
								}else{
									echo "error";
									
								}
							}
							
						?>	
						</div>
				</div>
</body>
</html>