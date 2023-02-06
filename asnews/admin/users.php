
<?php
	include "header.php";
	
	
	if($_SESSION["usrole"] == '0'){
		header ("Location:http://localhost/asnews/admin/post.php");
	}


?>
<div class="sec_container">
				<div class="fleid_container">
						<div class="add"> <a href="add-users.php">ADD USERS</a></div>
						<h1> ALL USERS </h1>
						<?php
							include "config.php";
							$limit = 3;
					
							if(isset($_GET['page'])){
								$page = $_GET['page'];
							}else{
								$page = 1;
							}
							$offset = ($page - 1) * $limit;
									
							$sql="SELECT * FROM users LIMIT {$offset}, {$limit}";
							$result = mysqli_query($conn,$sql) or die("Query Faild ");
							
							if(mysqli_num_rows($result) > 0){
						
						
						?>
						
					<table border="3px solid black" cellspacing="0px" cellpadding="0px">
						<thead>
							<tr>
								<td> SNO</td>
								<td> Name</td>
								<td> Username</td>
								<td> Role</td>
								<td> edit</td>
								<td> Delete</td>
							</tr>
						</thead>

						<tbody>
						<?php
							while($row = mysqli_fetch_assoc($result)){
						
						
						?>
							<tr>
								<td> <?php echo $row["user_id"]; ?></td>
								<td> <?php echo $row["first_name"]." ".$row["last_name"];?> </td>
								<td> <?php echo $row["username"]; ?></td>
								<td> <?php
										if($row["role"] == 0){
											echo "Normal Users";
										}else{
											echo "Admin Users";
										}
								; ?></td>
								<td> 
									<a href="update-users.php?id=<?php echo $row["user_id"]; ?>"> EDIT</a>
								</td>
								<td> 
									<a href="delete-users.php?id=<?php echo $row["user_id"]; ?>"> delete</a>
								</td>
							</tr>
															
												
						</tbody>
					<?php
							}
					?>
					</table>
					
					<?php
							}
					$sql1 = "SELECT * FROM users";
					$result1= mysqli_query($conn,$sql1) or die("Pagination Query Faied");
					
					if(mysqli_num_rows($result1)){
						
						$total_records = mysqli_num_rows($result1);
						
						$total_page = ceil($total_records / $limit);
						
						echo '<ul class="pagination">';
						if($page > 1){
							echo '<li><a href="users.php?page=',($page - 1),'"> PREV</a></li>';
						}
						for($i = 1; $i <= $total_page; $i++){
							if($i == $page){
								$active = "active";
							}else{
								$active = "";
							}
						echo '<li class="'.$active.'"><a href="users.php?page='.$i.'">'.$i.'</a></li>';	
						}
						if($total_page > $page){
							echo '<li><a href="users.php?page=',($page + 1),'"> NEXT</a></li>';
						}
						echo '</ul>';
					}
					?>
					
					
					
					
					</div>
				
				
				</div>
			
			
			</div>
		
		</div>

</body>
</html>