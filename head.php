<?php
session_start(); 
include("connect.php");

/* jedinstvene posete */
if(!isset($_COOKIE["jednom"])){
$uni=uniqid();
setcookie("jednom",$uni,time() + (86400 * 24 * 365),"/");
$sql="INSERT INTO woodjednom (jednom) VALUES ('$uni')";
mysqli_query($conn,$sql);}

/* broj klijenata cim mu obrisemo sesiju opet se racuna kao posetilac */
$session=session_id();
$sql="SELECT * FROM woodklijenti WHERE session='$session' ";
$upit=mysqli_query($conn,$sql);
$red=mysqli_fetch_assoc($upit);

if($session==$red["session"]) {} else {
$sql="INSERT INTO woodklijenti (session) VALUES ('$session')";
mysqli_query($conn,$sql);}

$sql="SELECT * FROM woodklijenti";
$upit=mysqli_query($conn,$sql);
$klijenti=mysqli_num_rows($upit);

/* broj otvorenih strana na sajtu */
$sql7="SELECT * FROM woodposete WHERE id=1";
$upit7=mysqli_query($conn,$sql7);
$red7=mysqli_fetch_assoc($upit7);
$posete=$red7["posete"] + 1; 
$broj="UPDATE woodposete SET posete='$posete' WHERE id=1";
mysqli_query($conn,$broj);
?>
<!-- COOKIE -->
<?php
if(!isset($_COOKIE["saglasnost"]))
{ 
echo '<div class="nosi"><div class="cookie1">
<h4 class="cookie2">O kukijima na ovom sajtu</h4>
<p class="cookie3">Ova stranica koristi kolačiće za pružanje usluga u skladu sa Politikom privatnosti. Nastavkom korišćenja našeg sajta, slažete se sa upotrebom kolačića.</p>
<div class="nosicookie">
<a class="cookie4" href="'.$_SERVER['PHP_SELF'].'?odluka=da">Slažem se</a>
<a class="cookie5" href="'.$_SERVER['PHP_SELF'].'?odluka=ne">Ne slažem se</a>
</div></div></div>';

if(empty($_GET["odluka"])){} else{
if($_GET["odluka"]=="da") {setcookie("saglasnost", "da", time() + (86400 * 30), "/"); echo '<meta http-equiv="refresh" content="0; url='.$_SERVER["PHP_SELF"].'">';}
if($_GET["odluka"]=="ne") {setcookie("saglasnost", "ne", time() + (86400 * 30), "/");  echo '<meta http-equiv="refresh" content="0; url='.$_SERVER["PHP_SELF"].'">';}
}}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="theme-color" content="#971243">	
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Proizvodnja namestaja">
<meta name="keywords" content="namestaj, drvo, metal, proizvodnja, webshop, trpezarija, stolovi, stolice, hrast, orah, rucno">
<meta name="robots" content="all, index, follow" />
<meta name="googlebot" content="all, index, follow" />
<meta name="revisit-after" content="1 days" />
<meta name="location" content="RS">
<meta name="author" content="responsive5.com">
<link rel="icon" href="grafika/favicon.ico">
<link href="style.css" rel="stylesheet">
<title>WEB SHOP</title>
</head>

<body>
<!--HEADER-->
<div style="background:#262525; width:100%; position:fixed; top:0; z-index:5;">
<header>

<!--LOGO-->
<a href="index.php">
<img src="grafika/logo.png">
</a>
<!--LOGO END-->

<!--BURG-->
<input type="checkbox" id="burg">
<div class="burg">
<label for="burg">
<div></div>
<div></div>
<div></div>
</label>
</div>
<!--BURG END-->

<!--MENI-->
<input type="checkbox" id="nav">
<nav>
<a href="index.php">Početna</a>
<input type="checkbox" id="art">
<input type="checkbox" id="art2">
<a href="proizvodi.php"><label for="art2" class="open2" style="cursor:pointer;">Proizvodi</label></a>
<article>
<?php
$sql="SELECT * FROM namestaj GROUP BY grupa";
$upit=mysqli_query($conn,$sql);
while($red=mysqli_fetch_assoc($upit)) { ?>

<a href="grupe.php?grupa=<?=$red["grupa"]?>"><?=$red["grupa"]?></a>

<?php } ?>
</article>
<a href="kontakt.php">Kontakt</a>
<a href="zavrsnaobrada.php">Završna obrada</a>
<a href="onama.php">O nama</a>
<a href="rokisporuke.php">Rok isporuke</a>	
</nav>
<!--MENI END-->

<!--KESA-->
<?php
$niz=explode("-", $_COOKIE["korpa"]);
$broj=count($niz) - 1;
if($broj>0){echo '<a href="korpa.php" class="kesa"><img src="grafika/kesaw.png"><span>'.$broj.'</span></a>';}
else{echo '<a href="korpa.php" class="kesa"><img src="grafika/kesaw.png"></a>';}
?>
<!--KESA END-->

<!--LISTA ZELJA-->
<?php
$niz=explode("-", $_COOKIE["listazelja"]);
$broj=count($niz) - 1;
if($broj>0){echo '<a href="listazelja.php" class="listazelja"><img src="grafika/srce40w.png"><span>'.$broj.'</span></a>';} else{echo '<a href="listazelja.php" class="listazelja"><img src="grafika/srce40w.png"></a>';}
?>
<!--LISTA ZELJA END-->

<!--LUPA-->
<form class="form" action="grupe2.php" method="post">
<label for="search" class="search1"><img src="grafika/lupaw.png"></label>
<input type="checkbox" id="search">
<main>
<label for="search" class="search2"><img src="grafika/iconw.png"></label>
<input type="search" name="search" placeholder="Pretrazi sajt..">
<input type="image" src="grafika/lupaw.png">
</main>
</form>
<!--LUPA END-->

</header>
</div>
<!--HEADER END-->
