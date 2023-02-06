<footer>
<?php
					include "config.php";
			
					
					$sql6 = "SELECT * FROM setting";
					$result6 = mysqli_query($conn,$sql6) or die("query failed");
					
					if(mysqli_num_rows($result6)){
						
					while($row6 = mysqli_fetch_assoc($result6)){
				?>
					
					<h3> <?php echo $row6['footer'];?> </h3>
						<?php
						}
					}
				?>
				
				
				</footer>