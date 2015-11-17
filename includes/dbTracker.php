<?php

$ip         = $_SERVER["REMOTE_ADDR"];
$browser    = $_SERVER["HTTP_USER_AGENT"];
$unixTime   = time();
$date       = gmdate("Y-m-d H:i:s", $unixTime);
$page       = $_SERVER["SCRIPT_NAME"];

include('config.php');

$browser = mysql_real_escape_string($browser);
$sql = "INSERT INTO hits (ipaddress,dateHit,browser,page) VALUES ('$ip','$date','$browser','$page')";
//die($sql);
mysql_query($sql) or die(mysql_error());

include('closeDb.php');

?>
