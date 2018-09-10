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
				<form action="save_video.php" method="post">
					<div class="col-md-8 inbox_right">
						<div class="Compose-Message">               
							<div class="panel panel-default">
								<div class="panel-heading">
									Video Section
								</div>
<?php
								$Video=mysqli_query($db, "SELECT * FROM video");
								while($row=mysqli_fetch_array($Video))
								{
?> 
									<div class="panel-body">
										<div class="alert alert-info">
											Section Detail
										</div>
											  
										<hr>
										<label>Youtube Address</label>
										   
										<textarea rows="1" name="video" class="form-control1 control13"><?php echo $row['video']; ?></textarea>
										<hr>
<?php
								}
								mysqli_free_result($Video);
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