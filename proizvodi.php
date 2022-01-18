<?php include("head.php"); ?>

<style>
/* TELO */
.naslov{width:1000px; height:150px; line-height:150px; margin:0 auto; font-size:36px; font-family:geomanist; text-align:center; font-weight:bold; color:#222;}

.telo{width:1200px; min-height:100px; margin:0 auto;}
.telo::after{clear:both; display:table; content:"";}
.telo a{width:364px; height:400px; display:block; float:left; text-decoration:none; margin:17.50px;  overflow:hidden;}
.telo a:hover{opacity:0.7;}
.telo img{width:365px; height:250px; display:block; object-fit:cover;}
.telo header{width:365px; height:50px; margin:0; padding:30px 0 0 0; font-size:15px; line-height:16px; font-weight:600; color:#222; font-family:geomanist;}
.telo main{width:365px; height:50px; margin:0; font-size:14px; line-height:14px; letter-spacing:2px; font-weight:lighter; padding:10px 0 0 0; color:#222; font-family:geomanist;}
.telo footer{width:365px; height:50px; margin:0; padding:0; color:#222; font-weight:700; font-size:17px; font-family:geomanist;}

/* paginacija */
.paginacija{width:500px; height:40px; margin:20px auto 50px calc(50% - 250px); text-align:center;}
.paginacija::after{clear:both; display:table; content:"";}
.paginacija a{display:block; float:left; text-decoration:none; text-align:center; width:40px; height:40px; line-height:40px; font-size:18px; margin:0 2px; background:#222; border-radius:50%; border:none; color:#fff;}
.paginacija a:hover{background:#4e4e4e;}
.strana{float:left; text-align:center; width:40px; height:40px; line-height:40px; font-size:18px; border:none; border-radius:50%; background:#f90; color:#fff;}
.paginacijam{display:none;}

/* MOBILNI TELEFON */
@media only screen and (max-width: 480px) {
/* TELO */
.naslov{width:90%; margin:5%; line-height:80px;}
.telo{width:100%;}
.telo a{width:90%; margin:5%;}
.telo img{width:100%;}
.telo header{width:100%;}
.telo main{width:100%;}
.telo footer{width:100%;}
.paginacija{width:100%; margin:70px auto;}
.paginacija{display:none;}	

.paginacijam{width:100%; height:40px; margin:20px 0 30px 0; display:block;}
.paginacijam::after{clear:both; display:table; content:"";}
.paginacijam a{display:block; float:left; text-decoration:none; text-align:center; width:40px; height:40px; line-height:40px; font-size:18px; margin:0 2px; background:#222; border-radius:50%; border:none; color:#fff;}
.paginacijam a:hover{background:#4e4e4e;}
}
</style>
<!-- TELO -->
<div style="width:100%;">
<div class="naslov">
KOMPLETNA LISTA PROIZVODA
</div>
</div>

<div style="min-height:100px;">
<div class="telo">

<?php
$sql="SELECT * FROM namestaj";
$upit=mysqli_query($conn,$sql);
$brojredova=mysqli_num_rows($upit);

$postrani=3;

$brojstrana=ceil($brojredova / $postrani);

if(empty($_GET["strana"]) or $_GET["strana"]==1) {
$odakle=0; $strana=1;} 
else{$odakle=(($_GET["strana"] - 1)*$postrani); $strana=$_GET["strana"];}

$sql="SELECT * FROM namestaj WHERE brojkomada>0 ORDER BY id DESC LIMIT $odakle,$postrani";
$upit=mysqli_query($conn,$sql);
while($red=mysqli_fetch_assoc($upit)) { ?>

<a href="prikaz.php?id=<?=$red["id"]?>">
<img src="<?=$red["slika1"]?>">
<header><?=$red["naziv"]?></header>
<main><?=$red["podnaziv"]?></main>
<footer><?=number_format($red["cena"], 2)?> RSD</footer>
</a>

<?php } ?>
</div>
</div>

<!-- PAGINACIJA -->
<div class="paginacija">
<?php
if($_GET["strana"]==1 or $_GET["strana"]==$brojstrana)
{$width = 264;} else {$width = 484;}
?>

<div style="width:<?=$width?>px; margin:0 auto 0 auto;">
<?php
$range=3;
/* na prvu stranu */
if($strana!==1){$x=1;
echo '<a href="'.$_SERVER['PHP_SELF'].'?strana='.$x.'"><<</a>';}	

/* na prethodnu stranu */
if($strana>1){$x=$strana - 1;
echo '<a href="'.$_SERVER['PHP_SELF'].'?strana='.$x.'"><</a>';}	
	
for($x=($strana - $range);$x<(($strana + $range) + 1);$x++){
if($x > 0 and $x<($brojstrana + 1)){
if($strana==$x) { ?>
<div class="strana"><?=$x?></div>
<?php } else {echo '<a href="'.$_SERVER['PHP_SELF'].'?strana='.$x.'">'.$x.'</a>';	
}}}
	
/* na narednu stranu */
if($strana < $brojstrana) {$x=$strana + 1;
echo '<a href="'.$_SERVER['PHP_SELF'].'?strana='.$x.'">></a>';}

/* na poslednju stranu */
if($strana < $brojstrana) {$x=$brojstrana;
echo '<a href="'.$_SERVER['PHP_SELF'].'?strana='.$x.'">>></a>';}
?>
<div style="clear:both;"></div>
</div>
</div>
<!-- PAGINACIJA END -->

<!-- PAGINACIJAM -->
<div class="paginacijam">
<?php
if($_GET["strana"]==1 or $_GET["strana"]==$brojstrana)
{$width = 176;} else {$width = 308;}
?>

<div style="width:<?=$width?>px; margin:0 auto 0 auto;">
<?php
$range=1;
/* na prvu stranu */
if($strana!==1){$x=1;
echo '<a href="'.$_SERVER['PHP_SELF'].'?strana='.$x.'"><<</a>';}	

/* na prethodnu stranu */
if($strana>1){$x=$strana - 1;
echo '<a href="'.$_SERVER['PHP_SELF'].'?strana='.$x.'"><</a>';}	
	
for($x=($strana - $range);$x<(($strana + $range) + 1);$x++){
if($x > 0 and $x<($brojstrana + 1)){
if($strana==$x) { ?>
<div class="strana"><?=$x?></div>
<?php } else {echo '<a href="'.$_SERVER['PHP_SELF'].'?strana='.$x.'">'.$x.'</a>';	
}}}
	
/* na narednu stranu */
if($strana < $brojstrana) {$x=$strana + 1;
echo '<a href="'.$_SERVER['PHP_SELF'].'?strana='.$x.'">></a>';}

/* na poslednju stranu */
if($strana < $brojstrana) {$x=$brojstrana;
echo '<a href="'.$_SERVER['PHP_SELF'].'?strana='.$x.'">>></a>';}
?>
<div style="clear:both;"></div>

</div>
</div>
<!-- PAGINACIJAM END -->

<!--TELO END-->
<?php include("futer.php"); ?>