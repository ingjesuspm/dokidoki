<?php
/**................................................................
 * ................................................................
 */



	//Start session
	session_start();
	
	if(isset($_SESSION['SESS_FIRST_NAME'])){
    header("location: index.php");
}
 
?>





<!DOCTYPE HTML>
<html>
<?php
                include('connect.php');
				$Settings=mysqli_query($db, "SELECT * FROM settings");
				while($row=mysqli_fetch_array($Settings))
				{
                  
?> 
<head>
<title>Admin Login :: <?php echo $row['site_name'];?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php echo $row['site_keyword'];?>" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</head>
<?php } 
    mysqli_free_result($Settings);
?>
<body id="login" style="background-color:#DDD">
  <div class="login-logo">
<?php
                            //include('../connect.php');
				$Settings=mysqli_query($db, "SELECT * FROM settings");
				while($row=mysqli_fetch_array($Settings))
				{

                  
?> 
      <a href="../index.php">
<?php echo $row['site_name']; ?></a>
<?php } 
    mysqli_free_result($Settings);
?>
  </div>
  <h2 class="form-heading">Enter to the Admin site</h2>
  
  <div class="app-cam">
      <form action="process_login.php" method="post">
		<input type="text" class="text" name="username"  >
                <input type="password" name="password"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
		<div class="submit"><input type="submit" value="Login"></div>
		
		<ul class="new">
			
                        <li class="new_right"><p class="sign">Do you want to return ? <a href="../index.php">Home </a></p></li>
			<div class="clearfix"></div>
		</ul>
	</form>
  </div>
<?php
                            //include('../connect.php');
				$Settings=mysqli_query($db, "SELECT * FROM settings");
				while($row=mysqli_fetch_array($Settings))
				{
                  
?> 
  
   <div class="copy_layout login">
      <p>Copyright &copy; 2018 <?php echo $row['site_name']; ?>.</p>
   </div>
<?php } 
    mysqli_free_result($Settings);
?>
</body>
</html>
