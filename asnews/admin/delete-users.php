<?php
	include "config.php";
	session_start();
	if($_SESSION["usrole"] == '0'){
		header ("Location:http://localhost/asnews/admin/post.php");
	}
	
	$post_id= $_GET['id'];
	
	$sql = "DELETE FROM users WHERE user_id = {$post_id}";

		if(mysqli_query($conn,$sql)){
			header ("Location:http://localhost/asnews/admin/users.php");
		}else{
			echo "plese Check";
		}
		mysqli_close($conn);
		


?>