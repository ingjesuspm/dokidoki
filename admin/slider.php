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
				<form action="save_slider.php" method="post" enctype="multipart/form-data">
					<div class="col-md-8 inbox_right">
						<div class="Compose-Message">               
							<div class="panel panel-default">
								<div class="panel-heading">
									Slider Section
								</div>
<?php
								$Slider=mysqli_query($db, "SELECT * FROM slider");
								while($row=mysqli_fetch_array($Slider))
								{
?> 
									<div class="panel-body">
										<div class="alert alert-info">
											Section Detail
										</div>
											  
										<hr>
										<h4>Slider 1</h4><br>
										<label>Product 1</label>
										<textarea rows="2" name="product1" class="form-control1 control2"><?php echo $row['product1']; ?></textarea>
										<label>Price 1</label>
										<textarea rows="2" name="price1" class="form-control1 control2"><?php echo $row['price1']; ?></textarea>
										<label>Title 1</label>
										<textarea rows="2" name="title1" class="form-control1 control2"><?php echo $row['title1']; ?></textarea>
										<label>Composition 1</label>
										   
										<textarea rows="2" name="composition1" class="form-control1 control13"><?php echo $row['composition1']; ?></textarea>
										<br>
										<img src="uploads/<?php echo $row['file1']; ?>" height = "90" width = "90" alt="">
										<label for="exampleInputFile"> Slider 1 Photo</label>
										<input type="file" name="file1" id="image1">
										<br>
										<h4>Slider 2</h4><br>
										<label>Product 2</label>
										<textarea rows="2" name="product2" class="form-control1 control2"><?php echo $row['product2']; ?></textarea>
										<label>Price 2</label>
										<textarea rows="2" name="price2" class="form-control1 control2"><?php echo $row['price2']; ?></textarea>
										<label>Title 2</label>
										<textarea rows="2" name="title2" class="form-control1 control2"><?php echo $row['title2']; ?></textarea>
										<label>Composition 2</label>
										   
										<textarea rows="2" name="composition2" class="form-control1 control13"><?php echo $row['composition2']; ?></textarea>
										<br>
										<img src="uploads/<?php echo $row['file2']; ?>" height = "90" width = "90" alt="">
										<label for="exampleInputFile"> Slider 2 Photo</label>
										<input type="file" name="file2" id="image2">
										<br>
										<h4>Slider 3</h4><br>
										<label>Product 3</label>
										<textarea rows="2" name="product3" class="form-control1 control2"><?php echo $row['product3']; ?></textarea>
										<label>Price 3</label>
										<textarea rows="2" name="price3" class="form-control1 control2"><?php echo $row['price3']; ?></textarea>
										<label>Title 3</label>
										<textarea rows="2" name="title3" class="form-control1 control2"><?php echo $row['title3']; ?></textarea>
										<label>Composition 3</label>
										   
										<textarea rows="2" name="composition3" class="form-control1 control13"><?php echo $row['composition3']; ?></textarea>
										<br>
										<img src="uploads/<?php echo $row['file3']; ?>" height = "90" width = "90" alt="">
										<label for="exampleInputFile"> Slider 3 Photo</label>
										<input type="file" name="file3" id="image3">
										<br>										
<?php
								}
								mysqli_free_result($Slider);
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