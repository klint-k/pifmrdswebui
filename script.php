 <?php
$ps = $_GET["ps"];
$freq = $_GET["freq"];
$rt = $_GET["rt"];
$audio=$_GET["audio"];
$output=shell_exec("sudo ./pi_fm_rds -freq $freq -audio $audio -ps $ps -rt $rt");
echo "<pre>$output</pre>";

?> 
