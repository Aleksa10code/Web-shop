<?php
ob_start();

$x=$_GET["x"];

$niz=explode("-", $_COOKIE["korpa"]);

$find=$niz[$x]."-";
$replace="";
$string=$_COOKIE["korpa"];

$cookie=str_replace($find, $replace, $string);
setcookie("korpa", $cookie, time() + (3600 * 24 * 30), "/");
header("Location: korpa.php");
?>