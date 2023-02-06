<?php
	include "header.php";
	

?>
			<div class="sec_container">
				
				<div class="form_conatainer">
				<h1>Website Setting </h1>
				<?php
					include "config.php";
			
					
					$sql = "SELECT * FROM setting";
					$result = mysqli_query($conn,$sql) or die("query failed");
					
					if(mysqli_num_rows($result)){
						
					while($row = mysqli_fetch_assoc($result)){
				?>
					<form action="save-setting.php" method="POST" enctype="multipart/form-data">
												
						<div class="field_catainer 1">
							<label> Website Logo</label>
							<input type ="file" name="logo">
								<img src="image\<?php echo $row['logo'];?>" class= "image" height="150px">
							<input type ="hidden" name="old_logo" value="<?php echo $row['logo'];?>">
						</div>
						<div class="field_catainer 1">
							<label> Footer  Description </label>
							 <textarea name="footerdisc" class="input_field_text 1" rows="5"  required>
								<?php echo $row['footer']; ?>
							 </textarea>
						</div>
						<input type="submit" name="save" value="Save" class="submit">
					
				
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