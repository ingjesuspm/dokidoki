<?php
/**................................................................
 * ................................................................
 */
include 'header.php';
?>
        
    <!-- /.navbar-static-side -->
    </nav>
        
    <div id="page-wrapper">
        <div class="graphs">
			<div class="xs">
				<div class="clearfix"></div>
				<form action="save_gallery.php" method="post" enctype="multipart/form-data">
					<div class="col-md-8 inbox_right">
						<div class="Compose-Message">               
							<div class="panel panel-default">
								<div class="panel-heading">
									Gallery Section
								</div>
<?php
								$Gallery=mysqli_query($db, "SELECT * FROM gallery");
								while($row=mysqli_fetch_array($Gallery))
								{
?> 
									<div class="panel-body">
										<div class="alert alert-info">
											Section Detail
										</div>
											  
										<hr>
										<h4>Photo 1</h4><br>
										<br>
										<img src="uploads/<?php echo $row['file1']; ?>" height = "90" width = "90" alt="">
										<label for="exampleInputFile"> Gallery 1 Photo</label>
										<input type="file" name="file1" id="image1">
										<br>
										<h4>Photo 2</h4><br>
										<br>
										<img src="uploads/<?php echo $row['file2']; ?>" height = "90" width = "90" alt="">
										<label for="exampleInputFile"> Slider 2 Photo</label>
										<input type="file" name="file2" id="image2">
										<br>
										<h4>Photo 3</h4><br>
										<br>
										<img src="uploads/<?php echo $row['file3']; ?>" height = "90" width = "90" alt="">
										<label for="exampleInputFile"> Slider 3 Photo</label>
										<input type="file" name="file3" id="image3">
										<br>										
<?php
								}
								mysqli_free_result($Gallery);
?>
										<hr>
										<div class="form-group">
											<button type="submit" class="btn btn-primary">Save Changes</button>
											<button type="reset" class="btn btn-default">Reset</button>
										</div>
									</div>
							</div>
						</div>
					 </div>
				</form>
				<div class="clearfix"></div>
			</div>
        </div>
    </div>
<?php include 'footer.php'; ?>