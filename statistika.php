<?php include("cpanel-head.php"); ?>

<style>
/* TELO */
.naslov10{width:160px; margin:90px 40px 0 540px; font-family:geomanist; color:#222;}
main{width:700px; min-height:100px; margin:20px 0 70px 260px; position:relative; background:#fff; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
.tabela1, .tabela2, .tabela3{border-collapse:collapse; width:100%; height:150px; border:solid 1px #ccc;}
.tabela1 td, .tabela2 td, .tabela3 td{border-bottom:solid 1px #ccc; vertical-align:middle; text-align:center; background:#fff; font-family:geomanist;}
.tabela1 th, .tabela2 th, .tabela3 th{color:#222; border-bottom:solid 1px #ccc; font-family:geomanist;}

.tabela1{margin-top:50px;}
.tabela1 a{text-decoration:none; font-size:20px;}
.tabela1 a:hover{text-decoration:underline;}
.tabela1 th{width:33%; background:#fff;}

.tabela2{width:100%; margin:30px auto;}

.tabela3{height:60px; width:100%;}

main form{width:300px; height:40px; position:absolute; left:10px;}
main input[type="text"]{width:190px; height:40px; font-size:18px; border-radius:15px; padding-left:10px; margin:5px auto; border:solid 2px #aa813d; font-family:geomanist; outline:none;}
main input[type="submit"]{width:100px; height:40px; font-size:18px; border-radius:15px; background:#aa813d; color:#fff; margin:5px 0; border:none; cursor:pointer; font-family:geomanist; outline:none; transition:all 0.5s;}
main input[type="submit"]:hover{color:#222; transition:all 0.5s;}

/* paginacija */
.paginacija{width:500px; height:40px; margin:20px auto 50px calc(50% - 250px); text-align:center;}
.paginacija::after{clear:both; display:table; content:"";}
.paginacija a{display:block; float:left; text-decoration:none; text-align:center; width:40px; height:40px; line-height:40px; font-size:18px; margin:0 2px; background:#222; border-radius:50%; border:none; color:#fff;}
.paginacija a:hover{background:#4e4e4e;}
.strana{float:left; text-align:center; width:40px; height:40px; line-height:40px; font-size:18px; border:none; border-radius:50%; background:#aa813d; color:#fff;}
.paginacijam{display:none;}

@media only screen and (max-width: 480px) {
main{width:100%;}

}	
</style>

<!--TELO-->
<?php
/* PAGINACINA */

$sql="SELECT * FROM namestaj WHERE naziv LIKE '%$naziv%'";
$upit=mysqli_query($conn,$sql);
$brojredova=mysqli_num_rows($upit);

$postrani=10;

$brojstrana=ceil($brojredova / $postrani);

if(empty($_GET["strana"]) or $_GET["strana"]==1) {
$odakle=0; $strana=1;} 
else{$odakle=(($_GET["strana"] - 1)*$postrani); $strana=$_GET["strana"];}
/* PAGINACIJA 1 END */
?>

<h1 class="naslov10">STATISTIKA</h1>

<main>
<form action="<?php $_SERVER['PHP_SELF']?>" method="get">
<input type="text" name="search" placeholder="Proizvod">
<input type="submit" value="Pretraži">
</form>

<table class="tabela1" width="100%" border="1" cellpadding="1" cellspacing="1">
<tr>
<th><a style="color:#222; font-family:geomanist;" href="statistika.php?uslov=WHERE brojkomada > 0">NA STANJU</a></th>
<th><a style="color:#222; font-family:geomanist;" href="statistika.php?uslov=WHERE prodato > 0">PRODATO</a></th>
<th><a style="color:#222; font-family:geomanist;" href="statistika.php?uslov=WHERE brojkomada = 0">NEMA NA STANJU</a></th>
</tr>
</table>

<table class="tabela2" align="center">
<tr>
<th>SLIKA</th><th>GRUPA</th><th>NAZIV</th><th>NA STANJU</th><th>PRODATO</th><th>CENA</th>
</tr>
<?php
if(empty($_GET["uslov"])){$uslov="";} else{
$uslov=$_GET["uslov"];}
if($_GET["search"]==""){$search="";} else{
$search=$_GET["search"];	
$search="WHERE naziv LIKE '%$search%'";}


$sql="SELECT * FROM namestaj $search $uslov ORDER BY id DESC LIMIT $odakle,$postrani";
$upit=mysqli_query($conn,$sql);
while($red=mysqli_fetch_assoc($upit)) { ?>
<tr>
<td width="50" height="50"><img src="<?=$red["slika1"]?>" width="50" height="50"></td>
<td style="color:#777;"><?=$red["grupa"]?></td>
<td style="text-align:left; padding-left:10px; color:#222;"><?=$red["naziv"]?></td>
<td width="100" style="color:#222;"><?=$red["brojkomada"]?></td>
<td width="100" style="color:#222;"><?=$red["prodato"]?></td>
<td width="100" style="color:#cdb737;"><?=number_format($red["cena"],2)?></td>
</tr>

<?php
$ukupno=$red["brojkomada"]*$red["cena"] + $ukupno;
$ukupno2=$red["prodato"]*$red["cena"] + $ukupno2;
?>

<?php } ?>
</table>

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
echo '<a href="'.$_SERVER['PHP_SELF'].'?strana='.$x.'&naziv='.$naziv.'"><<</a>';}	

/* na prethodnu stranu */
if($strana>1){$x=$strana - 1;
echo '<a href="'.$_SERVER['PHP_SELF'].'?strana='.$x.'&naziv='.$naziv.'"><</a>';}	
	
for($x=($strana - $range);$x<(($strana + $range) + 1);$x++){
if($x > 0 and $x<($brojstrana + 1)){
if($strana==$x) { ?>
<div class="strana"><?=$x?></div>
<?php } else {echo '<a href="'.$_SERVER['PHP_SELF'].'?strana='.$x.'&naziv='.$naziv.'">'.$x.'</a>';	
}}}
	
/* na narednu stranu */
if($strana < $brojstrana) {$x=$strana + 1;
echo '<a href="'.$_SERVER['PHP_SELF'].'?strana='.$x.'&naziv='.$naziv.'">></a>';}

/* na poslednju stranu */
if($strana < $brojstrana) {$x=$brojstrana;
echo '<a href="'.$_SERVER['PHP_SELF'].'?strana='.$x.'&naziv='.$naziv.'">>></a>';}
?>
<div style="clear:both;"></div>
</div>
</div>
<!-- PAGINACIJA END -->

<table class="tabela3" cellpadding="1" cellspacing="1">
<tr>
<td style="height:40px; color:#222;">UKUPNO NA STANJU</td>
<td style="color:#ea4c6b;"><?=number_format($ukupno,2)?> <small>RSD</small></td>
<td style="color:#222;">UKUPNO PRODATO</td>
<td style="color:#ea4c6b;"><?=number_format($ukupno2,2)?> <small>RSD</small></td>
</tr>
</table>
</main>

<?php include("cpanel-futer.php"); ?>