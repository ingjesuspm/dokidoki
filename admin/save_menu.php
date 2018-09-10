<?php
/**................................................................
 * ................................................................
 */


session_start();
include('connect.php');
$a = $_POST['title1'];
$b = $_POST['product1'];
$c = $_POST['price1'];
$d = $_POST['detail1'];
$e = $_POST['product2'];
$f = $_POST['price2'];
$g = $_POST['detail2'];
$h = $_POST['product3'];
$i = $_POST['price3'];
$j = $_POST['detail3'];
$k = $_POST['title2'];
$l = $_POST['product4'];
$m = $_POST['price4'];
$n = $_POST['detail4'];
$o = $_POST['product5'];
$p = $_POST['price5'];
$q = $_POST['detail5'];
$r = $_POST['product6'];
$s = $_POST['price6'];
$t = $_POST['detail6'];


$sql = "update menu set title1=\"$a\",product1=\"$b\",price1=\"$c\",detail1=\"$d\" 
,product2=\"$e\",price2=\"$f\",detail2=\"$g\",product3=\"$h\",price3=\"$i\",detail3=\"$j\"
,title2=\"$k\",product4=\"$l\",price4=\"$m\",detail4=\"$n\",product5=\"$o\"
,price5=\"$p\",detail5=\"$q\",product6=\"$r\",price6=\"$s\",detail6=\"$t\" WHERE id= 1";
$query_update = mysqli_query($db,$sql);

if ($_FILES['file1']['name'] !="") {
$file_name  = strtolower($_FILES['file1']['name']);
$file_ext = substr($file_name, strrpos($file_name, '.'));
$prefix = 'menu_'.md5(time()*rand(1, 9999));
$file_name_new = $prefix.$file_ext;
$path = 'uploads/'.$file_name_new;


    /* check if the file uploaded successfully */
    if(@move_uploaded_file($_FILES['file1']['tmp_name'], $path)) {

  //do your write to the database filename and other details   

  // query
		$sql = "update menu set file1=\"$file_name_new\" WHERE id= 1";
		$query_update = mysqli_query($db,$sql);

	}

}

if ($_FILES['file2']['name']) {
$file_name  = strtolower($_FILES['file2']['name']);
$file_ext = substr($file_name, strrpos($file_name, '.'));
$prefix = 'menu_'.md5(time()*rand(1, 9999));
$file_name_new = $prefix.$file_ext;
$path = 'uploads/'.$file_name_new;


    /* check if the file uploaded successfully */
    if(@move_uploaded_file($_FILES['file2']['tmp_name'], $path)) {

  //do your write to the database filename and other details   

  // query
		$sql = "update menu set file2=\"$file_name_new\" WHERE id= 1";
		$query_update = mysqli_query($db,$sql);

	}

}

//


header("location: menu.php");


?>