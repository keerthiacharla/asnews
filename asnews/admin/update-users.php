<?php
	include "header.php";
	
	if(isset($_POST['save'])){
		
		
		include "config.php";
		
		$uid = mysqli_real_escape_string($conn,$_POST['user_id']);
		$fname = mysqli_real_escape_string($conn,$_POST['fname']);
		$lname = mysqli_real_escape_string($conn,$_POST['lname']);
		$uname = mysqli_real_escape_string($conn,$_POST['username']);
		
		$role = mysqli_real_escape_string($conn,$_POST['role']);
		
		$sql = "UPDATE users SET first_name='{$fname}',last_name='{$lname}',username='{$uname}',role='{$role}' WHERE user_id = {$uid}";
		if(mysqli_query($conn,$sql)){
			header ("Location:http://localhost/asnews/admin/users.php");
		} 
	}
	


?>
			<div class="sec_container">
				
				<div class="form_conatainer">
				<h1>Update User </h1>
				<?php
					include "config.php";
					
					$post_id= $_GET['id'];
					
					$sql = "SELECT * FROM users WHERE user_id = {$post_id}";
					$result = mysqli_query($conn,$sql) or die("query failed");
					
						if(mysqli_num_rows($result) > 0){
						while($row=mysqli_fetch_assoc($result)){
					
					
				
				?>
					<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
					<div class="field_catainer 1">
							
							<input type ="hidden" class="input_field 1" Value="<?php echo $row['user_id']?>" name ="user_id">
						
						</div>
						<div class="field_catainer 1">
							<label> First Name </label>
							<input type ="text" class="input_field 1" Value="<?php echo $row['first_name']?>" name ="fname">
						
						</div>
						<div class="field_catainer 1">
							<label> Last Name </label>
							<input type ="text" class="input_field 1" Value="<?php echo $row['last_name']?>"name ="lname">
						
						</div>
						<div class="field_catainer 1">
							<label> Username </label>
							<input type ="text" class="input_field 1" Value="<?php echo $row['username']?>"name ="username">
						
						</div>
						
						<div class="field_catainer 1">
							<label> Role </label>
							<select class ="select"name ="role"Value="<?php echo $row['role']?>">
							<?php
								if($row['role'] == 1){
									echo "<option value='1' selected> Admin User </option>
											<option value='0'> Normal User</option>";
								}else{
										echo "<option value='1' > Admin User </option>
											   <option value='0' selected> Normal User</option>";
								}
							?>
							
							
							</select>
						
						</div>
						<input type="submit" value="Update" class="submit" name="save">
						
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