<?php
/**................................................................
 * ................................................................
*/
                        
session_start();
include('connect.php');

$a = $_POST['site_name'];
$b = $_POST['site_title'];
$c = $_POST['email'];
$d = $_POST['site_desc'];
$e = $_POST['site_keyword'];
$f = $_POST['google_code'];
$g = $_POST['street'];
$h = $_POST['city'];
$i = $_POST['country'];
$j = $_POST['phone'];
$k = $_POST['facebook'];
$l = $_POST['twitter'];
$m = $_POST['linkedin'];
$n = $_POST['status'];
// query

		$sql = "update settings set site_name=\"$a\",site_title=\"$b\",email=\"$c\",
		site_desc=\"$d\",site_keyword=\"$e\",google_code=\"$f\",street=\"$g\",
		city=\"$h\",country=\"$i\",phone=\"$j\",facebook=\"$k\",twitter=\"$l\",
		linkedin=\"$m\",status=\"$n\" WHERE id= 1";

		$query_update = mysqli_query($db,$sql);

//$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d, ':e'=>$e,':f'=>$f,':g'=>$g,':h'=>$h,':i'=>$i, ':j'=>$j, ':k'=>$k, ':l'=>$l));
echo "<script>location.href='site_settings.php';</script>";

?>