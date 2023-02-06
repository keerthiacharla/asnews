<?php
						if(isset($_POST['save'])){
							
						include "config.php";
							
						if(empty($_FILES['logo']['name'])){
								$target = $_POST['old_logo'];
							}else{
									$error = array();
								
								$file_name = $_FILES['logo']['name'];
								$file_size = $_FILES['logo']['size'];
								$file_tmp = $_FILES['logo']['tmp_name'];
								$file_typy = $_FILES['logo']['type'];
								$file_ext = end(explode('.',$file_name));
								$extension = array("jpeg","jpg","png");
								
								
								if(in_array($file_ext,$extension) === false){
									$error[]= "<p style = 'color:green'>this Extention file is not allowed </p>";
									
								}
								if($file_size > 2097152){
									$error[]= "file size";
									
								}
								session_start();
								$new_name = time()." -" .basename($file_name);
								$target = "image/". $new_name;
								$image_name = $new_name;
								
								
								
								if(empty($error)== true){
									move_uploaded_file($file_tmp,$target);
								}else{
									
									print_r($error);
									
									die();
									
								}
								
							}
							unlink("image/".$_POST['old_logo']);
							
							$sql = "UPDATE setting SET logo ='{$image_name}',footer ='{$_POST["footerdisc"]}'";
								
							
							$result = mysqli_query($conn,$sql);
							
							if($result){
								header("Location:http://localhost/asnews/admin/post.php");
							}else{
								echo "Query failed";
							}
						}
				?>