<?php
/**................................................................
 * ................................................................
 */


session_start();
session_destroy();
//mysqli_close($db);
header("location: login.php");
?>