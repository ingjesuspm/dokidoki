 <div class="copy_layout"> 
 <?php
 /**................................................................
 * ................................................................
 */
                //include('../connect.php');
				$Settings=mysqli_query($db, "SELECT * FROM settings");
				while($row=mysqli_fetch_array($Settings))
				{
?> 
     <p>Copyright © 2018 <?php echo $row['site_name'];?> </p>
<?php 			} 
				mysqli_free_result($Settings);
?> 


 </div>
   </div>
      </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
<!-- Nav CSS -->
<link href="css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
           <script type="text/javascript">
$(document).ready(function(){
     $("body").on("click",".delbtn",function(event){
         event.preventDefault();
         if(confirm("Are you sure you want to delete?")){
            window.location = $(this).attr("href");
         }
     });
});
</script>
</body>
</html>
