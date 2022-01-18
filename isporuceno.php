<?php include("cpanel-head.php"); ?>

<style>
.naslov2{width:800px; text-align:center; position:absolute; top:60px; left:260px; font-family:geomanist; font-size:30px;}
.nosisvenarudzbine{width:800px; position:relative; margin:120px 0 50px 260px; overflow:hidden;}
.nosisvenarudzbine::after{clear:both; display:table; content:"";}
.vremenarudzbe{height:30px; line-height:30px; font-size:18px; text-align:right; padding-right:5px; background:#777; color:#dfdfef; width:100%; font-family:geomanist;}
.nosiproizvod{width:220px; height:130px; float:left; border:solid 1px #ccc; margin:10px; overflow:hidden;}
.nosiproizvod::after{clear:both; display:table; content:"";}
.slikaproizvoda{width:100px; height:130px; float:left;}
.slikaproizvoda img{width:100%; height:100%; object-fit:cover;}
.podacioproizvodu{width:118px; float:left;}
.naziv2{width:100%; height:50px; line-height:15px; padding:5px; font-family:geomanist; font-size:15px;}
.cena2{width:100%; height:60px; line-height:15px; padding:15px 0 0 5px; font-size:14px; font-family:geomanist;}
.komada2{width:100%; height:20px; font-size:16px; padding-left:5px; font-family:geomanist;}
.ukupnacena{width:100%; height:30px; line-height:30px; font-size:20px; text-align:right; padding-right:10px; color:#f00000; font-family:geomanist;}

.nositabelu{width:100%; border-top:solid 1px #222; margin:5px 0;}
.tabela{border:solid 1px #ccc; margin:5px; border-collapse:collapse;}
.tabela td, .tabela th{border:1px solid #dddddd; text-align:left; padding:8px; font-family:geomanist;}
.tabela tr:nth-child(even){background:#777; color:#dfdfef;}

.naplaceno{display:block; text-decoration:none; text-align:center; width:100px; height:40px; line-height:40px; font-size:14px; background:#ddd; color:#222; border-radius:20px;}
.naplaceno:hover{background:#566282; color:#dfdfef;}
</style>
<h2 class="naslov2">PREGLED ISPORUKE</h2>

<div class="nosisvenarudzbine">
<?php
$sqlu="SELECT * FROM woodkorpa WHERE isporuceno > 0 AND naplaceno = 0 ORDER BY isporuceno DESC ";
$upitu=mysqli_query($conn,$sqlu);
while($redu=mysqli_fetch_assoc($upitu)){
$cookie=$redu["korpa"];
$ukupno=$redu["ukupno"];

$niz=explode("-", $cookie);
$broj=count($niz) - 1;
?>

<!--NOSI KORPU-->
<div style="border:solid 2px #ddd; margin:30px 0;">
<div class="vremenarudzbe"><?=$redu["naruceno"]?></div>

<?php
for($x=0;$x<$broj;$x++){
$exp=explode("*", $niz[$x]);
$id=$exp[0];
$komada=$exp[1];
$cena=$exp[2];	
$sql="SELECT * FROM namestaj WHERE id='$id' ";	
$upit=mysqli_query($conn,$sql);	
$red=mysqli_fetch_assoc($upit);
?>

<!--KONTEJNER ZA PROIZVOD-->
<div class="nosiproizvod">
<div class="slikaproizvoda">
<img src="<?=$red["slika1"]?>" height="100">
</div>
<div class="podacioproizvodu">
<div class="naziv2"><?=$red["naziv"]?></div>
<div class="cena2"><?=number_format($red["cena"], 2)?> <small>RSD</small></div>
<div class="komada2"><?=$komada?> <small style="font-family:geomanist;">kom.</small></div>
</div>
</div>
<!--KONTEJNER ZA PROIZVOD-->

<!--kraj for petlje-->
<?php } ?>
<div style="clear:both;"></div>

<div class="ukupnacena"><small style="font-family:geomanist;">Ukupno:</small> <?=number_format($redu["ukupno"], 2)?> <small>RSD</small></div>

<div class="nositabelu">
<table class="tabela" width="50%" cellpadding="1" cellspacing="1">
<tr><th>NARUČILAC</th><th><?=$redu["ime"].' '.$redu["prezime"]?></th></tr>
<tr><td>ADRESA</td><td><?=$redu["adresa"]?></td></tr>
<tr><td>GRAD</td><td><?=$redu["grad"]?></td></tr>
<tr><td>POŠTANSKI BROJ</td><td><?=$redu["postanskibroj"]?></td></tr>
<tr><td>TELEFON</td><td><?=$redu["telefon"]?></td></tr>
<tr><td>EMAIL</td><td><?=$redu["email"]?></td></tr>
<tr><td>UKUPNO</td><td><?=number_format($redu["ukupno"],2)?> <small style="font-family:geomanist;">RSD</small></td></tr>
<tr><td>NAPOMENA</td><td><?=$redu["napomena"]?></td></tr>
<tr><td><a class="naplaceno" href="naplacenoset.php?id=<?=$redu["id"]?>">NAPLAĆENO</a></td></tr>
</table>
</div>

<!--ZATVARAMO NOSIKORPU-->
</div>


<!--kraj while petlje-->
<?php } ?>
</div>
<?php include("cpanel-futer.php"); ?>