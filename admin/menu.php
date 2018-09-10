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
				<form action="save_menu.php" method="post" enctype="multipart/form-data">
					<div class="col-md-8 inbox_right">
						<div class="Compose-Message">               
							<div class="panel panel-default">
								<div class="panel-heading">
									Menu Section
								</div>
<?php
								$Menu=mysqli_query($db, "SELECT * FROM menu");
								while($row=mysqli_fetch_array($Menu))
								{
?> 
									<div class="panel-body">
										<div class="alert alert-info">
											Section Detail
										</div>
											  
										<hr>
										<h4>Menu 1</h4><br>
										<label>Menu Title 1</label>
										<textarea rows="2" name="title1" class="form-control1 control2"><?php echo $row['title1']; ?></textarea>
										<label>Product 1</label>
										<textarea rows="2" name="product1" class="form-control1 control2"><?php echo $row['product1']; ?></textarea>
										<label>Price 1</label>
										<textarea rows="2" name="price1" class="form-control1 control2"><?php echo $row['price1']; ?></textarea>
										<label>Detail 1</label>
										<textarea rows="2" name="detail1" class="form-control1 control13"><?php echo $row['detail1']; ?></textarea>
										<label>Product 2</label>
										<textarea rows="2" name="product2" class="form-control1 control2"><?php echo $row['product2']; ?></textarea>
										<label>Price 2</label>
										<textarea rows="2" name="price2" class="form-control1 control2"><?php echo $row['price2']; ?></textarea>
										<label>Detail 2</label>
										<textarea rows="2" name="detail2" class="form-control1 control13"><?php echo $row['detail2']; ?></textarea>
										<label>Product 3</label>
										<textarea rows="2" name="product3" class="form-control1 control2"><?php echo $row['product3']; ?></textarea>
										<label>Price 3</label>
										<textarea rows="2" name="price3" class="form-control1 control2"><?php echo $row['price3']; ?></textarea>
										<label>Detail 3</label>
										<textarea rows="2" name="detail3" class="form-control1 control13"><?php echo $row['detail3']; ?></textarea>
										<br>
										<img src="uploads/<?php echo $row['file1']; ?>" height = "90" width = "90" alt="">
										<label for="exampleInputFile"> Menu 1 Photo</label>
										<input type="file" name="file1" id="image1">
										<br>
										<h4>Menu 2</h4><br>
										<label>Menu Title 2</label>
										<textarea rows="2" name="title2" class="form-control1 control2"><?php echo $row['title2']; ?></textarea>
										<label>Product 4</label>
										<textarea rows="2" name="product4" class="form-control1 control2"><?php echo $row['product4']; ?></textarea>
										<label>Price 4</label>
										<textarea rows="2" name="price4" class="form-control1 control2"><?php echo $row['price4']; ?></textarea>
										<label>Detail 4</label>
										<textarea rows="2" name="detail4" class="form-control1 control13"><?php echo $row['detail4']; ?></textarea>
										<label>Product 5</label>
										<textarea rows="2" name="product5" class="form-control1 control2"><?php echo $row['product5']; ?></textarea>
										<label>Price 5</label>
										<textarea rows="2" name="price5" class="form-control1 control2"><?php echo $row['price5']; ?></textarea>
										<label>Detail 5</label>
										<textarea rows="2" name="detail5" class="form-control1 control13"><?php echo $row['detail5']; ?></textarea>
										<label>Product 6</label>
										<textarea rows="2" name="product6" class="form-control1 control2"><?php echo $row['product6']; ?></textarea>
										<label>Price 6</label>
										<textarea rows="2" name="price6" class="form-control1 control2"><?php echo $row['price6']; ?></textarea>
										<label>Detail 6</label>
										<textarea rows="2" name="detail6" class="form-control1 control13"><?php echo $row['detail6']; ?></textarea>
										<br>
										<img src="uploads/<?php echo $row['file2']; ?>" height = "90" width = "90" alt="">
										<label for="exampleInputFile"> Menu 2 Photo</label>
										<input type="file" name="file2" id="image2">
										<br>
<?php
								}
								mysqli_free_result($Menu);
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