<?php
ob_start();
$id=$_GET["id"];
$cookie=$_COOKIE["listazelja"];

$vrednost=$id."-".$cookie;
setcookie("listazelja",$vrednost, time() + 3600 *24 * 30, "/");
header("Location: listazelja.php");
?>