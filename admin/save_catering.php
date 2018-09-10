<?php
/**................................................................
 * ................................................................
 */


session_start();
include('connect.php');
$a = $_POST['label'];

// query

$file_name  = strtolower($_FILES['file']['name']);
$file_ext = substr($file_name, strrpos($file_name, '.'));
$prefix = 'catering_'.md5(time()*rand(1, 9999));
$file_name_new = $prefix.$file_ext;
$path = 'uploads/'.$file_name_new;


    /* check if the file uploaded successfully */
    if(@move_uploaded_file($_FILES['file']['tmp_name'], $path)) {

  //do your write to the database filename and other details   
// query

		$sql = "update catering set label=\"$a\",file=\"$file_name_new\" WHERE id= 1";
		$query_update = mysqli_query($db,$sql);

		header("location: catering.php");
    }


//

header("location: catering.php");


?>