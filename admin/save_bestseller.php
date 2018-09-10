<?php
/**................................................................
 * ................................................................
 */


session_start();
include('connect.php');
$a = $_POST['title1'];
$b = $_POST['price1'];
$c = $_POST['title2'];
$d = $_POST['price2'];
$e = $_POST['title3'];
$f = $_POST['price3'];
$g = $_POST['title4'];
$h = $_POST['price4'];
$i = $_POST['title5'];
$j = $_POST['price5'];
$k = $_POST['title6'];
$l = $_POST['price6'];

$sql = "update bestseller set title1=\"$a\",price1=\"$b\",title2=\"$c\",price2=\"$d\" 
,title3=\"$e\",price3=\"$f\",title4=\"$g\",price4=\"$h\",title5=\"$i\",price5=\"$j\"
,title6=\"$k\",price6=\"$l\" WHERE id= 1";
$query_update = mysqli_query($db,$sql);

if ($_FILES['file1']['name'] !="") {
$file_name  = strtolower($_FILES['file1']['name']);
$file_ext = substr($file_name, strrpos($file_name, '.'));
$prefix = 'bestseller_'.md5(time()*rand(1, 9999));
$file_name_new = $prefix.$file_ext;
$path = 'uploads/'.$file_name_new;


    /* check if the file uploaded successfully */
    if(@move_uploaded_file($_FILES['file1']['tmp_name'], $path)) {

  //do your write to the database filename and other details   

  // query
		$sql = "update bestseller set file1=\"$file_name_new\" WHERE id= 1";
		$query_update = mysqli_query($db,$sql);

	}

}

if ($_FILES['file2']['name']) {
$file_name  = strtolower($_FILES['file2']['name']);
$file_ext = substr($file_name, strrpos($file_name, '.'));
$prefix = 'bestseller_'.md5(time()*rand(1, 9999));
$file_name_new = $prefix.$file_ext;
$path = 'uploads/'.$file_name_new;


    /* check if the file uploaded successfully */
    if(@move_uploaded_file($_FILES['file2']['tmp_name'], $path)) {

  //do your write to the database filename and other details   

  // query
		$sql = "update bestseller set file2=\"$file_name_new\" WHERE id= 1";
		$query_update = mysqli_query($db,$sql);

	}

}

if ($_FILES['file3']['name']) {
$file_name  = strtolower($_FILES['file3']['name']);
$file_ext = substr($file_name, strrpos($file_name, '.'));
$prefix = 'bestseller_'.md5(time()*rand(1, 9999));
$file_name_new = $prefix.$file_ext;
$path = 'uploads/'.$file_name_new;


    /* check if the file uploaded successfully */
    if(@move_uploaded_file($_FILES['file3']['tmp_name'], $path)) {

  //do your write to the database filename and other details   

  // query
		$sql = "update bestseller set file3=\"$file_name_new\" WHERE id= 1";
		$query_update = mysqli_query($db,$sql);

	}

}

if ($_FILES['file4']['name']) {
$file_name  = strtolower($_FILES['file4']['name']);
$file_ext = substr($file_name, strrpos($file_name, '.'));
$prefix = 'bestseller_'.md5(time()*rand(1, 9999));
$file_name_new = $prefix.$file_ext;
$path = 'uploads/'.$file_name_new;


    /* check if the file uploaded successfully */
    if(@move_uploaded_file($_FILES['file4']['tmp_name'], $path)) {

  //do your write to the database filename and other details   

  // query
		$sql = "update bestseller set file4=\"$file_name_new\" WHERE id= 1";
		$query_update = mysqli_query($db,$sql);

	}

}

if ($_FILES['file5']['name']) {
$file_name  = strtolower($_FILES['file5']['name']);
$file_ext = substr($file_name, strrpos($file_name, '.'));
$prefix = 'bestseller_'.md5(time()*rand(1, 9999));
$file_name_new = $prefix.$file_ext;
$path = 'uploads/'.$file_name_new;


    /* check if the file uploaded successfully */
    if(@move_uploaded_file($_FILES['file5']['tmp_name'], $path)) {

  //do your write to the database filename and other details   

  // query
		$sql = "update bestseller set file5=\"$file_name_new\" WHERE id= 1";
		$query_update = mysqli_query($db,$sql);

	}

}

if ($_FILES['file6']['name']) {
$file_name  = strtolower($_FILES['file6']['name']);
$file_ext = substr($file_name, strrpos($file_name, '.'));
$prefix = 'bestseller_'.md5(time()*rand(1, 9999));
$file_name_new = $prefix.$file_ext;
$path = 'uploads/'.$file_name_new;


    /* check if the file uploaded successfully */
    if(@move_uploaded_file($_FILES['file6']['tmp_name'], $path)) {

  //do your write to the database filename and other details   

  // query
		$sql = "update bestseller set file6=\"$file_name_new\" WHERE id= 1";
		$query_update = mysqli_query($db,$sql);

	}

}

//


header("location: bestseller.php");


?>