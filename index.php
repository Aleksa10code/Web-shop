<?php include("head.php"); ?>

<style>
/* BANNER PARALAX */ 
.banner{width:100%; height:700px; background:url(slike/sto1.jpg); background-attachment:fixed; background-repeat:no-repeat; background-position:center; background-size:cover; padding:200px 0 0 0;}
.banner div{width:1000px; height:150px; margin:0 auto;}
.banner header{width:1000px; height:90px; font-size:30px; font-weight:bold; white-space:pre-wrap; text-align:center; color:#fff; padding-top:25px; font-family:geomanist; letter-spacing:2px;}
.banner i{width:1000px; height:65px; margin:0 auto; font-size:17px; color:#fff; text-align:center; display:block; white-space:pre-wrap;}
/* BANNER PARALAX END */

/* TELO */
.naslov{width:1000px; height:150px; line-height:150px; margin:0 auto; text-align:center; font-size:19px; font-weight:bold; letter-spacing:2px; font-family:geomanist;}

.telo{width:1200px; min-height:600px; margin:0 auto;}
.telo::after{clear:both; display:table; content:"";}
.telo a{width:364px; height:400px; display:block; float:left; text-decoration:none; margin:17.50px;  overflow:hidden;}
.telo a:hover{opacity:0.7;}
.telo img{width:365px; height:250px; display:block; object-fit:cover;}
.telo header{width:365px; height:50px; margin:0; padding:30px 0 0 0; font-size:15px; line-height:16px; font-weight:600; color:#222; font-family:geomanist;}
.telo main{width:365px; height:50px; margin:0; font-size:14px; line-height:14px; letter-spacing:2px; font-weight:lighter; padding:10px 0 0 0; color:#222; font-family:geomanist;}
.telo footer{width:365px; height:50px; margin:0; padding:0; color:#222; font-weight:700; font-size:17px; font-family:geomanist;}

/* TELO 2 */
.telo2{width:1200px; min-height:600px; margin:0 auto;}
.telo2::after{clear:both; display:table; content:"";}
.telo2 img{width:598px; height:400px; display:block; float:left; object-fit:cover; margin:100px 0 0 0;}
.telo2 header{width:598px; height:400px; padding:110px 0 0 0; margin:100px 0 0 0; float:left;}
.telo2 h2{font-size:25px; line-height:20px; font-weight:600; color:#222; padding-left:40px;}
.telo2 aside{white-space:pre-wrap; font-size:20px; line-height:30px; word-spacing:5px; padding-left:40px; color:#737373;}
/* TELO 2 */

/* PRIJATELJI */
.prijatelji{width:1000px; height:30px; line-height:30px; margin:0 auto; text-align:center; font-size:36px; letter-spacing:1px; font-family:geomanist;}
/* PRIJATELJI END */ 

/* LOGOI */
.sponzori{width:1100px; min-height:150px; margin:30px auto;}
.sponzori::after{clear:both; display:table; content:"";}
.sponzori a{display:block; float:left; width:188px; height:100px; margin:15px;}
.sponzori img{width:150px; height:100px; display:block; object-fit:fill; filter:brightness(10%); transition:all 1s;}
.sponzori img:hover{filter:brightness(100%); transition:all 1s;}
/* LOGOI END */

/* GALERIJA */
.galerija{width:100%; height:500px; background:#555; margin:50px auto; position:relative; overflow:hidden;}
.sl1{width:100%; height:100%; position:absolute; animation:slika1 30s infinite; background:url(slike/slika3.jpg); background-size:cover; background-position:center;}
.sl2{width:100%; height:100%; position:absolute; animation:slika2 30s infinite; background:#0f0; background:url(slike/slika4.jpg); background-size:cover; background-position:center;}
.sl3{width:100%; height:100%; position:absolute; animation:slika3 30s infinite; background:#f90; background:url(slike/slika5.jpg); background-size:cover; background-position:center;}

.sl1 span{display:block; width:100%; height:50px; font-size:48px; color:#fff; text-shadow:2px 2px 2px #000; position:absolute; text-align:center; animation:slova1 30s infinite;}
.sl2 span{display:block; width:100%; height:50px; font-size:48px; color:#fff; text-shadow:2px 2px 2px #000; position:absolute; text-align:center; animation:slova2 30s infinite;}
.sl3 span{display:block; width:100%; height:50px; font-size:48px; color:#fff; text-shadow:2px 2px 2px #000; position:absolute; text-align:center; animation:slova3 30s infinite;}

@keyframes slova1{
0%{top:-100px;}	
8%{top:-100px;}
10%{top:50%;}
30%{top:50%;}	
100%{top:-100px;}
}

@keyframes slova2{
0%{top:-100px;}
38%{top:-100px;}
40%{top:50%;}
60%{top:50%;}
100%{top:-100px;}	
}

@keyframes slova3{
0%{top:-100px;}
68%{top:-100px;}
70%{top:50%;}
100%{top:50%;}
}



@keyframes slika1{
0%{left:0;}
20%{left:0;}
30%{left:100%;}
70%{left:100%;}
80%{left:-100%;}
90%{left:-100%;}
100%{left:0;}	
}

@keyframes slika2{
0%{left:-100%;}
20%{left:-100%;}		
30%{left:0;}
50%{left:0;}
60%{left:100%;}
100%{left:100%;}
}

@keyframes slika3{
0%{left:-100%}
50%{left:-100%;}
60%{left:0;}
90%{left:0;}
100%{left:100%;}
}

/* GALERIJA END */

/* KOLEKCIJE */ 
.kolekcija{width:1000px; height:50px; margin:auto; text-align:center; font-size:40px; letter-spacing:1px; font-family:geomanist;}
/* KOLEKCIJE END */

/* NOSI KOLEKCIJE */
.nosikolekcije{width:1200px; min-height:500px; margin:20px auto;}
.nosikolekcije::after{clear:both; display:table; content:"";}
.nosikolekcije a{display:block; float:left; width:365px; height:400px; margin:17.5px; font-size:24px; font-weight:800; text-align:center; text-decoration:none; padding-top:180px; color:#fff;}
.nosikolekcije a:hover{opacity:0.7;}
/* NOSI KOLEKCIJE END*/

/* GOOGLE MAPA */
.mapa{width:100%; height:500px; margin:30px auto;}
.mapa::after{clear:both; display:table; content:"";}
.mapa header{width:40%; height:500px; float:left; padding:0;}
.mapa header address{width:100%; height:180px; border-bottom:solid 2px #222; border-top:solid 1px #ccc; white-space:pre-wrap; padding-left:15px; color:#222; font-size:18px;}
.mapa footer{width:60%; height:500px; float:left;} 
/* GOOGLE MAPA END */

/* poruka */
.poruka{position:fixed; top:calc(50% - 200px); left:calc(50% - 140px); width:280px; height:150px; border-radius:15px; background:#111; opacity:0; z-index:5; font-size:32px; font-weight:bold; color:#fff; text-align:center; padding:30px; animation:pera 4s; animation-iteration-count:1;}

@keyframes pera{
0%{opacity:0;}
10%{opacity:0.8;}
70%{opacity:0.8;}
100%{opacity:0;}
}

/* TELO END */

/* MOBILNI TELEFON */
@media only screen and (max-width: 480px) {

/* BANNER */
.banner{overflow:hidden; height:400px; padding-top:20%; background:url(slike/sto1.jpg);   background-repeat:no-repeat; background-position:center; background-size:cover;}
.banner div{width:100%; height:170px;}
.banner header{width:100%; font-size:20px; letter-spacing:1px;}
.banner i{width:100%; font-size:14px; line-height:14px; padding-top:20px;}
/* BANNER END */

/* TELO */
.naslov{width:100%;}

.telo{width:100%;}
.telo a{width:90%; margin:5%;}
.telo img{width:100%;}
.telo header{width:100%;}
.telo main{width:100%;}
.telo footer{width:100%;}

.telo2{width:100%;}
.telo2 img{width:90%; margin:5%; height:250px; object-fit:fill;}
.telo2 header{width:90%; margin:5%; padding:0; height:300px;}
.telo2 aside{padding-left:10px;}

.prijatelji{width:90%; margin:5%;}
/* TELO END */

/* LOGOI */
.sponzori{width:100%;}
.sponzori a{width:90%; margin:5%; height:50px;}
.sponzori img{width:100%; height:100%; object-fit:contain; filter:brightness(100%);}
/* LOGOI END */

/* GALERIJA */
.galerija{height:200px;}
.sl1 span, .sl2 span, .sl3 span{font-size:32px;}
/* GALERIJA END */

/* KOLEKCIJE */
.kolekcija{width:100%;}
/* KOLEKCIJE END */

/* NOSI KOLEKCIJE */
.nosikolekcije{width:100%;}
.nosikolekcije a{width:90%; margin:5%;}
/* NOSI KOLEKCIJE END */

/* GOOGLE MAPA */
.mapa header{width:100%; height:300px;}
.mapa header address{height:250px; padding-top:40px;}
.mapa footer{width:100%; height:300px;}
}
</style>

<?php
if($_GET['poruka']){echo '<div class="poruka">'.$_GET["poruka"].'</div>';}
?>
<!--BANNER PARALLAX-->
<div class="banner">
<div>
<header>WOOD STEEL ONLINE PRODAVNICA - 20% POPUSTA NA CEO 
ASORTIMAN SAMO NA WEBU!</header>
<i>
Nešto sasvim novo, online prodavnica nameštaja po meri. Izaberite odmah nešto
po želji, pogledajte kompletnu ponudu.
</i>
</div>
</div>
<!--BANNER PARALLAX END-->

<!--TELO-->
<div style="width:100%;">
<div class="naslov">
NOVO U PONUDI
</div>
</div>

<div style="min-height:600px;">
<div class="telo">

<?php
$sql="SELECT * FROM namestaj WHERE brojkomada>0 ORDER BY id DESC LIMIT 6";
$upit=mysqli_query($conn,$sql);
while($red=mysqli_fetch_assoc($upit)) { ?>

<a href="prikaz.php?id=<?=$red["id"]?>">
<img src="<?=$red["slika1"]?>">
<header><?=$red["naziv"]?></header>
<main><?=$red["podnaziv"]?></main>
<footer><?=number_format($red["cena"], 2)?> <small>RSD</small></footer>
</a>

<?php } ?>
</div>
</div>
<!--TELO 2-->
<div style="width:100%;">
<div class="telo2">

<img src="slike/slika7.jpg">
<header>
<h2 style="font-family:geomanist;">Izrada nogica po meri.</h2>
<aside style="font-family:geomanist;">Mogućnost pravljenja nogica po vašoj želji i meri.Od 
cevi, punog čelika, flahova i sličnog materijala. Prženje
nogica u posebnim komorama na 250 stepeni.
Dugotrajna zaštita, visok kvalitet.
</aside>
</header>

</div>
</div>
<!--TELO 2 END-->

<!--NASI PRIJATELJI-->
<div style="width:100%;">
<div class="prijatelji">
NAŠI PRIJATELJI
</div>
</div>
<!--NASI PRIJATELJI END-->

<!--SPONZORI-->
<div style="width:100%;">
<div class="sponzori">
<a href="#"><img src="grafika/logo1 (2).png"></a>
<a href="#"><img src="grafika/logo2.png"></a>
<a href="#"><img src="grafika/logo3.png"></a>
<a href="#"><img src="grafika/logo4.png"></a>
<a href="#"><img src="grafika/logo5.png"></a>
</div>
</div>
<!--SPONZORI END-->

<!--ANIMACIJA-->
<div class="galerija">
<div class="sl1"><span style="font-family:geomanist;">HRAST</span></div>
<div class="sl2"><span style="font-family:geomanist;">ORAH</span></div>
<div class="sl3"><span style="font-family:geomanist;">DUBOREZ</span></div>
</div>
<!--ANIMACIJA END-->

<!--KOLEKCIJE-->
<div style="width:100%; margin:20px auto;">
<div class="kolekcija">
KOLEKCIJE
</div>
</div>
<!--KOLEKCIJE END-->

<!--NOSI KOLEKCIJE-->
<div style="width:100%;">
<div class="nosikolekcije">

<a href="#" style="background:url(slike/slika14.jpg); background-size:cover; background-repeat:no-repeat; background-position:center; font-family:geomanist;">
Trpezarijski stolovi
</a>

<a href="#" style="background:url(slike/slika10.jpg); background-size:cover; background-repeat:no-repeat; background-position:center; font-family:geomanist;">
Klub stolovi
</a>

<a href="#" style="background:url(slike/slika13.jpg); background-size:cover; background-repeat:no-repeat; background-position:center; font-family:geomanist;">
Komode
</a>
</div>
</div>
<!--NOSI KOLEKCIJE END-->

<!--GOOGLE MAPA-->
<div class="mapa">

<header>
<address>
WOODSTEEL SHOWROOM
Wood Steel

<img src="slike/telefon.jpg" style="width:20px; height:18px;">Marsala Tita 10, Novi Beograd, Srbija
<img src="slike/share.jpg" style="width:20px; height:20px;">0649203937
<img src="slike/gps.jpg" style="width:18px; height:20px;">aleksa1997.c1.biz/woodshop
</address>
</header>

<footer>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2831.3868201358114!2d20.443268249437484!3d44.79330483436786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a7010830186db%3A0x853c60a7405e1481!2sBELGRADE%20CENTER-Prokop%20(BEOGRAD%20CENTAR-Prokop)!5e0!3m2!1sen!2srs!4v1587200089792!5m2!1sen!2srs" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</footer>

</div>
<!--GOOGLE MAPA END-->


<!--TELO END-->
<?php include("futer.php"); ?>