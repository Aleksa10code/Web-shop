<?php include("head.php"); ?>

<style>
.naslov2{width:1200px; text-align:center; margin:180px auto 50px auto; font-family:geomanist; font-size:30px;}
.lista2{width:1200px; min-height:100px; margin:20px auto;}
.lista2::after{clear:both; display:table; content:"";}

.nosiwish2{width:260px; height:130px; float:left; border:solid 1px #ccc; margin:18px; overflow:hidden;}
.nosiwish2::after{clear:both; display:table; content:"";}
.wish2{width:128px; height:130px; float:left;}
.wish2 img{width:100%; height:100%; object-fit:cover;}

.podaci{width:130px; float:left;}
.naziv2{width:100%; height:50px; line-height:17px; padding:10px 0 0 10px; font-family:geomanist; font-size:15px;}
.cena2{width:100%; height:50px; line-height:15px; padding:10px 0 0 10px; font-family:geomanist; font-size:14px;}
.komada2{width:100%; height:30px; font-size:16px; padding:3px 0 0 10px;}

.nosiukupno{width:1200px; margin:40px auto;}
.nosiukupno::after{clear:both; display:table; content:"";}
.prazno1{width:30%; height:40px; float:left;}
.prazno2{width:52%; height:40px; float:left;}
.ukupno{width:18%; height:40px; line-height:40px; padding-right:5px; font-size:18px; font-family:geomanist; border-bottom:solid 1px #f00; text-align:right; float:left;}

.vreme{width:1200px; height:30px; line-height:30px; font-size:18px; text-align:right; padding-right:5px; background:#1a1a1a; color:#fff; font-family:geomanist;}

@media only screen and (max-width: 480px){
.naslov2{width:100%; line-height:45px;}
.lista2{width:100%;}
.nosiwish2{width:100%; margin:20px 0; overflow:hidden;}
.wish2{width:38%;}
.podaci{width:60%;}
.nosiukupno{width:100%; margin:60px 0;}
.prazno1{display:none;}
.prazno2{display:none;}
.ukupno{width:100%; padding-right:15px;}
.vreme{width:100%;}	
}

</style>


<h2 class="naslov2">PREGLED VAŠE KUPOVINE</h2>
<div class="lista2">
<?php
$uid=$_COOKIE["woodshopuser"];
$sqlu="SELECT * FROM woodkorpa WHERE woodshopuser='$uid' ORDER BY id DESC ";
$upitu=mysqli_query($conn,$sqlu);
while($redu=mysqli_fetch_assoc($upitu)){
$cookie=$redu["korpa"];
$ukupno=$redu["ukupno"];

$niz=explode("-", $cookie);
$broj=count($niz) - 1;
?>

<div class="vreme"><?=$redu["naruceno"]?></div>

<?php
for($x=0;$x<$broj;$x++){
$exp=explode("*", $niz[$x]);
$id=$exp[0];
$komada=$exp[1];
$cena=$exp[2];	
$sql="SELECT * FROM namestaj WHERE id='$id'";	
$upit=mysqli_query($conn,$sql);	
$red=mysqli_fetch_assoc($upit);
?>

<!--KONTEJNER ZA PROIZVOD-->
<div class="nosiwish2">
<div class="wish2">
<img src="<?=$red["slika1"]?>" height="100">
</div>
<div class="podaci">
<div class="naziv2"><?=$red["naziv"]?></div>
<div class="cena2"><?=number_format($red["cena"], 2)?> <small>RSD</small></div>
<div class="komada2"><?=$komada?> <small style="font-family:geomanist;">kom.</small></div>
</div>
</div>
<!--KONTEJNER ZA PROIZVOD-->

<!--kraj for petlje-->
<?php } ?>

<div class="nosiukupno">
<div class="prazno1"></div>
<div class="prazno2"></div>
<div class="ukupno">Ukupno: <?=number_format($redu["ukupno"], 2)?> <small>RSD</small></div>
</div>

<!--kraj while petlje-->
<?php } ?>
</div>
<?php include("futer.php"); ?>