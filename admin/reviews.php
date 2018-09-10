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
				<form action="save_reviews.php" method="post" enctype="multipart/form-data">
					<div class="col-md-8 inbox_right">
						<div class="Compose-Message">               
							<div class="panel panel-default">
								<div class="panel-heading">
									Reviews Section
								</div>
<?php
								$Reviews=mysqli_query($db, "SELECT * FROM reviews");
								while($row=mysqli_fetch_array($Reviews))
								{
?> 
									<div class="panel-body">
										<div class="alert alert-info">
											Section Detail
										</div>
											  
										<hr>
										<h4>Review 1</h4><br>
										<label>Comments 1</label>
										<textarea rows="2" name="comments1" class="form-control1 control13"><?php echo $row['comments1']; ?></textarea>
										<label>Author 1</label>
										<textarea rows="2" name="author1" class="form-control1 control2"><?php echo $row['author1']; ?></textarea>
										<br>
										<img src="uploads/<?php echo $row['file1']; ?>" height = "90" width = "90" alt="">
										<label for="exampleInputFile"> Review 1 Photo</label>
										<input type="file" name="file1" id="image1">
										<br>
										<h4>Review 2</h4><br>
										<label>Comments 2</label>
										<textarea rows="2" name="comments2" class="form-control1 control13"><?php echo $row['comments2']; ?></textarea>
										<label>Author 2</label>
										<textarea rows="2" name="author2" class="form-control1 control2"><?php echo $row['author2']; ?></textarea>
										<br>
										<img src="uploads/<?php echo $row['file2']; ?>" height = "90" width = "90" alt="">
										<label for="exampleInputFile"> Review 2 Photo</label>
										<input type="file" name="file2" id="image2">
										<br>
										<h4>Review 3</h4><br>
										<label>Comments 3</label>
										<textarea rows="2" name="comments3" class="form-control1 control13"><?php echo $row['comments3']; ?></textarea>
										<label>Author 3</label>
										<textarea rows="2" name="author3" class="form-control1 control2"><?php echo $row['author3']; ?></textarea>
										<br>
										<img src="uploads/<?php echo $row['file3']; ?>" height = "90" width = "90" alt="">
										<label for="exampleInputFile"> Slider 3 Photo</label>
										<input type="file" name="file3" id="image3">
										<br>										
<?php
								}
								mysqli_free_result($Reviews);
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