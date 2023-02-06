<?php
	include "header.php";
	
	
	if($_SESSION["usrole"] == '0'){
		header ("Location:http://localhost/asnews/admin/post.php");
	}
	

?>
	
			<div class="sec_container">
				
				<div class="form_conatainer">
				<h1>Add Category </h1>
					<form action ="<?php $_SERVER['PHP_SELF']; ?>" method= "post">
						<div class="field_catainer 1">
							<label> Category Name </label>
							<input type ="text" class="input_field 1" Value="" name = "category_name">
						
						</div>
						
						<input type="submit" value="add" class="submit" name="save">
											
					</form>
				
					<?php
						
						
					if(isset($_POST['save'])){
						
						include "config.php";
						
						$category = mysqli_real_escape_string($conn,$_POST['category_name']);
						
						$sql = "SELECT * FROM category WHERE Category_name = '{$category}'";
						$result = mysqli_query($conn,$sql) or die("connection failed:select");
						
						if(mysqli_num_rows($result)){
							echo "<script> alert('This Category Name Already Exists')</script> ";
							
						}else{
							$sql1 = "INSERT INTO Category (category_name)
										VALUES ('{$category}')";
							$result1 = mysqli_query($conn,$sql1) or die("Query Failed : INSERT ");
							header("Location:http://localhost/asnews/admin/category.php");
						}
					}
					
					?>
				
				
				
				
				
				</div>
			
			
			
			
			
			
			
			</div>
		
		
		
		</div>



</body>
</html>