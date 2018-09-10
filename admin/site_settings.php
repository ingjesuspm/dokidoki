<?php
/**................................................................
 * ................................................................
 */


include 'header.php';
?>
        </nav>
        <div id="page-wrapper">
        <div class="col-md-12 graphs">
	   <div class="xs">
  	    <h3>Site Configurations</h3>
  	    <div class="well1 white">
<?php
                            //include('../connect.php');
				$Settings=mysqli_query($db, "SELECT * FROM settings");
				while($row=mysqli_fetch_array($Settings))
				{
?> 
                
        <form class="form-floating ng-pristine ng-invalid ng-invalid-required ng-valid-email ng-valid-url ng-valid-pattern" action="savesetting.php" method="post" novalidate="novalidate" ng-submit="submit()">
          <fieldset>
            <div class="form-group">
              <label class="control-label">Site Name</label>
              <input type="text" name="site_name" value="<?php echo $row['site_name']; ?>" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" required="">
            </div>
              <div class="form-group">
              <label class="control-label">Site Title</label>
              <input type="text" name="site_title" value="<?php echo $row['site_title']; ?>" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" required="">
            </div>
            <div class="form-group">
              <label class="control-label">Site Email</label>
              <input type="email" name="email" value="<?php echo $row['email']; ?>" class="form-control1 ng-invalid ng-valid-email ng-invalid-required ng-touched" ng-model="model.email" required="">
            </div>
              <div class="form-group">
               <label class="control-label" >Site Description</label>
                        <textarea rows="2" name="site_desc" class="form-control1 control2"><?php echo $row['site_desc']; ?></textarea>
              </div>
              <div  class="form-group" >
              <label class="control-label">Site Keywords</label>
              <input type="text" name="site_keyword" value="<?php echo $row['site_keyword']; ?>" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" required="">
              </div>
              <div class="form-group">
               <label class="control-label" >Google Analytics Code</label>
                        <textarea rows="2" name="google_code" class="form-control1 control2"><?php echo $row['google_code']; ?></textarea>
              </div>
              <br>
              <div class="form-group">
              <label class="control-label">Address</label>
              <input type="text" name="street" value="<?php echo $row['street']; ?>" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" required="">
            </div>
               <div class="form-group">
              <label class="control-label">City</label>
              <input type="text" name="city" value="<?php echo $row['city']; ?>" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" required="">
            </div>
              <div class="form-group">
              <label class="control-label">Country</label>
              <input type="text" name="country" value="<?php echo $row['country']; ?>" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" required="">
            </div>
            <div class="form-group">
              <label class="control-label">Phone</label>
              <input type="text" name="phone" value="<?php echo $row['phone']; ?>" class="form-control1 ng-invalid ng-invalid-required ng-valid-pattern ng-touched" ng-model="model.number" ng-pattern="/[0-9]/" required="">
            </div>
            <div class="form-group">
              <label class="control-label normal">Facebook Link</label>
              <input type="text" name="facebook" value="<?php echo $row['facebook']; ?>" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" required="">
            </div>
              <div class="form-group">
              <label class="control-label normal">Twitter Link</label>
              <input type="text" name="twitter" value="<?php echo $row['twitter']; ?>" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" required="">
            </div>
            <div class="form-group">
              <label class="control-label normal">Linkedin Link</label>
              <input type="text" name="linkedin" value="<?php echo $row['linkedin']; ?>" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" required="">
            </div>
            <div class="form-group filled">
              <label class="control-label">Instagram Link</label>
              <input type="text" name="status" value="<?php echo $row['status']; ?>" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name" required="">
             
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Save Changes</button>
              <button type="reset" class="btn btn-default">Reset</button>
            </div>
          </fieldset>
        </form>
<?php
}
    mysqli_free_result($Settings);
?>
      </div>
    </div>
<?php include'footer.php'; ?>