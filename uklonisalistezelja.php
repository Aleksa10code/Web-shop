<?php
ob_start();

$x=$_GET["x"];

$niz=explode("-", $_COOKIE["listazelja"]);

$find=$niz[$x]."-";
$replace="";
$string=$_COOKIE["listazelja"];

$cookie=str_replace($find, $replace, $string);
setcookie("listazelja", $cookie, time() + 3600*24*30, "/");
header("Location: listazelja.php");
?>