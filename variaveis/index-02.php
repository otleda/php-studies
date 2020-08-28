<?php
$name = (string)$_GET["myName"];
$age = (int)$_GET["myAge"];

$ip = $_SERVER["REMOTE_ADDR"];

echo $ip;
var_dump($age);
?>