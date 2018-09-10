<?php
/**................................................................
 * ................................................................
 */

session_start();
include('connect.php');

$a = $_POST['header_ads'];
$b = $_POST['side_ads'];
$c = $_POST['footer_ads'];

// query

$sql = "update table_ads set header_ads=\"$a\",side_ads=\"$b\",footer_ads=\"$c\" WHERE id= 1";
$query_update = mysqli_query($db,$sql);
header("location: ads_settings.php");


?>