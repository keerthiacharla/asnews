<?php

	include "config.php";
	
	$cid = $_GET['id'];
	$pid = $_GET['pid'];
	
	
	
	$sql = "DELETE FROM category WHERE category_id = {$cid};";
	$sql .= "DELETE FROM post WHERE post_id= {$pid}";
	
	
	$result = mysqli_multi_query($conn,$sql) or die("connection faild");
	
	if($result){
		header ("Location:http://localhost/asnews/admin/category.php");
	}else{
		echo "Unsessfully ";
		
	}
	
	


?>