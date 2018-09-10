<?php
/**................................................................
 * ................................................................
 */


session_start();
include('connect.php');
$a = $_POST['product1'];
$b = $_POST['price1'];
$c = $_POST['title1'];
$d = $_POST['composition1'];
$e = $_POST['product2'];
$f = $_POST['price2'];
$g = $_POST['title2'];
$h = $_POST['composition2'];
$i = $_POST['product3'];
$j = $_POST['price3'];
$k = $_POST['title3'];
$l = $_POST['composition3'];


$sql = "update slider set product1=\"$a\",price1=\"$b\",title1=\"$c\",composition1=\"$d\" 
,product2=\"$e\",price2=\"$f\",title2=\"$g\",composition2=\"$h\",product3=\"$i\",price3=\"$j\"
,title3=\"$k\",composition3=\"$l\" WHERE id= 1";
$query_update = mysqli_query($db,$sql);

if ($_FILES['file1']['name'] !="") {
$file_name  = strtolower($_FILES['file1']['name']);
$file_ext = substr($file_name, strrpos($file_name, '.'));
$prefix = 'slider_'.md5(time()*rand(1, 9999));
$file_name_new = $prefix.$file_ext;
$path = 'uploads/'.$file_name_new;


    /* check if the file uploaded successfully */
    if(@move_uploaded_file($_FILES['file1']['tmp_name'], $path)) {

  //do your write to the database filename and other details   

  // query
		$sql = "update slider set file1=\"$file_name_new\" WHERE id= 1";
		$query_update = mysqli_query($db,$sql);

	}

}

if ($_FILES['file2']['name']) {
$file_name  = strtolower($_FILES['file2']['name']);
$file_ext = substr($file_name, strrpos($file_name, '.'));
$prefix = 'slider_'.md5(time()*rand(1, 9999));
$file_name_new = $prefix.$file_ext;
$path = 'uploads/'.$file_name_new;


    /* check if the file uploaded successfully */
    if(@move_uploaded_file($_FILES['file2']['tmp_name'], $path)) {

  //do your write to the database filename and other details   

  // query
		$sql = "update slider set file2=\"$file_name_new\" WHERE id= 1";
		$query_update = mysqli_query($db,$sql);

	}

}

if ($_FILES['file3']['name']) {
$file_name  = strtolower($_FILES['file3']['name']);
$file_ext = substr($file_name, strrpos($file_name, '.'));
$prefix = 'slider_'.md5(time()*rand(1, 9999));
$file_name_new = $prefix.$file_ext;
$path = 'uploads/'.$file_name_new;


    /* check if the file uploaded successfully */
    if(@move_uploaded_file($_FILES['file3']['tmp_name'], $path)) {

  //do your write to the database filename and other details   

  // query
		$sql = "update slider set file3=\"$file_name_new\" WHERE id= 1";
		$query_update = mysqli_query($db,$sql);

	}

}

//


header("location: slider.php");


?>