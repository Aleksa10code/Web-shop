<?php include("head.php"); ?>
	
<style>
.naslov{text-align:center; margin:0; height:30px; font-size:30px; padding:10px 0 0 0;}
.lista{width:1000px; margin:30px auto;}
.lista::after{clear:both; display:table; content:"";}
.wish{width:230px; height:380px; margin:10px; float:left; border:solid 1px #ccc; overflow:hidden; position:relative; border-radius:30px;}
.wish img{width:230px; height:200px; object-fit:cover;}
.naziv, .podnaziv{margin:1px 0; color:#555; min-height:40px; font-family:geomanist; font-size:20px; padding:5px 0 0 5px; padding-top:5px;}
.cena{font-size:20px; font-family:geomanist; height:40px; padding-left:5px; padding-top:5px;}
.ukloni{text-decoration:none; display:block; text-align:center; color:#fff; height:30px; line-height:30px; width:100px; padding-left:2px; font-family:geomanist; background:#f00; border-radius:10px; font-size:15px; position:absolute; bottom:5px; left:12px;}
.ukloni:hover{opacity:0.6;}

.obrisisve{display:block; text-decoration:none; width:1000px; margin:40px auto; height:40px; line-height:40px; text-align:center; font-size:18px; font-family:geomanist; color:#222; border:none; border-radius:20px; background:#dfa546;}
.obrisisve:hover{background:#deb87b;}
.praznazelja{font-family:geomanist; text-align:center;}

@media only screen and (max-width: 480px){
.lista{width:100%;}
.wish{width:94%; margin:3%; height:450px;}
.wish img{width:100%; height:270px; object-fit:fill;}	
.obrisisve{width:90%; margin:5%;}
.ukloni{bottom:10px;}
.praznazelja{padding:30px 30px 5px 30px;}
}
</style>
<?php
if(isset($_COOKIE["listazelja"])){echo '<h2 class="naslov">LISTA ŽELJA</h2>';}
?>

<div class="lista">
<?php
$niz=explode("-", $_COOKIE["listazelja"]);
$broj=count($niz) - 1;

for($x=0;$x<$broj;$x++){
$id=$niz[$x];	
$sql="SELECT * FROM namestaj WHERE id='$id' ";	
$upit=mysqli_query($conn,$sql);	
$red=mysqli_fetch_assoc($upit);
?>

<div class="wish">
<a href="prikaz.php?id=<?=$red["id"]?>"><img src="<?=$red["slika1"]?>" height="100"></a>
<div class="naziv"><?=$red["naziv"]?></div>
<div class="podnaziv"><?=$red["podnaziv"]?></div>
<div class="cena"><?=number_format($red["cena"], 2)?> <small>RSD</small></div>
<a class="ukloni" href="uklonisalistezelja.php?x=<?=$x?>">UKLONI</a>
</div>

<?php } ?>

</div>

<?php
if(isset($_COOKIE["listazelja"])){echo '<a class="obrisisve" href="obrisiwish.php">OBRIŠI CELU LISTU ŽELJA</a>';}
else{echo '<h2 class="praznazelja">VAŠA LISTA ŽELJA JE PRAZNA</h2>';}
?>
<?php include("futer.php"); ?>