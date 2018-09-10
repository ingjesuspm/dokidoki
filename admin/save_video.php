<?php
/**................................................................
 * ................................................................
 */


session_start();
include('connect.php');
$a = $_POST['video'];

// query

// query

		$sql = "update video set video=\"$a\" WHERE id= 1";
		$query_update = mysqli_query($db,$sql);

		header("location: video.php");


//


?>