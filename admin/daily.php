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
				<form action="save_daily.php" method="post" enctype="multipart/form-data">
					<div class="col-md-8 inbox_right">
						<div class="Compose-Message">               
							<div class="panel panel-default">
								<div class="panel-heading">
									Daily Specials Section
								</div>
<?php
								$Daily=mysqli_query($db, "SELECT * FROM daily");
								while($row=mysqli_fetch_array($Daily))
								{
?> 
									<div class="panel-body">
										<div class="alert alert-info">
											Section Detail
										</div>
											   
										<hr>
										<label>Monday Title</label>
										   
										<textarea rows="2" name="title1" class="form-control1 control2"><?php echo $row['title1']; ?></textarea>
										<label>Monday Label</label>
										   
										<textarea rows="2" name="label1" class="form-control1 control13"><?php echo $row['label1']; ?></textarea>
										<br>
										<img src="uploads/<?php echo $row['file1']; ?>" height = "90" width = "90" alt="">
										<label for="exampleInputFile"> Monday Photo</label>
										<input type="file" name="file1" id="image1">
										<br>
										<label>Thuesday Title</label>
										   
										<textarea rows="2" name="title2" class="form-control1 control2"><?php echo $row['title2']; ?></textarea>
										<label>Thuesday Label</label>
										   
										<textarea rows="2" name="label2" class="form-control1 control13"><?php echo $row['label2']; ?></textarea>
										<br>
										<img src="uploads/<?php echo $row['file2']; ?>" height = "90" width = "90" alt="">
										<label for="exampleInputFile">Thuesday Photo</label>
										<input type="file" name="file2" id="image2">
										<br>
										<label>Wednesday Title</label>
										   
										<textarea rows="2" name="title3" class="form-control1 control2"><?php echo $row['title3']; ?></textarea>
										<label>Wednesday Label</label>
										   
										<textarea rows="2" name="label3" class="form-control1 control13"><?php echo $row['label3']; ?></textarea>
										<br>
										<img src="uploads/<?php echo $row['file3']; ?>" height = "90" width = "90" alt="">
										<label for="exampleInputFile">Wednesday Photo</label>
										<input type="file" name="file3" id="image3">
										<br>
										<label>Thursday Title</label>
										   
										<textarea rows="2" name="title4" class="form-control1 control2"><?php echo $row['title4']; ?></textarea>
										<label>Thursday Label</label>
										   
										<textarea rows="2" name="label4" class="form-control1 control13"><?php echo $row['label4']; ?></textarea>
										<br>
										<img src="uploads/<?php echo $row['file4']; ?>" height = "90" width = "90" alt="">
										<label for="exampleInputFile">Thursday Photo</label>
										<input type="file" name="file4" id="image4">
										<br>
										<label>Friday Title</label>
										   
										<textarea rows="2" name="title5" class="form-control1 control2"><?php echo $row['title5']; ?></textarea>
										<label>Friday Label</label>
										   
										<textarea rows="2" name="label5" class="form-control1 control13"><?php echo $row['label5']; ?></textarea>
										<br>
										<img src="uploads/<?php echo $row['file5']; ?>" height = "90" width = "90" alt="">
										<label for="exampleInputFile">Friday Photo</label>
										<input type="file" name="file5" id="image5">
										<br>
										<label>Sat Sun Title</label>
										   
										<textarea rows="2" name="title6" class="form-control1 control2"><?php echo $row['title6']; ?></textarea>
										<label>Sat Sun Label</label>
										   
										<textarea rows="2" name="label6" class="form-control1 control13"><?php echo $row['label6']; ?></textarea>
										<br>
										<img src="uploads/<?php echo $row['file6']; ?>" height = "90" width = "90" alt="">
										<label for="exampleInputFile">Sat Sun Photo</label>
										<input type="file" name="file6" id="image6">
										<br>										
<?php
								}
								mysqli_free_result($Daily);
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