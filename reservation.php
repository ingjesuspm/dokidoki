<?php
session_start();
$a = $_POST['Date'];
$b = $_POST['Time'];
$c = $_POST['Party'];
$d = $_POST['Name'];
$e = $_POST['Email'];
$f = $_POST['Phone'];
$g = $_POST['DaMessagete'];


$from = "info@marketingfractal.com.ve";
$to = "lienard.toro@gmail.com";
$subject = "A Reservation has been sent from DokiDoki website";
$message = '
<html>
<head>
<title></title>
</head>
<body>
<p>A Reservation has been sent from DokiDoki website:</p>
<p>Date: ' . $a .'</p>
<p>Time: ' . $b . '</p>
<p>Party: ' . $c .'</p>
<p>Name: ' . $d .'</p>
<p>Email: ' . $e .'</p>
<p>Phone: ' . $f .'</p>
<p>Message: ' . $g .'</p>
</body>
</html>
';
                $headers = "Content-type: text/html\r\n";
                mail($to,$subject,$message, $headers);            
        $message = "Reservation has been sent, Thanks!";
          echo "<script type='text/javascript'>alert('$message');</script>";
		  echo "<script language=javascript>window.history.go(-1);</script>";
?>
