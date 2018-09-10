<?php
/**................................................................
 * ................................................................
 */


session_start();
include('connect.php');

if ($_FILES['file1']['name'] !="") {
$file_name  = strtolower($_FILES['file1']['name']);
$file_ext = substr($file_name, strrpos($file_name, '.'));
$prefix = 'gallery_'.md5(time()*rand(1, 9999));
$file_name_new = $prefix.$file_ext;
$path = 'uploads/'.$file_name_new;


    /* check if the file uploaded successfully */
    if(@move_uploaded_file($_FILES['file1']['tmp_name'], $path)) {

  //do your write to the database filename and other details   

  // query
		$sql = "update gallery set file1=\"$file_name_new\" WHERE id= 1";
		$query_update = mysqli_query($db,$sql);

	}

}

if ($_FILES['file2']['name']) {
$file_name  = strtolower($_FILES['file2']['name']);
$file_ext = substr($file_name, strrpos($file_name, '.'));
$prefix = 'gallery_'.md5(time()*rand(1, 9999));
$file_name_new = $prefix.$file_ext;
$path = 'uploads/'.$file_name_new;


    /* check if the file uploaded successfully */
    if(@move_uploaded_file($_FILES['file2']['tmp_name'], $path)) {

  //do your write to the database filename and other details   

  // query
		$sql = "update gallery set file2=\"$file_name_new\" WHERE id= 1";
		$query_update = mysqli_query($db,$sql);

	}

}

if ($_FILES['file3']['name']) {
$file_name  = strtolower($_FILES['file3']['name']);
$file_ext = substr($file_name, strrpos($file_name, '.'));
$prefix = 'gallery_'.md5(time()*rand(1, 9999));
$file_name_new = $prefix.$file_ext;
$path = 'uploads/'.$file_name_new;


    /* check if the file uploaded successfully */
    if(@move_uploaded_file($_FILES['file3']['tmp_name'], $path)) {

  //do your write to the database filename and other details   

  // query
		$sql = "update gallery set file3=\"$file_name_new\" WHERE id= 1";
		$query_update = mysqli_query($db,$sql);

	}

}

//


header("location: gallery.php");


?>