<?php
$page = basename($_SERVER['PHP_SELF']);
switch ($page){
	case "index.php";
		$name = "Login";
	
}

	include "config.php";
	session_start();
	if(isset($_SESSION["usname"])){
		header ("Location:http://localhost/asnews/admin/post.php");
		
	}

?>

<html>
<head>
	<title> <?php echo $name; ?> </title>
	<link rel="stylesheet" href="css\style.css">
</head>
<body>

		<div class ="main_container">
			<div class="login_container">
			<?php
			include "config.php";
					
										
					$sql1 = "SELECT * FROM setting";
					$result1 = mysqli_query($conn,$sql1) or die("query failed");
					
					if(mysqli_num_rows($result1) > 0){
						
						while($row1 = mysqli_fetch_assoc($result1)){
			?>
			<div class="logo">
				<img src="image\<?php echo $row1['logo'];?>" alt= "logo">
			</div>
			<?php
						}
					}
			?>
				<h1> Login Here </h1>
				<div class="login_form_Conatiner">
				<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
				<div class = "form_field 1">
					<label>  Username</label>
					<input type ="text" class="index_form" name="username">
				</div>
				<div class = "form_field 1">
					<label>  password</label>
					<input type ="password" class="index_form" name="password">
				</div>
					<input type ="submit" class="submit" value="login" name= "login">
				</form>
				<?php
				if(isset($_POST['login'])){
					include "config.php";
					
					$user = mysqli_real_escape_string($conn, $_POST['username']);
					$pass = md5($_POST['password']);
					
					
					$sql = "SELECT user_id, first_name, last_name, username, role FROM users WHERE username = '{$user}' AND password ='{$pass}'";
					$result = mysqli_query($conn,$sql) or die("query failed");
					
					if(mysqli_num_rows($result) > 0){
						
						while($row = mysqli_fetch_assoc($result)){
							
							session_start();
								$_SESSION["usname"]= $row['username'];
								$_SESSION["usid"]= $row['user_id'];
								$_SESSION["usrole"]= $row['role'];
								$_SESSION["usdis"]= $row['first_name']." " .$row['last_name'];
								
								header ("Location:http://localhost/asnews/admin/post.php");
								
						}
						
					}else{
						echo "<script> alert('Username and Password Not Mached ')</script> ";
						
					}
					
				}
					
					
				
				?>
				
				</div>
			
			
			</div>
		
		</div>

</body>
</html>