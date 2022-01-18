<?php
session_start();
include("connect.php");
$id=$_POST["id"];
$grupa=$_POST["grupa"];
$naziv=$_POST["naziv"];
$podnaziv=$_POST["podnaziv"];
$cena=$_POST["cena"];
$brojkomada=$_POST["brojkomada"];
$opis=$_POST["opis"];

$sql="SELECT * FROM namestaj WHERE id='$id'";
$upit=mysqli_query($conn,$sql);
$red=mysqli_fetch_assoc($upit);

$sql="UPDATE namestaj SET grupa='$grupa', naziv='$naziv', podnaziv='$podnaziv', cena='$cena', brojkomada='$brojkomada', opis='$opis' WHERE id='$id' ";
mysqli_query($conn,$sql);
header("Location: edit.php?id=$id");
?>