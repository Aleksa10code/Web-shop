<?php
session_start();
$server="s369.loopia.se";
$username="wood@w61685";
$password="aleksawood4";
$dbname="woodshop_ga";
$conn=mysqli_connect($server, $username, $password, $dbname);

if(isset($_SESSION['username']) and $_SESSION['username'] == "woodshop2021"){}
else
{
if(isset($_COOKIE["zapamti"])){
$_SESSION['username'] == "woodshop2021"; header("Location: cpanel.php");}
else{header("Location: login.php");}}
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
<?=$_SESSION['username']?>
</login>

<naslov>
C-PANEL
</naslov>

<style>
.thead{float:left; width:400px; line-height:25px; margin:0; padding:0; font-family:geomanist;}
.thead th{font-size:14px; font-weight:400; height:20px; padding:0;}
.thead td{font-size:18px; font-weight:bold; height:20px; color:#fff; padding:0; text-align:center;}
</style>

<table class="thead">
<tr>
<th style="color:#cff540;">Proizvoda</th>
<th style="color:#f29d00;">Poseta</th>
<th style="color:#cd6464;">Jedinstvene</th>
</tr>
<tr>
<td><?=$red["posete"]?></td>
<td><?=$red2?></td>
<td><?=$red3?></td>
</tr>
</table>

<div style="clear:both;"></div>

</header>

<!--MENI-->
<aside>
<a href="index.php" target="new" style="height:100px; background:#1a1a1a; position:relative;"><img src="grafika/logo.png" width="200px" height="45" style="position:absolute; top:23px; left:16px;" /></a>
<?php if($_SERVER['SCRIPT_NAME']=="/cpanel.php"){$bg1="color:#aa813d;";} ?>
<a href="cpanel.php"><img src="grafika/home.png" style="position:absolute; top:14px; left:15px;"><span style="position:absolute; padding:0; top:0; left:50px; <?=$bg1?>">C PANEL</span></a>
<?php if($_SERVER['SCRIPT_NAME']=="/cpanelunos.php"){$bg2="color:#aa813d;";} ?>
<a href="cpanelunos.php"><img src="grafika/note.png" style="position:absolute; top:14px; left:15px;"><span style="position:absolute; padding:0; top:0; left:50px; <?=$bg2?>">C PANEL UNOS</span></a>
<?php if($_SERVER['SCRIPT_NAME']=="/onamaedit.php"){$bg3="color:#aa813d;";} ?>
<a href="onamaedit.php"><img src="grafika/contact.png" style="position:absolute; top:14px; left:15px;"><span style="position:absolute; padding:0; top:0; left:50px; <?=$bg3?>">KONTAKT</span></a>
<?php if($_SERVER['SCRIPT_NAME']=="/subscribeedit.php"){$bg4="color:#aa813d;";} ?>
<a href="subscribeedit.php"><img src="grafika/subscribe.png" style="position:absolute; top:14px; left:15px;"><span style="position:absolute; padding:0; top:0; left:50px; <?=$bg4?>">SUBSCRIBE</span></a>
<?php if($_SERVER['SCRIPT_NAME']=="/naruceno.php"){$bg5="color:#aa813d;";} ?>
<a href="naruceno.php"><img src="grafika/cart.png" style="position:absolute; top:14px; left:15px;"><span style="position:absolute; padding:0; top:0; left:50px; <?=$bg5?>">NARUČENO</span></a>
<?php if($_SERVER['SCRIPT_NAME']=="/isporuceno.php"){$bg6="color:#aa813d;";} ?>
<a href="isporuceno.php"><img src="grafika/naplaceno.png" style="position:absolute; top:14px; left:15px;"><span style="position:absolute; padding:0; top:0; left:50px; <?=$bg6?>">ISPORUČENO</span></a>
<?php if($_SERVER['SCRIPT_NAME']=="/naplaceno.php"){$bg7="color:#aa813d;";} ?>
<a href="naplaceno.php"><img src="grafika/paid.png" style="position:absolute; top:14px; left:15px;"><span style="position:absolute; padding:0; top:0; left:50px; <?=$bg7?>">NAPLAĆENO</span></a>
<?php if($_SERVER['SCRIPT_NAME']=="/statistika.php"){$bg8="color:#aa813d;";} ?>
<a href="statistika.php"><img src="grafika/static.png" style="position:absolute; top:14px; left:15px;"><span style="position:absolute; padding:0; top:0; left:50px; <?=$bg8?>">STATISTIKA</span></a>
<a href="logout.php" style="position:relative;"><img src="grafika/login.png" style="position:absolute; top:14px; left:15px;"><span style="position:absolute; padding:0; top:0; left:50px;">LOGOUT</span></a>
</aside>