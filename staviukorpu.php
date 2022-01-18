<?php
$id=$_POST["id"];
$komada=$_POST["komada"];
$cena=$_POST["cena"];
$cookie=$_COOKIE["korpa"];

$vrednost=$id."*".$komada."*".$cena."-".$cookie;
setcookie("korpa",$vrednost, time() + 3600 * 24 * 30, "/");
header("Location: korpa.php");
?>