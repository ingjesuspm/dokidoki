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
  	    <h3>Google Ads Site Config</h3>
  	    <div class="well1 white">
<?php
                          
				$Ads=mysqli_query($db, "SELECT * FROM table_ads");
				while($row=mysqli_fetch_array($Ads))
				{
?> 
                
        <form class="form-floating ng-pristine ng-invalid ng-invalid-required ng-valid-email ng-valid-url ng-valid-pattern" action="save_ad_setting.php" method="post" novalidate="novalidate" ng-submit="submit()">
          <fieldset>
            
              <div class="form-group">
               <label class="control-label" >Main Ad (728 X 90) Code</label>
                        <textarea rows="2" name="header_ads" class="form-control1 control2"><?php echo $row['header_ads']; ?></textarea>
              </div>
              
              <div class="form-group">
               <label class="control-label" >Side Ad Code</label>
                        <textarea rows="2" name="side_ads" class="form-control1 control2"><?php echo $row['side_ads']; ?></textarea>
              </div>
              
              <div class="form-group">
               <label class="control-label" >Footer Ad Code</label>
                        <textarea rows="2" name="footer_ads" class="form-control1 control2"><?php echo $row['footer_ads']; ?></textarea>
              </div>
              
           
<?php
}
    mysqli_free_result($Ads);

?>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Save Changes</button>
              <button type="reset" class="btn btn-default">Reset</button>
            </div>
          </fieldset>
        </form>
             
      </div>
    </div>
<?php include'footer.php'; ?>