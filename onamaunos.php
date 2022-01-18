<?php
include("connect.php");
$id=$_GET['id'];

$ime=$_POST["ime"];
$telefon=$_POST["telefon"];
$email=$_POST["email"];
$tekst=$_POST["tekst"];

$sql="INSERT INTO woodkontakt (ime, telefon, email, tekst) VALUES ('$ime', '$telefon', '$email', '$tekst')";
mysqli_query($conn,$sql);
header("Location: index.php");
?>