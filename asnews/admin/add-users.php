<?php
	include "header.php";
	
	if($_SESSION["usrole"] == '0'){
		header ("Location:http://localhost/asnews/admin/post.php");
	}
	if(isset($_POST['save'])){
		
		include "config.php";
		
		$fname = mysqli_real_escape_string($conn,$_POST['fname']);
		$lname = mysqli_real_escape_string($conn,$_POST['lname']);
		$uname = mysqli_real_escape_string($conn,$_POST['username']);
		$pass = mysqli_real_escape_string($conn,md5($_POST['password']));
		$role = mysqli_real_escape_string($conn,$_POST['role']);
		
		$sql = "SELECT username FROM users WHERE username = '{$uname}'";
		$result = mysqli_query($conn,$sql) or die("connection Failed- SELECT");
		
		if(mysqli_num_rows($result)){
			echo "<script> alert(' Already Exists')</script> ";
			
		}else{
			$sql1 = "INSERT INTO users (first_name,last_name,username,password,role)
					VALUES('{$fname}','{$lname}','{$uname}','{$pass}','{$role}')";
			$result1 = mysqli_query($conn,$sql1) or die ("connection failed: INSERT");
			
			header ("Location:http://localhost/asnews/admin/users.php");
			
		}
	}


?>
			<div class="sec_container">
				
				<div class="form_conatainer">
				<h1>Add Users </h1>
					<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
						<div class="field_catainer 1">
							<label> First Name </label>
							<input type ="text" name="fname" class="input_field 1" Value="">
						
						</div>
						<div class="field_catainer 1">
							<label> Last Name </label>
							<input type ="text" name="lname" class="input_field 1" Value="">
						
						</div>
						<div class="field_catainer 1">
							<label> Username </label>
							<input type ="text" name="username" class="input_field 1" Value="">
						
						</div>
						<div class="field_catainer 1">
							<label> Password </label>
							<input type ="password" name="password" class="input_field 1" Value="">
						
						</div>
						<div class="field_catainer 1">
							<label> Role </label>
							<select class ="select"name="role">
								<option value="0"> Normal </option>
								<option value="1"> Admin</option>
									
							</select>
						
						</div>
						<input type="submit" value="add" class="submit" name="save">
												
					</form>
				
				
				
				
				
				
				
				</div>
			
			
			
			
			
			
			
			</div>
		
		
		
		</div>



</body>
</html>