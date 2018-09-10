<?php 
/**................................................................
 * ................................................................
 */


session_start();
if(!isset($_SESSION['SESS_FIRST_NAME'])){
    header("location: login.php");
}
?>
<html>
<?php
                include('connect.php');
				$Settings=mysqli_query($db, "SELECT * FROM settings");
				while($row=mysqli_fetch_array($Settings))
				{
?> 
<head>
<title>
<?php echo $row['site_name']; ?> :: Admin Area </title>
<?php echo $row['google_code']; ?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php echo $row['site_keyword']; ?>" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="//cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<script src="../admin/ckeditor/ckeditor.js"></script>
<script type="text/javascript"> $(document).ready(function(){
    $(".close").click (function(){
        $("#myalert").alert();
    });
});
    
</script>
</head>
<?php } 
    mysqli_free_result($Settings);
?>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                                    
                  
               <a class="navbar-brand" href="index.php">Control Panel </a>
                
            </div>
                <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
				
	
                
			    <li class="dropdown">
                                <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="images/user.png" class="roundimage" alt=""/></a>
	        		<ul class="dropdown-menu">
						<li class="dropdown-menu-header text-center">
							<strong>Account</strong>
						</li>
						<li class="m_2"><a href="#"><i class="fa fa-users"></i>
<?php
$session=session_id();
$time=time();
$time_check=$time-600; //SET TIME 10 Minute

$UsersOnline=mysqli_query($db, "SELECT * FROM user_online WHERE session='$session'");

$count=mysqli_num_rows($UsersOnline);
if($count=="0"){

$sql1="INSERT INTO user_online(session, time)VALUES(\"$session\", \"$time\")";
$result1 = mysqli_query($db,$sql1);

}

else {
$sql2="UPDATE user_online SET time=\"$time\" WHERE session = $session";
$result2 = mysqli_query($db,$sql2);
}

echo "Online Admin(s) : 1 ";
                                                // if over 10 minute, delete session 
$sql4="DELETE FROM user_online WHERE time<$time_check";
$result4=mysqli_query($db,$sql4);

// Open multiple browser page for result


// Close connection
//mysqli_close($db);
?> </a></li>
						<li class="m_2"><a href="#"><i class="fa fa-user-md"></i><?php echo $_SESSION['SESS_FIRST_NAME']; ?> </a></li>
						<li class="m_2"><a href="#"><i class="fa fa-envelope-o"></i> <?php echo $_SESSION['SESS_LAST_NAME']; ?> </a></li>
						<li class="dropdown-menu-header text-center"><strong>Configurations</strong></li>
						<li class="m_2"><a href="site_settings.php"><i class="fa fa-wrench"></i> Site Config</a></li>
						<li class="m_2"><a href="ads_settings.php"><i class="fa fa-usd"></i> Ads Config</a></li>
						<li class="divider"></li>
						<li class="m_2 text-center" ><a href="logout.php"><i class="fa fa-lock "></i> <strong>Log out</strong></a></li>	
					</ul>
	      		</li>
			</ul>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw nav_icon"></i>Home</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user nav_icon"></i>Image Config<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="catering.php">Catering</a>
                                </li>
                                <li>
                                    <a href="daily.php">Daily Specials</a>
                                </li>
                                <li>
                                    <a href="slider.php">Products Slider</a>
                                </li>
                                <li>
                                    <a href="menu.php">Menu</a>
                                </li>
                                <li>
                                    <a href="bestseller.php">Bestsellers</a>
                                </li>
                                <li>
                                    <a href="location.php">Location</a>
                                </li>
                                <li>
                                    <a href="about.php">About Us</a>
                                </li>
                                <li>
                                    <a href="gallery.php">Gallery</a>
                                </li>
                                <li>
                                    <a href="reviews.php">Reviews</a>
                                </li>
                                <li>
                                    <a href="video.php">Youtube Video</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-edit fa-fw nav_icon"></i>Configurations<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="site_settings.php">Site Config</a>
                                </li>
                                <li>
                                    <a href="ads_settings.php">Ads Config</a>
                                </li>
                                <!--
                                <li>
                                    <a href="create_about.php">Acerca del Autor</a>
                                </li>
                                
                                <li>
                                    <a href="add_resources.php">Acerca del Blog</a>
                                </li>
                                -->
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                     
                        <li>
                            <a href="logout.php"><i class="fa fa-lock fa-fw nav_icon"></i>Log out</a>
                        </li>
                        
                    </ul>
                    
                </div>
                <!-- /.sidebar-collapse -->
            </div>