<?php
ob_start(); session_start();
$server="mysql443.loopia.se";
$username="aleksaw@w57130";
$password="Aleksawood";
$dbname="woodshop_ga";
$conn=mysqli_connect($server, $username, $password, $dbname);
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="cstyle.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>C PANEL</title>
</head>

<body>

<!--HEAD-->
<header>

<?php 
$sql="SELECT * FROM woodposete WHERE id=1";
$upit=mysqli_query($conn,$sql);
$red=mysqli_fetch_assoc($upit);

$sql="SELECT * FROM woodklijenti";
$upit=mysqli_query($conn,$sql);
$red2=mysqli_num_rows($upit);

$sql="SELECT * FROM woodjednom";
$upit=mysqli_query($conn,$sql);
$red3=mysqli_num_rows($upit);
?>

<administrator>
ADMINISTRATOR
</administrator>

<img src="grafika/admin2.png">

<login>
Aleksa
</login>

<naslov>
C-PANEL
</naslov>

<table class="tabela100">
<tr>
<th>Proizvoda</th>
<th>Poseta</th>
<th>Jedinstvene</th>
</tr>
<tr>
<td><?=$red["posete"]?></td>
<td><?=$red2?></td>
<td><?=$red3?></td>
</tr>







<tr>
<td style="color:#60dd9b; font-size:20px; text-align:left; padding-left:5px; font-family:geomanist;">Broj pregleda proizvoda</td>
<td style="color:#ea5164; font-size:20px; font-weight:bold; font-family:geomanist;"></td>
</tr>
<tr>
<td style="color:#ff961c; font-size:20px; text-align:left; padding-left:5px; font-family:geomanist;">Broj poseta</td>
<td style="color:#ea5164; font-size:20px; font-weight:bold; font-family:geomanist;"></td>
</tr>
<tr>
<td style="color:#ff961c; font-size:20px; text-align:left; padding-left:5px; font-family:geomanist;">Jedinstvena poseta</td>
<td style="color:#ea5164; font-size:20px; font-weight:bold; font-family:geomanist;"></td>
</tr>
</table>

<div style="clear:both;"></div>

</header>

<!--MENI-->
<input type="checkbox" id="meni">
<aside>
<a href="index.php">WOODSTEEL</a>
<a href="cpanel.php">C PANEL</a>
<a href="cpanelunos.php">C PANEL UNOS</a>
<a href="onamaedit.php">O NAMA</a>
<a href="subscribeedit.php">SUBSCRIBE</a>
<a href="naruceno.php">NARUČENO</a>
<a href="isporuceno.php">ISPORUČENO</a>
<a href="naplaceno.php">NAPLAĆENO</a>
<a href="statistika.php">STATISTIKA</a>
</aside>