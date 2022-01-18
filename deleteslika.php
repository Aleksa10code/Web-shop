<?php
session_start();
include("connect.php"); 

$id=$_GET["id"];
$slika=$_GET["slika"];
$no=$_GET["no"];

$sql="UPDATE namestaj SET ".$no."='' WHERE id='$id'";
mysqli_query($conn,$sql);

unlink($slika);

header("Location: editslike.php?id=$id");
?>

