<?php
ob_start();
include("connect.php");
$id=$_GET["id"];

$sql="SELECT * FROM namestaj WHERE id='$id' ";
$upit=mysqli_query($conn,$sql);
$red=mysqli_fetch_assoc($upit);
unlink($red["slika1"]);
unlink($red["slika2"]);
unlink($red["slika3"]);
unlink($red["slika4"]);
unlink($red["slika5"]);
unlink($red["slika6"]);
unlink($red["slika7"]);
unlink($red["slika8"]);
unlink($red["slika9"]);
unlink($red["slika10"]);

$sql="DELETE FROM namestaj WHERE id='$id' ";
mysqli_query($conn,$sql);
header("Location: cpanel.php");
?>