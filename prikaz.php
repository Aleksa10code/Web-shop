<?php include("head.php"); ?>

<style>
/* TELO */
.telo{width:1200px; margin:130px auto 50px auto;}
.telo::after{clear:both; display:table; content:"";}

.galerija{width:590px; min-height:400px; margin:10px 0; float:left; overflow:hidden;}

.prikaz{width:590px; height:400px; position:relative; border:solid 1px #7a7a7a;}
.prikaz input[type="radio"]{display:none;}
.zoom{width:588px; height:398px; background-position:50% 50%; overflow:hidden; cursor:zoom-in; display:none; position:relative;}
.zoom img{width:590px; height:400px; object-fit:cover; display:block;}
.zoom img:hover{opacity:0;}

.so1, .so2, .so3, .so4, .so5, .so6, .so7, .so8, .so9, .so10{display:none; width:590px; height:1px; position:absolute; left:0; top:0;}
.levo img, .desno img{text-align:center; position:absolute; top:170px; cursor:pointer; width:40px; height:40px; line-height:40px;}
.levo img{left:5px;}
.desno img{left:545px;} 
.levo img:active{width:50px; height:50px; line-height:50px; transition:all 0.5s;}
.desno img:active{width:50px; height:50px; line-height:50px; transition:all 0.5s;}

.thumb{width:590px; min-height:82px; margin:10px 0;}
.thumb::after{clear:both; display:table; content:"";}
.thumb label img{width:80px; height:80px; object-fit:contain;}

<?php for($x=1;$x<11;$x++){ ?>
.thumb<?=$x?>{width:84px; height:84px; float:left; margin:2px; border:solid 2px #ccc; cursor:pointer;}
#so<?=$x?>:checked + .zoom{display:block;}
#so<?=$x?>:checked + img{display:block;}
#so<?=$x?>:checked ~ .so<?=$x?>{display:block;}
#so<?=$x?>:checked ~ .thumb .thumb<?=$x?>{border:solid 2px #7a7a7a;}
<?php } ?>

.podacix{width:490px; min-height:500px; margin:10px 0 0 50px; float:left;}
.zakorpu{position:relative; width:100%; height:90px;}
.number{width:60px; height:39px; border:solid 1px #ccc; text-align:center; padding-left:5px; font-size:22px; font-weight:bold; position:absolute; left:40px; top:1px;}
.korpa{width:180px; height:50px; line-height:50px; border-radius:40px; border:none; margin:5px 0 0 15px; font-size:18px; text-align:center; cursor:pointer; font-family:geomanist; background:#aa813d; float:left; outline:none;}
.korpa:hover{background:#906724; color:#f1f1f1;}
.zelja{display:block; background-image:url(grafika/srce40b.png); background-size:cover; width:40px; height:40px; float:left; margin:10px 0 0 40px;}
.zelja:hover{opacity:0.8;}
.nosiracun{width:140px; height:40px; position:relative; margin:10px 10px; float:left;}
.minus{transition:all 0.5s; position:absolute; left:1px; top:1px; height:39px;}
.plus{transition:all 0.5s; position:absolute; left:100px; top:1px; height:39px;}
.minus:hover{cursor:pointer; filter:brightness(50%); transition:all 0.5s;}
.plus:hover{cursor:pointer; filter:brightness(50%); transition:all 0.5s;}
/* Chrome, Safari, Edge, Opera unistavamo strelice u input number-u */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {-webkit-appearance:none; margin:0;}
/* Firefox */
input[type=number] {-moz-appearance:textfield;}

.socmedia{width:100%; height:60px;}
.socmedia img{margin:2px 0 0 10px; width:40px; height:30px;}
.facebook{width:30px; height:40px;}

.kartice{width:100%; margin:15px 0 0 0; padding:5px;}
.kartice::after{clear:both; display:table; content:"";}
.kartice img{width:70px; height:40px display:block; float:left; margin:0 7px 0 0; border:solid 1px #ccc;}

.nosiopis{float:left; width:100%;}

/* MOBILNI TELEFON */
@media only screen and (max-width: 480px) {
/* TELO */
.telo{width:100%;}
.telo article{width:90%; margin:5%;}
.telo img{width:100%;}
.galerija{width:100%;}
.prikaz{width:100%;}
.prikaz img{width:100%;}
.zoom{width:100%;}
.so1, .so2, .so3, .so4, .so5, .so6, .so7, .so8, .so9, .so10{width:100%;}
.thumb{width:90%; margin:5%;}
.podacix{width:100%; min-height:300px; margin:0;}
.levo img, .desno img{left:2%; width:40px; height:50px; line-height:30px; position:absolute;}
.desno img{left:88%;}
.nosiracun{float:none; position:absolute; left:10px; top:75px; margin:0 0 0 0;}
.nosiracun img{width:40px;}
.zakorpu{height:140px;}
.number{padding-left:6px;}
.minus{transition:all 0.5s; position:absolute; left:1px; top:1px; height:39px;}
.plus{transition:all 0.5s; position:absolute; left:100px; top:1px; height:39px;}
.korpa{position:absolute; left:170px; top:70px; float:none; margin:0 0 0 0;}
.zelja{display:block; background-image:url(grafika/srce40b.png); background-size:cover; width:40px; height:40px; float:none; position:absolute; left:10px; top:10px; margin:0 0 0 0;}
.kartice img{width:18%; margin:1%; height:30px;}
.socmedia img{width:8%; margin:1%;}
.facebook{width:10%;}
}
</style>
<!--TELO-->
<?php
$id=$_GET["id"];
$sql="SELECT * FROM namestaj WHERE id='$id'";
$upit=mysqli_query($conn,$sql);
$red=mysqli_fetch_assoc($upit);
/* broj pregleda */
$pregleda=$red["pregleda"] + 1;
$sql="UPDATE namestaj SET pregleda='$pregleda' WHERE id='$id'";
mysqli_query($conn,$sql);
?>

<div class="telo">


<!-- MEHANIZAM ZA GALERIJU -->
<div class="galerija">

<div class="prikaz">
<?php 
if(!empty($red["slika1"])){$slike=$red["slika1"];}
if(!empty($red["slika2"])){$slike=$slike."-".$red["slika2"];}
if(!empty($red["slika3"])){$slike=$slike."-".$red["slika3"];} 
if(!empty($red["slika4"])){$slike=$slike."-".$red["slika4"];}
if(!empty($red["slika5"])){$slike=$slike."-".$red["slika5"];}
if(!empty($red["slika6"])){$slike=$slike."-".$red["slika6"];}
if(!empty($red["slika7"])){$slike=$slike."-".$red["slika7"];}
if(!empty($red["slika8"])){$slike=$slike."-".$red["slika8"];}
if(!empty($red["slika9"])){$slike=$slike."-".$red["slika9"];}
if(!empty($red["slika10"])){$slike=$slike."-".$red["slika10"];}

$slika=explode("-", $slike);
$count=count($slika);
 
for($x=0;$x<$count;$x++){
if($x==0){$che="checked";} else {$che="";}	
if($x==0){$y=$count;} else {$y=$x;}
if($x==$count-1){$z=1;} else {$z=$x+2;}				
?>	

<input type="radio" name="slika" id="so<?=$x+1?>" <?=$che?>>
<div class="zoom" onmousemove="zoom(event)" style="background:url(<?=$slika[$x]?>);">
<img src="<?=$slika[$x]?>">
</div>

<span class="so<?=$x+1?>">
<label for="so<?=$y?>" class="levo"><img src="grafika/levo.png"></label>
<label for="so<?=$z?>" class="desno"><img src="grafika/desno.png"></label>
</span>

<?php } ?>
<!-- kraj for petlje -->

<div class="thumb">
<?php
if(!empty($slika[0])){echo '<label class="thumb1" for="so1"><img src="'.$slika[0].'"></label>';}
if(!empty($slika[1])){echo '<label class="thumb2" for="so2"><img src="'.$slika[1].'"></label>';}
if(!empty($slika[2])){echo '<label class="thumb3" for="so3"><img src="'.$slika[2].'"></label>';}
if(!empty($slika[3])){echo '<label class="thumb4" for="so4"><img src="'.$slika[3].'"></label>';}
if(!empty($slika[4])){echo '<label class="thumb5" for="so5"><img src="'.$slika[4].'"></label>';}
if(!empty($slika[5])){echo '<label class="thumb6" for="so6"><img src="'.$slika[5].'"></label>';}
if(!empty($slika[6])){echo '<label class="thumb7" for="so7"><img src="'.$slika[6].'"></label>';}
if(!empty($slika[7])){echo '<label class="thumb8" for="so8"><img src="'.$slika[7].'"></label>';}
if(!empty($slika[8])){echo '<label class="thumb9" for="so9"><img src="'.$slika[8].'"></label>';}
if(!empty($slika[9])){echo '<label class="thumb10" for="so10"><img src="'.$slika[9].'"></label>';}
?>
</div>
<!-- zatvara thumbnail-->
</div>
<!-- zatvara prikaz-->
</div>
<!--zatvara galeriju-->

<script>
function zoom(e){
  var zoomer = e.currentTarget;
  e.offsetX ? offsetX = e.offsetX : offsetX = e.touches[0].pageX
  e.offsetY ? offsetY = e.offsetY : offsetX = e.touches[0].pageX
  x = offsetX/zoomer.offsetWidth*100
  y = offsetY/zoomer.offsetHeight*100
  zoomer.style.backgroundPosition = x + '% ' + y + '%';
}
</script>
<!-- MEHANIZAM ZA GALERIJU END -->


<div class="podacix">
<div style="font-size:24px; font-family:geomanist; color:#222; padding:10px;"><?=$red["naziv"]?></div>
<div style="padding:5px 0 0 10px; font-size:32px; color:#fa0;">
<?php
$sql2 = "SELECT MAX(pregleda) AS max FROM namestaj";
$upit2 = mysqli_query($conn,$sql2);
$red2 = mysqli_fetch_assoc($upit2);
$max = $red["pregleda"];
if($max<2){echo '&#9734;&#9734;&#9734;&#9734;&#9734;';}
elseif($max>=2 and $max<10){echo '&#9733;&#9734;&#9734;&#9734;&#9734;';}
elseif($max>=10 and $max<30){echo '&#9733;&#9733;&#9734;&#9734;&#9734;';}
elseif($max>=30 and $max<50){echo '&#9733;&#9733;&#9733;&#9734;&#9734;';}
elseif($max>=50 and $max<70){echo '&#9733;&#9733;&#9733;&#9733;&#9734;';}
else{echo '&#9733;&#9733;&#9733;&#9733;&#9733;';}
?>
</div>
<div style="font-size:18px; font-family:geomanist; padding:10px;">Ima na stanju</div>
<div style="padding:10px; font-size:20px;"><span style="font-family:geomanist;">Cena:</span> <?=number_format($red["cena"],2)?> <small style="font-family:geomanist; font-size:14px;">RSD</small></div>
<div style="background:#d9d9d9; height:40px; line-height:40px; margin:0 0 20px 0; font-family:geomanist; font-size:20px; padding-left:10px; color:#222;">Dodatne opcije</div>
<div class="zakorpu">
<form method="post" action="staviukorpu.php">
<input type="hidden" name="id" value="<?=$id?>">
<input type="hidden" name="cena" value="<?=$red["cena"]?>">
<div class="nosiracun">
<img class="minus" src="grafika/minus.png">
<input type="number" id="quantity" class="number" name="komada" value="1" min="1" max="<?=$red["brojkomada"]?>">
<img class="plus" src="grafika/plus.png">
</div>
<input type="submit" class="korpa" value="Dodaj u korpu">
</form>
<a class="zelja" href="staviulistuzelja.php?id=<?=$red['id']?>"></a>
<div style="clear:both;"></div>
</div>
<!-- zakorpu end -->

<div class="socmedia">
<img src="grafika/fb.png">
<img src="grafika/g+.png">
<img src="grafika/tw.png">
</div>

<div class="kartice">
<img src="grafika/visa.jpg">
<img src="grafika/master.jpg">
<img src="grafika/american.jpg">
<img src="grafika/discover.jpg">
<img src="grafika/paypal.jpg">
</div>

</div>
<!-- zatvara podacix -->

<div class="nosiopis">
<h1 style="font-family:geomanist;">Opis proizvoda - </h1>
<div style="font-family:geomanist; font-size:18px; color:#222; padding:10px;"><?=$red["opis"]?></div>
</div>

</div>
<!--TELO END-->
<script src="JS/jquery.js"></script>
<script>
$('.plus').click(function(){
        var value =  $('#quantity').val();
		if(value<<?=$red["brojkomada"]?>){
       $('#quantity').val(parseInt(value)+1);};
});
$('.minus').click(function(){
        var value =  $('#quantity').val();
		if(value>1){
       $('#quantity').val(parseInt(value)-1);};
});
</script>
<?php include("futer.php"); ?>