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
				<form action="save_bestseller.php" method="post" enctype="multipart/form-data">
					<div class="col-md-8 inbox_right">
						<div class="Compose-Message">               
							<div class="panel panel-default">
								<div class="panel-heading">
									Bestsellers Section
								</div>
<?php
								$Bestsellers=mysqli_query($db, "SELECT * FROM bestseller");
								while($row=mysqli_fetch_array($Bestsellers))
								{
?> 
									<div class="panel-body">
										<div class="alert alert-info">
											Section Detail
										</div>
											   
										<hr>
										<label>Bestseller Title 1</label>
										   
										<textarea rows="2" name="title1" class="form-control1 control2"><?php echo $row['title1']; ?></textarea>
										<label>Bestseller Price 1</label>
										   
										<textarea rows="2" name="price1" class="form-control1 control2"><?php echo $row['price1']; ?></textarea>
										<br>
										<img src="uploads/<?php echo $row['file1']; ?>" height = "90" width = "90" alt="">
										<label for="exampleInputFile"> Bestseller 1 Photo</label>
										<input type="file" name="file1" id="image1">
										<br>
										<label>Bestseller Title 2</label>
										   
										<textarea rows="2" name="title2" class="form-control1 control2"><?php echo $row['title2']; ?></textarea>
										<label>Bestseller Price 2</label>
										   
										<textarea rows="2" name="price2" class="form-control1 control2"><?php echo $row['price2']; ?></textarea>
										<br>
										<img src="uploads/<?php echo $row['file2']; ?>" height = "90" width = "90" alt="">
										<label for="exampleInputFile">Bestseller 2 Photo</label>
										<input type="file" name="file2" id="image2">
										<br>
										<label>Bestseller Title 3</label>
										   
										<textarea rows="2" name="title3" class="form-control1 control2"><?php echo $row['title3']; ?></textarea>
										<label>Bestseller Price 3</label>
										   
										<textarea rows="2" name="price3" class="form-control1 control2"><?php echo $row['price3']; ?></textarea>
										<br>
										<img src="uploads/<?php echo $row['file3']; ?>" height = "90" width = "90" alt="">
										<label for="exampleInputFile">Bestseller 3 Photo</label>
										<input type="file" name="file3" id="image3">
										<br>
										<label>Bestseller Title 4</label>
										   
										<textarea rows="2" name="title4" class="form-control1 control2"><?php echo $row['title4']; ?></textarea>
										<label>Bestseller Price 4</label>
										   
										<textarea rows="2" name="price4" class="form-control1 control2"><?php echo $row['price4']; ?></textarea>
										<br>
										<img src="uploads/<?php echo $row['file4']; ?>" height = "90" width = "90" alt="">
										<label for="exampleInputFile">Bestseller 4 Photo</label>
										<input type="file" name="file4" id="image4">
										<br>
										<label>Bestseller Title 5</label>
										   
										<textarea rows="2" name="title5" class="form-control1 control2"><?php echo $row['title5']; ?></textarea>
										<label>Bestseller Price 5</label>
										   
										<textarea rows="2" name="price5" class="form-control1 control2"><?php echo $row['price5']; ?></textarea>
										<br>
										<img src="uploads/<?php echo $row['file5']; ?>" height = "90" width = "90" alt="">
										<label for="exampleInputFile">Bestseller 5 Photo</label>
										<input type="file" name="file5" id="image5">
										<br>
										<label>Bestseller Title 6</label>
										   
										<textarea rows="2" name="title6" class="form-control1 control2"><?php echo $row['title6']; ?></textarea>
										<label>Bestseller Price 6</label>
										   
										<textarea rows="2" name="price6" class="form-control1 control2"><?php echo $row['price6']; ?></textarea>
										<br>
										<img src="uploads/<?php echo $row['file6']; ?>" height = "90" width = "90" alt="">
										<label for="exampleInputFile">Bestseller 6 Photo</label>
										<input type="file" name="file6" id="image6">
										<br>										
<?php
								}
								mysqli_free_result($Bestsellers);
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