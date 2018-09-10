<!DOCTYPE html>
<?php 
    include "admin/connect.php";

    $Catering=mysqli_query($db, "select * from catering");
    $Daily=mysqli_query($db, "select * from daily");
    $Slider=mysqli_query($db, "select * from slider");
    $Menu=mysqli_query($db, "select * from menu");
    $Bestsellers=mysqli_query($db, "select * from bestseller");
    $Settings=mysqli_query($db, "select * from settings");
    $Location=mysqli_query($db, "select * from location");
    $About=mysqli_query($db, "select * from about");
    $Gallery=mysqli_query($db, "select * from gallery");
    $Reviews=mysqli_query($db, "select * from reviews");
    $Youtube=mysqli_query($db, "select * from video");

?>

<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Doki Doki Chocolate</title>



<!-- Library CSS -->
<link href="css/lecker_library.css" rel="stylesheet">

<!-- Icons CSS -->
<link href="fonts/themify-icons.css" rel="stylesheet">
<link href="fonts/geek/stylesheet.css" rel="stylesheet">
<!-- <link href="fonts/RoboPixiesNew/stylesheet.css" rel="stylesheet"> -->


<!-- Theme CSS -->
<link href="css/lecker_style.css" rel="stylesheet">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Bree+Serif|Lato|Monoton" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 

</head>
<body class="lec_dark">


<!-- Page -->
<div class="lec_page lec_page_neon " id="lec_page">
    
    <!-- To Top -->
    <a href="#lec_page" class="lec_top lec_go"><b class="ti ti-angle-up"></b></a>
    
    <!-- Header -->
    <header>    
        <div class="container">   
            
            <!-- Logo -->
            <a href="/" class="lec_logo">DOKI DOKI CHOCOLATE <i><span>Pretzel</span><span>Chocolate</span></i></a>

            <!-- Menu -->
            <div class="lec_main_menu">
                
                <div class="lec_main_menu_icon">
                    <i></i><i></i><i></i><i></i>
                    <b>Menu</b>
                    <b class="lec_main_menu_icon_b">Back</b>
                </div>
            </div>

            <!-- Menu Content -->
            <div class="lec_main_menu_content lec_image_bck" data-color="rgba(0,0,0,0.9)" data-image="images/breeks3.jpg">
                <!-- Over -->
                <div class="lec_over" data-color="#000" data-opacity="0.8"></div>
            </div>

            <div class="lec_main_menu_content_menu lec_wht_txt text-right">
                <div class="container">
                    <ul>
                        <li class="lec_parent"><a href="#">Home</a>
                            <ul>
                                <li><a href="index.html">Doki Home Page</a></li> 
                            </ul>
                        </li>

                        <li class="lec_parent"><a href="#">Onepage</a>
                            <ul>
                                <li><a href="index.html#catering">Catering</a></li>
                                <li><a href="index.html#specials">Specials</a></li>
                                <li><a href="index.html#products">Product of the Day</a></li>
                                <li><a href="index.html#story">Our Story</a></li>
                                <li><a href="index.html#events">Events & News</a></li>
                                <li><a href="index.html#testimonials">Testimonials</a></li>
                                <li><a href="index.html#reservation">Reservation</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="lec_main_menu_content_menu_copy">
                        <p>© Doki Doki Chocolate 2018</p>
                        <!-- Social Buttons -->
                        <div class="lec_footer_social">
<?php
						while($row=mysqli_fetch_array($Settings))
						{
						$street = $row['street'];
						$email = $row['email'];
						$facebook = $row['facebook'];
						$instagram = $row['status'];
						$twitter = $row['twitter'];

?> 
						
                            <a href="https://www.facebook.com/<?php echo $facebook; ?>"><i class="ti ti-facebook lec_icon_box"></i></a>
                            <a href="https://www.instagram.com/<?php echo $instagram; ?>"><i class="ti ti-instagram lec_icon_box"></i></a>
                            <a href="https://www.twitter.com/<?php echo $twitter; ?>"><i class="ti ti-twitter lec_icon_box"></i></a>
<?php 					} 
						mysqli_free_result($Settings);
?>

							</div>
                    </div>
                </div>
                <!-- container end -->
            </div>
            <!-- menu content end -->
        
        </div>
    </header>
    <!-- Header End -->

        <!-- Flowers End -->


    <!-- Slider -->
    <div class="lec_slider lec_image_bck lec_fixed lec_wht_txt" data-image="images/breeks.jpg">

        <div class="lec_flowers ">
                    <div class="lec_fl_1 lec_fl" data-bottom-top="transform:translateY(250px)" data-top-bottom="transform:translateY(320px)">
                        <img src="images/icecream/pl11.png" alt="">
                    </div>
                    <div class="lec_fl_2 lec_fl" data-bottom-top="transform:translateY(200px)" data-top-bottom="transform:translateY(-270px)">
                        <img src="images/icecream/pl12.png" alt="">
                    </div>
                    <div class="lec_fl_3 lec_fl" data-bottom-top="transform:translateY(200px)" data-top-bottom="transform:translateY(290px)">
                        <img src="images/icecream/pl3.png" alt="">
                    </div>
                    <div class="lec_fl_4 lec_fl" data-bottom-top="transform:translateY(440px)" data-top-bottom="transform:translateY(560px)">
                        <img src="images/icecream/pl4.png" alt="">
                    </div>
                    <div class="lec_fl_5 lec_fl" data-bottom-top="transform:translateY(40px)" data-top-bottom="transform:translateY(-400px)">
                        <img src="images/icecream/pl5.png" alt="">
                    </div>
                    <div class="lec_fl_6 lec_fl" data-bottom-top="transform:translateY(350px)" data-top-bottom="transform:translateY(720px)">
                        <img src="images/icecream/pl6.png" alt="">
                    </div>
                    <div class="lec_fl_7 lec_fl" data-bottom-top="transform:translateY(250px)" data-top-bottom="transform:translateY(0px)">
                        <img src="images/icecream/pl7.png"   alt="">
                    </div>

                    <div class="lec_fl_8 lec_fl" data-bottom-top="transform:translateY(0px)" data-top-bottom="transform:translateY(-600px)">
                        <img src="images/icecream/pl8.png" alt="">
                    </div>
                    <div class="lec_fl_9 lec_fl" data-bottom-top="transform:translateY(100px)" data-top-bottom="transform:translateY(-800px)">
                        <img src="images/icecream/l9.png" alt="">
                    </div>
                    <div class="lec_fl_10 lec_fl" data-bottom-top="transform:translateY(100px)" data-top-bottom="transform:translateY(700px)">
                        <img src="images/icecream/pl10.png" alt="">
                    </div>

                    <div class="lec_fl_14 lec_fl" data-bottom-top="transform:translateY(120px)" data-top-bottom="transform:translateY(-200px)">
                        <img src="images/icecream/pl14.png" alt="">
                    </div>
                    <div class="lec_fl_15 lec_fl" data-bottom-top="transform:translateY(120px)" data-top-bottom="transform:translateY(-50px)">
                        <img src="images/icecream/pl15.png" alt="">
                    </div>
                  
                    <div class="lec_fl_17 lec_fl" data-bottom-top="transform:translateY(180px)" data-top-bottom="transform:translateY(-300px)">
                        <img src="images/icecream/pl11.png" alt="">
                    </div>
                    <div class="lec_fl_18 lec_fl" data-bottom-top="transform:translateY(380px)" data-top-bottom="transform:translateY(200px)">
                        <img src="images/icecream/pl5.png" alt="">
                    </div>
                    <div class="lec_fl_19 lec_fl" data-bottom-top="transform:translateY(370px)" data-top-bottom="transform:translateY(-100px)">
                        <img src="images/icecream/pl9.png" alt="">
                    </div>
                    <div class="lec_fl_20 lec_fl" data-bottom-top="transform:translateY(30px)" data-top-bottom="transform:translateY(760px)">
                        <img src="images/icecream/pl15.png" alt="">
                    </div>
                </div>

        <div class="container">

            <!-- Slider Texts -->
            <div class="lec_slide_txt lec_slide_center_middle text-center">
                
                <h2 class="lec_neon_title">Chocolate <span class="lec_neon_subtitle">Doki Doki<b> ...</b></span></h2>
                
                <div class="lec_subtitle">Best Pretzel Ever</div>
<!-- text comment
                <div class="lec_slide_subtitle">Best Quality<br>Since 1998</div>
                -->
            </div>
            <!-- Slider Texts End -->
        
        </div>
        <!-- container end -->

        <!-- Slide Down -->
        <a class="lec_scroll_down lec_go" href="#lec_content">
            <b></b>
            <i class="ti ti-angle-double-down"></i>
        </a>


    </div>
    <!-- Slider End -->

    <!-- Content -->
    <section id="lec_content" class="lec_content">


        <!-- section -->
        <section class="lec_section lec_wht_txt">


                <div class="container text-center">


                    <div class="row">
<?php
						while($row=mysqli_fetch_array($Catering))
						{
?> 
					
                        <div class="col-md-10 lec_animation_block" data-bottom-top="transform:translate3d(0px, 40px, 0px)" data-top-bottom="transform:translate3d(0px, -40px, 0px)">
                            <img src="admin/uploads/<?php echo $row['file']; ?>" alt="">
                        </div>

                        <div class="col-md-5 lec_animation_block lec_animation_abs_block lec_posr lec_image_bck" data-bottom-top="transform:translate3d(0px, 0px, 0px)" data-top-bottom="transform:translate3d(0px, 40px, 0px)" data-image="images/black-1072366_1920.jpg" data-color="#eee" >

                            <div class="lec_parallax_menu lec_image_bck lec_fixed">
                                <h2 class="lec_neon_title">Catering <span class="lec_neon_subtitle">Let Us Cater <b>Your Next Event</b></span></h2>
                                <p><?php echo $row['label']; ?></p>
                                <a href="#" class="btn">View Our Catering Menu <i class="ti ti-truck"></i></a>
                                
                            </div>

                        </div>
<?php 					} 
						mysqli_free_result($Catering);
?>

                    </div>
                    <!-- row end -->
                </div>
                <!-- container end -->   
                
        </section>
        <!-- section end -->



        <!-- section -->
        <section class="lec_section lec_image_bck lec_fixed lec_section_no_overlay lec_wht_txt">
            
            <!-- Over -->
            <div class="lec_over" data-color="#000" data-opacity="0.2"></div>

            <div class="container text-center">
                
                <h2 class="lec_neon_title">Daily Specials <span class="lec_neon_subtitle">Any Pretzel<b>Any Base</b></span></h2>

                <!-- boxes -->
                <div class="lec_icon_boxes lec_team_slider">
<?php
						while($row=mysqli_fetch_array($Daily))
						{
?> 
                    
                    <!-- item -->
                    <div class="lec_news_block text-center">
                        <span class="lec_news_img_parent"><span class="lec_news_img lec_image_bck" data-image="admin/uploads/<?php echo $row['file1']; ?>"></span></span>
                        <span class="lec_title_animation lec_gold">Monday</span>
                        <span class="lec_news_title"><?php echo $row['title1']; ?></span>
                        <p><?php echo $row['label1']; ?></p>  
                    </div>

                    <!-- item -->
                    <div class="lec_news_block text-center">
                        <span class="lec_news_img_parent"><span class="lec_news_img lec_image_bck" data-image="admin/uploads/<?php echo $row['file2']; ?>"></span></span>
                        <span class="lec_title_animation lec_gold">Thuesday</span>
                        <span class="lec_news_title"><?php echo $row['title2']; ?></span>
                        <p><?php echo $row['label2']; ?></p>  
                    </div>

                    <!-- item -->
                    <div class="lec_news_block text-center">
                        <span class="lec_news_img_parent"><span class="lec_news_img lec_image_bck" data-image="admin/uploads/<?php echo $row['file3']; ?>"></span></span>
                        <span class="lec_title_animation lec_gold">Wednesday</span>
                        <span class="lec_news_title"><?php echo $row['title3']; ?></span>
                        <p><?php echo $row['label3']; ?></p>  
                    </div>

                    <!-- item -->
                    <div class="lec_news_block text-center">
                        <span class="lec_news_img_parent"><span class="lec_news_img lec_image_bck" data-image="admin/uploads/<?php echo $row['file4']; ?>"></span></span>
                        <span class="lec_title_animation lec_gold">Thursday</span>
                        <span class="lec_news_title"><?php echo $row['title4']; ?></span>
                        <p><?php echo $row['label4']; ?></p>  
                    </div>

                    <!-- item -->
                    <div class="lec_news_block text-center">
                        <span class="lec_news_img_parent"><span class="lec_news_img lec_image_bck" data-image="admin/uploads/<?php echo $row['file5']; ?>"></span></span>
                        <span class="lec_title_animation lec_gold">Friday</span>
                        <span class="lec_news_title"><?php echo $row['title5']; ?></span>
                        <p><?php echo $row['label5']; ?></p>  
                    </div>

                    <!-- item -->
                    <div class="lec_news_block text-center">
                        <span class="lec_news_img_parent"><span class="lec_news_img lec_image_bck" data-image="admin/uploads/<?php echo $row['file6']; ?>"></span></span>
                        <span class="lec_title_animation lec_gold">Sat Sun</span>
                        <span class="lec_news_title"><?php echo $row['title6']; ?></span>
                        <p><?php echo $row['label6']; ?></p>  
                    </div>
<?php
								}
								mysqli_free_result($Daily);
?>

                </div>
                <!-- boxes end -->

            </div>
            <!-- container end -->
                
        </section>
        <!-- section end -->


        <!-- section -->
        <section class="lec_section lec_wht_txt">


            <div class="container-fluid text-center">

                <h2 class="lec_neon_title">Best of the Day<span class="lec_neon_subtitle">Any Pretzel<b>Any Base</b></span></h2>

                
                <div class="lec_slider_single lec_slider_single_giant lec_wht_txt lec_lm_type_i" data-dots="true" data-autoplay="true">
<?php
						while($row=mysqli_fetch_array($Slider))
						{
?> 
                    
                    <div class="lec_lm_type_i_item">
                        <img src="admin/uploads/<?php echo $row['file1']; ?>" alt="">
                        
                        <div class="lec_lm_type_i_item_desc lec_image_bck text-left" data-bottom-top="transform:translate3d(0px, 0px, 0px)" data-top-bottom="transform:translate3d(0px, -50px, 0px)" data-color="#333" data-image="images/black-1072366_1920.jpg">
  
                            <div class="lec_lm_type_i_item_desc_cont">
                                <h2 class="lec_neon_title"><?php echo $row['product1']; ?></h2>
                                <div class="lec_lm_type_i_item_price"><?php echo $row['price1']; ?></div>
                                <p><?php echo $row['title1']; ?></p>
                                <h4>Composition</h4>
                                <p class="lec_lm_type_i_item_ingr"><?php echo $row['composition1']; ?> </p>
                            </div>
                        </div>
                    </div>

                    <div class="lec_lm_type_i_item">
                        <img src="admin/uploads/<?php echo $row['file2']; ?>" alt="">
                        
                        <div class="lec_lm_type_i_item_desc lec_image_bck text-left" data-bottom-top="transform:translate3d(0px, 0px, 0px)" data-top-bottom="transform:translate3d(0px, -50px, 0px)" data-color="#333" data-image="images/black-1072366_1920.jpg">
  
                            <div class="lec_lm_type_i_item_desc_cont">
                                <h2 class="lec_neon_title"><?php echo $row['product2']; ?></h2>
                                <div class="lec_lm_type_i_item_price"><?php echo $row['price2']; ?></div>
                                <p><?php echo $row['title2']; ?></p>
                                <h4>Composition</h4>
                                <p class="lec_lm_type_i_item_ingr"><?php echo $row['composition2']; ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="lec_lm_type_i_item">
                        <img src="admin/uploads/<?php echo $row['file3']; ?>" alt="">
                        
                        <div class="lec_lm_type_i_item_desc lec_image_bck text-left" data-bottom-top="transform:translate3d(0px, 0px, 0px)" data-top-bottom="transform:translate3d(0px, -50px, 0px)" data-color="#333" data-image="images/black-1072366_1920.jpg">
  
                            <div class="lec_lm_type_i_item_desc_cont">
                                <h2 class="lec_neon_title"><?php echo $row['product3']; ?></h2>
                                <div class="lec_lm_type_i_item_price"><?php echo $row['price3']; ?></div>
                                <p><?php echo $row['title3']; ?></p>
                                <h4>Composition</h4>
                                <p class="lec_lm_type_i_item_ingr"><?php echo $row['composition3']; ?></p>
                            </div>
                        </div>
                    </div>
<?php
								}
								mysqli_free_result($Slider);
?>

                </div>
                <!-- slider end -->
                
            </div>
            <!-- container end -->

        </section>
        <!-- section end -->


       
        <!-- section -->
        <section class="lec_section lec_section_no_overlay lec_wht_txt">
                
                <!-- Over -->
                <div class="lec_over" data-color="#000" data-opacity="0.2"></div>

                <div class="container">
<?php
						while($row=mysqli_fetch_array($Menu))
						{
?> 

                    <div class="row row_mb_100">

					<div class="col-md-9 lec_animation_block" data-bottom-top="transform:translate3d(0px, 40px, 0px)" data-top-bottom="transform:translate3d(0px, -40px, 0px)">
                            <img src="admin/uploads/<?php echo $row['file1']; ?>" alt="">
                        </div>

                        <div class="col-md-5 lec_animation_block lec_animation_abs_block lec_posr lec_image_bck" data-bottom-top="transform:translate3d(0px, -40px, 0px)" data-top-bottom="transform:translate3d(0px, 40px, 0px)" data-image="images/black-1072366_1920.jpg" data-color="#333" >
                            
                            <div class="lec_parallax_menu lec_image_bck lec_fixed">
                                <h2 class="lec_neon_title"><?php echo $row['title1']; ?></h2>
                                
                                <div class="lec_parallax_menu_mini lec_parallax_menu_mini_feaut">
                                    <div class="lec_parallax_menu_mini_title clearfix">
                                        <h3><?php echo $row['product1']; ?></h3>
                                        <div class="lec_menu_spacer"></div>
                                        <div class="lec_parallax_menu_mini_price"><?php echo $row['price1']; ?></div>
                                    </div>
                                    <p><?php echo $row['detail1']; ?></p>
                                </div>

                                <div class="lec_parallax_menu_mini">
                                    <div class="lec_parallax_menu_mini_title clearfix">
                                        <h3><?php echo $row['product2']; ?></h3>
                                        <div class="lec_menu_spacer"></div>
                                        <div class="lec_parallax_menu_mini_price"><?php echo $row['price2']; ?></div>
                                    </div>
                                    <p><?php echo $row['detail2']; ?></p>
                                </div> 

                                <div class="lec_parallax_menu_mini">
                                    <div class="lec_parallax_menu_mini_title clearfix">
                                        <h3><?php echo $row['product3']; ?></h3>
                                        <div class="lec_menu_spacer"></div>
                                        <div class="lec_parallax_menu_mini_price"><?php echo $row['price3']; ?></div>
                                    </div>
                                    <p><?php echo $row['detail3']; ?></p>
                                </div>
                                
                            </div>

                        </div>

                    </div>
                    <!-- row end -->

                    <div class="row text-left">
                        <div class="col-md-5 lec_animation_block lec_animation_abs_block lec_posl lec_image_bck" data-bottom-top="transform:translate3d(0px, 40px, 0px)" data-top-bottom="transform:translate3d(0px, -40px, 0px)" data-image="images/black-1072366_1920.jpg" data-color="#333" >
                            
                            <div class="lec_parallax_menu lec_image_bck lec_fixed">
                                <h2 class="lec_neon_title"><?php echo $row['title2']; ?></h2>
                                
                                <div class="lec_parallax_menu_mini">
                                    <div class="lec_parallax_menu_mini_title clearfix">
                                        <h3><?php echo $row['product4']; ?></h3>
                                        <div class="lec_menu_spacer"></div>
                                        <div class="lec_parallax_menu_mini_price"><?php echo $row['price4']; ?></div>
                                    </div>      
                                    <p><?php echo $row['detail4']; ?></p>
                                </div>

                                <div class="lec_parallax_menu_mini lec_parallax_menu_mini_feaut">
                                    <div class="lec_parallax_menu_mini_title clearfix">
                                        <h3><?php echo $row['product5']; ?></h3>
                                        <div class="lec_menu_spacer"></div>
                                        <div class="lec_parallax_menu_mini_price"><?php echo $row['price5']; ?></div>
                                    </div>
                                    <p><?php echo $row['detail5']; ?></p>
                                </div> 

                                <div class="lec_parallax_menu_mini lec_parallax_menu_mini_feaut">
                                    <div class="lec_parallax_menu_mini_title clearfix">
                                        <h3><?php echo $row['product6']; ?></h3>
                                        <div class="lec_menu_spacer"></div>
                                        <div class="lec_parallax_menu_mini_price"><?php echo $row['price6']; ?></div>
                                    </div>
                                    <p><?php echo $row['detail6']; ?></p>
                                </div>
                                
                            </div>

                        </div>

                        <div class="col-md-8 col-md-offset-4 lec_animation_block" data-bottom-top="transform:translate3d(0px, -40px, 0px)" data-top-bottom="transform:translate3d(0px, 40px, 0px)">
                            <img src="admin/uploads/<?php echo $row['file2']; ?>" alt="">
                        </div>

                    </div>
                    <!-- row end -->
<?php
								}
								mysqli_free_result($Menu);
?>

                </div>
                <!-- container end -->
                
        </section>
        <!-- section end -->
        
        <!-- section -->
        <section class="lec_section lec_wht_txt">

            <!-- Over -->
            <div class="lec_over" data-color="#000" data-opacity="0.5"></div>


            <div class="container text-center">

                <h2 class="lec_neon_title">Bestsellers<span class="lec_neon_subtitle">Our<b>Favorites</b></span></h2>

                
                <div class="row">
<?php
						while($row=mysqli_fetch_array($Bestsellers))
						{
?> 

              

                        <div class="col-md-4 lec_anim_box">
                            <div class="lec_shop_item">
                                <span class="lec_shop_item_slider">
                                    <img src="admin/uploads/<?php echo $row['file1']; ?>" alt="">
                                </span>
                                <a href="#" class="lec_shop_item_title">
                                    <?php echo $row['title1']; ?>
                                    <b><?php echo $row['price1']; ?></b>
                                </a>
                                <div class="lec_shop_item_links">
                                    <a href="#shop">Buy It</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 lec_anim_box">
                            <div class="lec_shop_item">
                                <span class="lec_shop_item_slider">
                                    <img src="admin/uploads/<?php echo $row['file2']; ?>" alt="">
                                </span>
                                <a href="#" class="lec_shop_item_title">
                                    <?php echo $row['title2']; ?>
                                    <b><?php echo $row['price2']; ?></b>
                                </a>
                                <div class="lec_shop_item_links">
                                    <a href="#shop">Buy It</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 lec_anim_box">
                            <div class="lec_shop_item">
                                <span class="lec_shop_item_slider">
                                    <img src="admin/uploads/<?php echo $row['file3']; ?>" alt="">
                                </span>
                                <a href="#" class="lec_shop_item_title">
                                    <?php echo $row['title3']; ?>
                                    <b><?php echo $row['price3']; ?></b>
                                </a>
                                <div class="lec_shop_item_links">
                                    <a href="#shop">Buy It</a>
                                </div>
                            </div>
                        </div>

						<div class="col-md-4 lec_anim_box">
                            <div class="lec_shop_item">
                                <span class="lec_shop_item_slider">
                                    <img src="admin/uploads/<?php echo $row['file4']; ?>" alt="">
                                </span>
                                <a href="#" class="lec_shop_item_title">
                                    <?php echo $row['title4']; ?>
                                    <b><?php echo $row['price4']; ?></b>
                                </a>
                                <div class="lec_shop_item_links">
                                    <a href="#shop">Buy It</a>
                                </div>
                            </div>
                        </div>
						
                        <div class="col-md-4 lec_anim_box">
                            <div class="lec_shop_item">
                                <span class="lec_shop_item_slider">
                                    <img src="admin/uploads/<?php echo $row['file5']; ?>" alt="">
                                </span>
                                <a href="#" class="lec_shop_item_title">
                                    <?php echo $row['title5']; ?>
                                    <b><?php echo $row['price5']; ?></b>
                                </a>
                                <div class="lec_shop_item_links">
                                    <a href="#shop">Buy It</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 lec_anim_box">
                            <div class="lec_shop_item">
                                <span class="lec_shop_item_slider">
                                    <img src="admin/uploads/<?php echo $row['file6']; ?>" alt="">
                                </span>
                                <a href="#" class="lec_shop_item_title">
                                    <?php echo $row['title6']; ?>
                                    <b><?php echo $row['price6']; ?></b>
                                </a>
                                <div class="lec_shop_item_links">
                                    <a href="#shop">Buy It</a>
                                </div>
                            </div>
                        </div>
<?php
								}
								mysqli_free_result($Bestsellers);
?>
                             
                </div>
                <!-- row end -->              
     
            </div>
            <!-- container end -->

        </section>
        <!-- section end -->




        <!-- section -->
        <section class="lec_section lec_section_no_overlay">
                
                <!-- Over -->
                <div class="lec_over" data-color="#333" data-opacity="0"></div>

                <div class="container text-center">
<?php
					while($row=mysqli_fetch_array($Location))
					{

						$imageloc = $row['file'];
						$loc = $row['location'];
					}
					mysqli_free_result($Location);

?> 


                    <div class="row">
                        <div class="col-md-9 lec_animation_block lec_map_hidden_top" data-bottom-top="transform:translate3d(0px, 40px, 0px)" data-top-bottom="transform:translate3d(0px, -40px, 0px)">
                            <img src="admin/uploads/<?php echo $imageloc; ?>" alt="">
                        </div>

                        <div class="col-md-6 lec_animation_block lec_animation_abs_block lec_posr lec_image_bck lec_wht_txt" data-bottom-top="transform:translate3d(0px, 0px, 0px)" data-top-bottom="transform:translate3d(0px, 40px, 0px)" data-image="images/black-1072366_1920.jpg" data-color="#eee" >

                            <div class="lec_parallax_menu Directions lec_fixed">
                                <h2 class="lec_neon_title">Directions<span class="lec_neon_subtitle">Our DokiDoki<b>Locations</b></span></h2>
                                <p><?php echo $street; ?></p>
                                <p><?php echo $loc; ?></p>
                                <a href="mailto:<?php echo $email; ?>" class="btn">Contact DokiDoki <i class="ti ti-email"></i></a>
                            </div>

                        </div>

                    </div>
                    <!-- row end -->
                </div>
                <!-- container end -->
                
        </section>
        <!-- section end -->

        <!-- section -->
        <section class="lec_section lec_section_no_overlay">
                
                <!-- Over -->
                <div class="lec_over" data-color="#000" data-opacity="0.2"></div>

                <div class="container text-center">

<?php
					while($row=mysqli_fetch_array($About))
					{
?> 

                    <div class="row">
                        <div class="col-md-10 col-md-offset-2 lec_animation_block" data-bottom-top="transform:translate3d(0px, 40px, 0px)" data-top-bottom="transform:translate3d(0px, -40px, 0px)">
                            <img src="admin/uploads/<?php echo $row['file']; ?>" alt="">
                        </div>

                        <div class="col-md-6 lec_animation_block lec_animation_abs_block lec_posl lec_image_bck lec_wht_txt" data-bottom-top="transform:translate3d(0px, 0px, 0px)" data-top-bottom="transform:translate3d(0px, 40px, 0px)" data-image="images/black-1072366_1920.jpg" data-color="#eee">
                            
                            <div class="lec_parallax_menu lec_image_bck lec_fixed">
                                <h2 class="lec_neon_title">About Us<span class="lec_neon_subtitle">Party with us<b>or order to-go</b></span></h2>
        
                                <p><?php echo $row['message']; ?></p>
                                <a href="#" class="btn">Read More <i class="ti ti-heart"></i></a>
                            </div>

                        </div>

                    </div>
                    <!-- row end -->
<?php
					}
					mysqli_free_result($About);
?>
					
                </div>
                <!-- container end -->
                
        </section>
        <!-- section end -->
        



        <!-- section
        <section class="lec_section lec_wht_txt">

            <div class="container text-center">

                <h2 class="lec_neon_title">Instagram<span class="lec_neon_subtitle">Contact Our<b>Care Team</b></span></h2>
                <!-- instagram
                <div id="instagram-carousel" class="insta_slider clearfix"></div>
            </div>
            <!-- container end
                
        </section>
        <!-- section end -->




        <!-- section -->
        <section class="lec_section lec_section_lg_pd lec_image_bck lec_wht_txt" data-image="images/real_chocolate.jpg">


            <div class="container text-center">
                <h2 class="lec_neon_title">Watch out, there's a pretzel about</h2>  
            </div>
            <!-- container end -->

        </section>
        <!-- section end -->


        <!-- section -->
		<!--
        <section class="lec_section">


            <div class="container text-center lec_wht_txt">

                <h2 class="lec_neon_title">Events and News<span class="lec_neon_subtitle">Latest<b>News</b></span></h2>

                <!-- boxes -->
				<!--
                <div class="lec_icon_boxes lec_team_slider">
                    
                    <!-- item -->
					<!--
                    <div class="lec_news_block text-center">
                        <span class="lec_news_img_parent"><span class="lec_news_img lec_image_bck" data-image="http://placehold.it/600x600"></span></span>
                        <span class="lec_title_animation lec_gold">Dec 10</span>
                        <span class="lec_news_title">Restaurants win big on election night</span>
                        <p>Third party delivery players, chains expect election rush...</p>  
                    </div>

                    <!-- item -->
					<!--
                    <div class="lec_news_block text-center">
                        <span class="lec_news_img_parent"><span class="lec_news_img lec_image_bck" data-image="http://placehold.it/600x600"></span></span>
                        <span class="lec_title_animation lec_gold">Dec 12</span>
                        <span class="lec_news_title">Chiles add more than heat to menus</span>
                        <p>Chefs use capsicum to contribute complexity and depth of flavor...</p>  
                    </div>

                    <!-- item -->
					<!--
                    <div class="lec_news_block text-center">
                        <span class="lec_news_img_parent"><span class="lec_news_img lec_image_bck" data-image="http://placehold.it/600x600"></span></span>
                        <span class="lec_title_animation lec_gold">Dec 13</span>
                        <span class="lec_news_title">The quiet, early indicator of restaurant-industry problems</span>
                        <p>Noodles, Papa Murphy’s, Famous Dave’s all recently renegotiated credit agreements...</p>  
                    </div>

                    <!-- item -->
					<!--
                    <div class="lec_news_block text-center">
                        <span class="lec_news_img_parent"><span class="lec_news_img lec_image_bck" data-image="http://placehold.it/600x600"></span></span>
                        <span class="lec_title_animation lec_gold">Jan 14</span>
                        <span class="lec_news_title">Restaurant stocks rebound, at least somewhat</span>
                        <p>Increase in NRN Restaurant Index doesn’t erase a difficult 2016...</p>  
                    </div>

                    <!-- item -->
					<!--
                    <div class="lec_news_block text-center">
                        <span class="lec_news_img_parent"><span class="lec_news_img lec_image_bck" data-image="http://placehold.it/600x600"></span></span>
                        <span class="lec_title_animation lec_gold">Jan 16</span>
                        <span class="lec_news_title">How can packaging reduce food waste</span>
                        <p>Food Service Operators Turn to Innovative Food Packaging to Increase Efficiency, Safety and their Bottom Line...</p>  
                    </div>

                    <!-- item -->
					<!--
                    <div class="lec_news_block text-center">
                        <span class="lec_news_img_parent"><span class="lec_news_img lec_image_bck" data-image="http://placehold.it/600x600"></span></span>
                        <span class="lec_title_animation lec_gold">Jan 18</span>
                        <span class="lec_news_title">Restaurant job growth <br>is slowing</span>
                        <p>After years of rapid expansion, the industry is tempering its hiring...</p>  
                    </div>

                </div>
                <!-- boxes end -->
				<!--
            </div>
            <!-- container end -->

                <!--
        </section>
        <!-- section end -->




        <!-- section -->
        <section class="lec_section lec_image_bck lec_fixed lec_wht_txt" data-stellar-background-ratio="0.2" data-image="images/breeks3.jpg" data-bottom-top="@data-animation:noactive" data-200-bottom="@data-animation:active">

            <!-- Over -->
            <div class="lec_over" data-color="#000" data-opacity="0.8"></div>

            <div class="container text-center">
                
                <h3 class="lec_gold">DokiDoki Chocolate</h3>
                <h2 class="lec_neon_title">Live Music<span class="lec_neon_subtitle">Every<b>Sunday</b></span></h2>
                <div class="lec_slide_title">Elyria<br>Ohio</div>
                <div class="lec_slide_subtitle">344 Oxford Ave.<br>44035</div>
                <p><img src="images/sign_wh.png" alt="" height="70"></p>
            </div>
            <!-- container end -->

        </section>
        <!-- section end -->


        <!-- section -->
        <section class="lec_section">


            <div class="container-fluid text-center lec_wht_txt">

                <h2 class="lec_neon_title">Gallery<span class="lec_neon_subtitle">Our Best<b>Moments</b></span></h2>

                <!-- section -->
<?php
					while($row=mysqli_fetch_array($Gallery))
					{
?> 

                <div class="lec_slider_single lec_wht_txt lec_lm_type_i" data-dots="false" data-autoplay="true">
                    
                    <div class="lec_lm_type_i_item">
                        <img src="admin/uploads/<?php echo $row['file1']; ?>" alt="">
                    </div>

                    <div class="lec_lm_type_i_item">
                        <img src="admin/uploads/<?php echo $row['file2']; ?>" alt="">
                    </div>

                    <div class="lec_lm_type_i_item">
                        <img src="admin/uploads/<?php echo $row['file3']; ?>" alt="">
                    </div>

                </div>
<?php
					}
					mysqli_free_result($Gallery);
?>

            </div>
            <!-- container end -->
                
        </section>
        <!-- section end -->

        


        <!-- section -->
        <section class="lec_section lec_section_no_overlay">
                
                <!-- Over -->
                <div class="lec_over" data-color="#333" data-opacity="0.05"></div>

                <div class="container">

                    <div class="row">
                        <div class="col-md-10 lec_animation_block" data-bottom-top="transform:translate3d(0px, 40px, 0px)" data-top-bottom="transform:translate3d(0px, -40px, 0px)">
                            <img src="images/dokidoki8.jpg" alt="">
                        </div>

                        <div class="col-md-7 lec_animation_block lec_animation_abs_block lec_posr lec_image_bck lec_wht_txt" data-bottom-top="transform:translate3d(0px, -40px, 0px)" data-top-bottom="transform:translate3d(0px, 0px, 0px)" data-image="images/black-1072366_1920.jpg" data-color="#333" >
                            
                            <div class="lec_parallax_menu lec_image_bck lec_fixed text-center">

                                <h2 class="lec_neon_title">Reviews</h2>

 
                                <div class="lec_reviews_single lec_lm_type_i" data-dots="true" data-autoplay="true">
<?php
					while($row=mysqli_fetch_array($Reviews))
					{
?> 
                                   
                                    <!-- item -->
                                    <div class="lec_reviews_item"> 
                                       <p><?php echo $row['comments1']; ?></p>
                                        <svg class="svg-graphic" width="100" height="100" viewBox="0 0 100 100">
                                            <g>
                                               <clipPath id="hexagonal-mask">
                                                  <polygon id="path-1" points="50 -0.787401575 85.9121161 14.0878839 100.787402 50 85.9121161 85.9121161 50 100.787402 14.0878839 85.9121161 -0.787401575 50 14.0878839 14.0878839 "></polygon>
                                                  <text></text>
                                               </clipPath>
                                            </g> 
                                             <image clip-path="url(#hexagonal-mask)" height="100px" width="100px" xlink:href="admin/uploads/<?php echo $row['file1']; ?>" />
                                        </svg>
                            
                                        <strong><?php echo $row['author1']; ?></strong>
                                    </div>

                                    <!-- item -->
                                    <div class="lec_reviews_item"> 
                                        <p><?php echo $row['comments2']; ?></p>
                                        
                                        <svg class="svg-graphic" width="100" height="100" viewBox="0 0 100 100">
                                             <image clip-path="url(#hexagonal-mask)" height="100px" width="100px" xlink:href="admin/uploads/<?php echo $row['file2']; ?>" />
                                        </svg>
                                        <strong><?php echo $row['author2']; ?></strong>
                                    </div>
                                    
                                    <!-- item -->
                                    <div class="lec_reviews_item"> 
                                        <p><?php echo $row['comments3']; ?></p>
                                        <svg class="svg-graphic" width="100" height="100" viewBox="0 0 100 100">
                                             <image clip-path="url(#hexagonal-mask)" height="100px" width="100px" xlink:href="admin/uploads/<?php echo $row['file3']; ?>" />
                                        </svg>
                                        <strong><?php echo $row['author3']; ?></strong>
                                    </div>
<?php
					}
					mysqli_free_result($Reviews);
?>
                                    

                                </div>
                                
                            </div>

                        </div>


                    </div>
                    <!-- row end -->
                </div>
                <!-- container end -->
                
        </section>
        <!-- section end -->
        



        <!-- section -->
        <!--
		<section class="lec_section">

            <!-- Over -->
		<!--	
		<div class="lec_over" data-color="#000" data-opacity="0.2"></div>
            
            <div class="container text-center lec_wht_txt">

                <h2 class="lec_neon_title">Careers<span class="lec_neon_subtitle">Working<b>at Lecker</b></span></h2>

                <p>Thank you for your interest in employment at Lecker! Lecker is committed to providing the best possible climate for maximum development and goal achievement for all employees. Our practice is to treat each employee as an individual.</p>
                <p><a href="#" class="btn">Read More <i class="ti ti-money"></i></a></p>
            </div>
            <!-- container end -->
                
        <!--
		</section>
        <!-- section end -->




        <!-- section -->
		<!--
        <section class="lec_section lec_section_no_overlay">

                <!-- Over -->
				<!--
                <div class="lec_over" data-color="#333" data-opacity="0.05"></div>

                <div class="container text-center">


                    <div class="row">
                        <div class="col-md-10 lec_animation_block" data-bottom-top="transform:translate3d(0px, 40px, 0px)" data-top-bottom="transform:translate3d(0px, -40px, 0px)">
                            <img src="http://placehold.it/1400x800" alt="">
                        </div>

                        <div class="col-md-5 lec_animation_block lec_animation_abs_block lec_posr lec_image_bck lec_wht_txt" data-bottom-top="transform:translate3d(0px, -40px, 0px)" data-top-bottom="transform:translate3d(0px, 0px, 0px)" data-color="#333" data-image="images/black-1072366_1920.jpg">
                            
                            <div class="lec_parallax_menu lec_image_bck lec_fixed">

                                <h2 class="lec_neon_title">Victory<span class="lec_neon_subtitle">Award Winning<b>Restaurant</b></span></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam earum culpa hic laborum, deleniti rerum quasi inventore in nam.</p>
                                <p><img src="images/awards.png" class="lec_light_shadow" height="100" alt=""></p>
                                
                                
                            </div>



                        </div>


                    </div>
                    <!-- row end -->
                <!--
				</div>
                <!-- container end -->
                
        <!--
		</section>
        <!-- section end -->




        <!-- section -->
        <section class="lec_section lec_image_bck lec_fixed lec_wht_txt" data-stellar-background-ratio="0.2" data-image="images/breeks3.jpg" data-bottom-top="@data-animation:noactive" data-200-bottom="@data-animation:active">

                <!-- Over -->
                <div class="lec_over" data-color="#333" data-opacity="0.8"></div>

                <div class="container text-center">

                    <h2 class="lec_neon_title">Reservation<span class="lec_neon_subtitle">For 10 people<b>or more</b></span></h2>
                    
                    <div class="row">
                        <form action="https://formspree.io/your@email.com" method="POST">
                            <div class="col-md-5 col-md-offset-1">
                                <p>Book a Party</p>
                                <input type="text" placeholder="Date" name="Date" class="form-control" >
                                <input type="text" placeholder="Time" name="Time" class="form-control" >
                                <input type="text" placeholder="Party" name="Party" class="form-control" >
                            </div>

                            <div class="col-md-5">
                                <p>Contact Details</p>
                                <input type="text" placeholder="Name" name="Name" class="form-control" >
                                <input type="email" class="form-control" name="Email" placeholder="Email" >
                                <input type="text" placeholder="Phone" name="Phone" class="form-control">
                            </div>

                            <div class="col-md-10 col-md-offset-1">
                                <textarea class="form-control" name="DaMessagete" placeholder="Message" rows="6"></textarea>
                            </div>
                            <div class="col-md-4 col-md-offset-4">
                                <input type="submit" class="btn" value="Make reservation" >
                            </div>
                        </form>
                    </div>
                    <!-- row end -->

                </div>
                <!-- container end -->
                
        </section>
        <!-- section end -->




        <!-- section -->
        <section class="lec_section lec_section_no_overlay">
                
                <!-- Over -->
                <div class="lec_over" data-color="#333" data-opacity="0.05"></div>

                <div class="container text-center">


                    <div class="row">
                        <div class="col-md-7 lec_animation_block lec_wht_txt" data-bottom-top="transform:translate3d(0px, 40px, 0px)" data-top-bottom="transform:translate3d(0px, -40px, 0px)">
                            <div class="lec_virtual_close"><i class="ti ti-close"></i></div>
                            <div class="lec_virtual_play lec_virtual_play_black lec_image_bck">

                                <!-- Slider Texts -->
                                <div class="lec_slide_txt lec_slide_center_middle">
                                    <h2 class="lec_neon_title">Discover Us <span class="lec_neon_subtitle">Play<b>The Video</b></span></h2>
                                </div>
                                <!-- Slider Texts End -->
                            </div>
<?php
					while($row=mysqli_fetch_array($Youtube))
					{
						$videolink = $row['video'];
					}
					mysqli_free_result($Youtube);
					
					$ytarray=explode("/", $videolink);
					$ytendstring=end($ytarray);
					$ytendarray=explode("?v=", $ytendstring);
					$ytendstring=end($ytendarray);
					$ytendarray=explode("&", $ytendstring);
					$ytcode=$ytendarray[0];
					echo "<iframe width=\"420\" height=\"515\" src=\"https://www.youtube.com/embed/$ytcode\" frameborder=\"0\" allowfullscreen></iframe>";
?>
						</div>

                        <!--
						<div class="col-md-5 lec_animation_block lec_animation_abs_block lec_posr lec_image_bck lec_wht_txt" data-bottom-top="transform:translate3d(0px, -40px, 0px)" data-top-bottom="transform:translate3d(0px, 0px, 0px)" data-image="images/black-1072366_1920.jpg" data-color="#eee" >
                            
                            <div class="lec_parallax_menu lec_image_bck lec_fixed">

                                <h2 class="lec_neon_title">Virtual Tour</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam earum culpa hic laborum, deleniti rerum quasi inventore in nam.</p>
                                
                                
                            </div>



                        </div>
						-->

                    </div>
                    <!-- row end -->
                </div>
                <!-- container end -->
                
        </section>
        <!-- section end -->

   
    
    </section>
    <!-- Content End -->
        
    

    <!-- Footer -->
    <footer class="lec_image_bck text-center lec_wht_txt" data-image="images/main_back_bl.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    

                    <!-- Copyrights -->
                    <h2 class="lec_neon_title">Chocolate <span class="lec_neon_subtitle">Doki Doki<b> Best Pretzel Ever</b></span></h2>
                    <p>Visa, MasterCard, Paypal <br>
                    Transaction fee for payments by CC or food checks. <br>
                    No Bancontact.
                    </p>

                    <!-- Social Buttons -->
                    <div class="lec_footer_social">
                        <div data-animation="animation_blocks" data-bottom="@class:noactive" data--100-bottom="@class:active">
                            <a href="https://www.facebook.com/<?php echo $facebook; ?>"><i class="ti ti-facebook lec_icon_box"></i></a>
                            <a href="https://www.instagram.com/<?php echo $instagram; ?>"><i class="ti ti-instagram lec_icon_box"></i></a>
                            <a href="https://www.twitter.com/<?php echo $twitter; ?>"><i class="ti ti-twitter lec_icon_box"></i></a>
                        </div>
                    </div>

                    <p>© Doki Doki Chocolate 2018</p>

                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

</div>
<!-- Page End -->



<!-- JQuery -->
<script src="js/jquery-1.12.4.min.js"></script> 
<!-- Library JS -->
<script src="js/lecker_library.js"></script> 

<!-- Theme JS -->
<script src="js/lecker_script.js"></script>


</body>
</html>