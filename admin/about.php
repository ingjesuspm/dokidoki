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
				<form action="save_about.php" method="post" enctype="multipart/form-data">
					<div class="col-md-8 inbox_right">
						<div class="Compose-Message">               
							<div class="panel panel-default">
								<div class="panel-heading">
									About Us Section
								</div>
<?php
								$About=mysqli_query($db, "SELECT * FROM about");
								while($row=mysqli_fetch_array($About))
								{
?> 
									<div class="panel-body">
										<div class="alert alert-info">
											Section Detail
										</div>
											  
										<hr>
										<label>About Us Message</label>
										   
										<textarea rows="2" name="message" class="form-control1 control13"><?php echo $row['message']; ?></textarea>
										<hr>
										<img src="uploads/<?php echo $row['file']; ?>" height = "90" width = "90" alt="">
										<label for="exampleInputFile">Location Photo</label>
										<input type="file" name="file" id="image">
<?php
								}
								mysqli_free_result($About);
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