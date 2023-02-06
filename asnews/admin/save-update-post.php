<?php
	include "config.php";
	
	if(empty($_FILES['new-image']['name'])){
		$target = $_POST['old_image'];
	}else{
			$error = array();
		
		$file_name = $_FILES['new-image']['name'];
		$file_size = $_FILES['new-image']['size'];
		$file_tmp = $_FILES['new-image']['tmp_name'];
		$file_typy = $_FILES['new-image']['type'];
		$file_ext = end(explode('.',$file_name));
		$extension = array("jpeg","jpg","png");
		
		
		if(in_array($file_ext,$extension) === false){
			$error[]= "<p style = 'color:green'>this Extention file is not allowed </p>";
			
		}
		if($file_size > 2097152){
			$error[]= "file size";
			
		}
		session_start();
		$new_name =$_SESSION["usname"]."-".time()." -" .basename($file_name);
		$target = "upload/". $new_name;
		$image_name = $new_name;
		
		
		
		if(empty($error)== true){
			move_uploaded_file($file_tmp,$target);
		}else{
			
			print_r($error);
			
			die();
			
		}
		
	}
	unlink("upload/".$_POST['old_image']);
	
	$sql = "UPDATE post SET title ='{$_POST["post_title"]}', description='{$_POST["postdesc"]}', category ='{$_POST["category"]}', post_img ='{$image_name}'
			WHERE  post_id = {$_POST["post_id"]};";
	
	if($_POST['old_category'] != $_POST["category"]){
		$sql .= "UPDATE category SET post = post - 1 WHERE category_id = {$_POST['old_category']};";
		$sql .= "UPDATE category SET post = post + 1 WHERE category_id = {$_POST["category"]}";
		
	}
	$result = mysqli_multi_query($conn,$sql);
	
	if($result){
		header("Location:http://localhost/asnews/admin/post.php");
	}else{
		echo "Query failed";
	}
	


?>