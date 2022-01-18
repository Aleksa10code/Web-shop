<?php include("head.php"); ?>

<style>
.naslov2{width:1000px; text-align:center; margin:110px auto 50px auto; font-size:48px;}
.lista2{width:1000px; min-height:100px; margin:20px auto;}
.lista2::after{clear:both; display:table; content:"";}
.wish2{width:230px; height:390px; margin:10px; float:left; border:solid 1px #ccc; position:relative; border-radius:20px; overflow:hidden;}
.wish2 img{width:100%; height:200px; object-fit:cover;}
.naziv2, .podnaziv2{margin:1px 0; color:#555; min-height:40px; font-family:geomanist; font-size:20px; padding:5px 0 0 5px;}
.cena2{font-size:20px; font-family:geomanist; height:30px; padding-left:5px;}
.komada2{height:20px; font-size:20px; padding-left:5px;}
.ukloni2{width:100%; height:34px; position:absolute; bottom:0;}
.ukloni2 a{text-decoration:none; display:block; text-align:center; color:#fff; height:30px; line-height:30px; width:100px; padding-left:2px; font-family:geomanist; background:#f00; border-radius:10px; font-size:15px; margin-left:5px;}
.ukloni2 a:hover{opacity:0.7;}
.nosiukupno{width:1000px; margin:40px auto;}
.nosiukupno::after{clear:both; display:table; content:"";}
.obrisisve2{display:block; text-decoration:none; width:300px; height:40px; line-height:40px; text-align:center; font-size:18px; font-family:geomanist; color:#222; background:#dfa546; float:left; border-radius:20px;}
.obrisisve2:hover{background:#deb87b;}
.prazno{width:400px; height:40px; float:left;}
.ukupno{width:300px; height:40px; line-height:40px; padding-right:5px; font-size:24px; font-family:geomanist; border-bottom:solid 1px #f00; text-align:right; float:left;}
.popuniformu{margin:5px auto; color:#222; width:1000px; text-align:center; font-family:geomanist;}

.naruci{width:600px; margin:20px auto; padding:5px; border:solid 1px #ccc; border-radius:20px;}
.naruci input{width:100%; height:40px; padding-left:10px; font-size:18px; margin:2px 0 3px; border:solid 1px #ccc; border-radius:20px; font-family:geomanist; outline:none;}
.naruci input[type="submit"]{width:100%; height:40px; text-align:center; border:none; color:#fff; background:#dfa546; font-size:18px; border-radius:20px; font-family:geomanist; outline:none;}
.naruci input[type="submit"]:hover{cursor:pointer; background:#deb87b; color:#222;}
.naruci textarea{width:100%; height:150px; padding:10px; font-size:18px; margin:2px 0 3px; border:solid 1px #ccc; resize:none; border-radius:20px; outline:none;}
.naruci span{color:#f00;}
.praznakorpa{padding:10px; text-align:center;}
@media only screen and (max-width: 480px){
.naslov2{width:100%; font-size:36px; margin:160px auto 40px auto;}	
.lista2{width:100%;}
.nosiukupno{width:100%;}
.obrisisve2{width:40%; text-align:left; padding:13px 0 0 13px; font-size:16px; line-height:20px;}
.prazno{width:10%;}
.ukupno{width:50%; font-size:16px; text-align:left; padding-left:5px; margin:0;}
.popuniformu{width:100%;}
.naruci{width:90%; margin:5%;}
.wish2{width:90%; margin:5%;}
.praznakorpa{padding:60px 30px 0 30px;}	
}

</style>
<?php
if(isset($_COOKIE["korpa"])){echo '<h2 class="naslov2">KORPA</h2>';
?>

<div class="lista2">
<?php
$niz=explode("-", $_COOKIE["korpa"]);
$broj=count($niz) - 1;

for($x=0;$x<$broj;$x++){
$exp=explode("*", $niz[$x]);
$id=$exp[0];
$komada=$exp[1];
$cena=$exp[2];	
$sql="SELECT * FROM namestaj WHERE id='$id' ";	
$upit=mysqli_query($conn,$sql);	
$red=mysqli_fetch_assoc($upit);
?>

<!--PROIZVOD-->
<div class="wish2">
<a href="prikaz.php?id=<?=$red["id"]?>"><img src="<?=$red["slika1"]?>" height="100"></a>
<div class="naziv2"><?=$red["naziv"]?></div>
<div class="podnaziv2"><?=$red["podnaziv"]?></div>
<div class="cena2"><?=number_format($red["cena"], 2)?> <small>RSD</small></div>
<div class="komada2"><?=$komada?> <small style="font-family:geomanist;">kom.</small></div>
<div class="ukloni2"><a href="ukloniizkorpe.php?x=<?=$x?>">UKLONI</a></div>
</div>
<!--PROIZVOD END-->

<?php 
$ukupno=$komada*$red["cena"] + $ukupno;
} ?>
</div>
<!--ZATVARAMO LISTU2-->

<div class="nosiukupno">
<?php
echo '<a class="obrisisve2" href="obrisikorpa.php">OBRISI CELU KORPU</a>';
?>
<div class="prazno"></div>
<div class="ukupno"><small>Ukupno:</small> <?=number_format($ukupno, 2)?> <small>RSD</small></div>
</div>

<h2 class="popuniformu">POPUNITE FORMU ZA VAŠU NARUDZBINU</h2>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
// IME	
if(empty($_POST["ime"])){$greskaime="ovo polje je obavezno";}
else
{$ime=$_POST["ime"];}
// PREZIME
if(empty($_POST["prezime"])){$greskaprezime="ovo polje je obavezno";}
else
{$prezime=$_POST["prezime"];}
// ADRESA
if(empty($_POST["adresa"])){$greskaadresa="ovo polje je obavezno";}
else
{$adresa=$_POST["adresa"];}
// GRAD
if(empty($_POST["grad"])){$greskagrad="ovo polje je obavezno";}
else
{$grad=$_POST["grad"];}
// POSTANSKI BROJ
if(empty($_POST["postanskibroj"])){$greskapostanskibroj="ovo polje je obavezno";}
else
{$postanskibroj=$_POST["postanskibroj"];}
// TELEFON
if(empty($_POST["telefon"])){$greskatelefon="ovo polje je obavezno";}
else
{$telefon=$_POST["telefon"];}
// EMAIL
if(empty($_POST["email"])){$greskaemail="ovo polje je obavezno";}
else
{$email=$_POST["email"];}
// NAPOMENA
$napomena=$_POST["napomena"];

if(empty($greskaime) and empty($greskaprezime) and empty($greskaadresa) and empty($greskagrad) and empty($greskapostanskibroj) and empty($greskatelefon) and empty($greskaemail)){
$korpa=$_COOKIE["korpa"];
if(isset($_COOKIE["woodshopuser"])){
$user=$_COOKIE["woodshopuser"];}
else{$user=uniqid();}
		
$sql="INSERT INTO woodkorpa (woodshopuser, ime, prezime, adresa, grad, postanskibroj, telefon, email, napomena, korpa, ukupno) VALUES ('$user', '$ime', '$prezime', '$adresa', '$grad', '$postanskibroj', '$telefon', '$email', '$napomena', '$korpa', '$ukupno')";
mysqli_query($conn,$sql);
setcookie("korpa","",time() - 3600,"/");
setcookie("woodshopuser",$user,time() + 86400 * 300,"/");
echo '<meta http-equiv="refresh" content="0; url=kupovina.php">';} 
else{$poruka="Sva polja su obavezna";}	
	
} // KRAJ PROVERE SUBMIT 
?>

<h2 align="center" style="color:#f00;"><?=$poruka?></h2>

<form class="naruci" action="korpa.php" method="post">
<input type="text" name="ime" placeholder="Ime" value="<?=$ime?>">
<span><?=$greskaime?></span>
<input type="text" name="prezime" placeholder="Prezime" value="<?=$prezime?>">
<span><?=$greskaprezime?></span>
<input type="text" name="adresa" placeholder="Adresa" value="<?=$adresa?>">
<span><?=$greskaadresa?></span>
<input type="text" name="grad" placeholder="Grad" value="<?=$grad?>">
<span><?=$greskagrad?></span>
<input type="text" name="postanskibroj" placeholder="Poštanski broj" value="<?=$postanskibroj?>">
<span><?=$greskapostanskibroj?></span>
<input type="text" name="telefon" placeholder="Telefon" value="<?=$telefon?>">
<span><?=$greskatelefon?></span>
<input type="email" name="email" placeholder="Email" value="<?=$email?>">
<span><?=$greskaemail?></span>
<textarea name="napomena" placeholder="Napomena.."><?=$napomena?></textarea>
<input type="submit" value="NARUČI">
</form>

<?php } else{echo '<h2 class="praznakorpa">VAŠA KORPA JE PRAZNA</h2>';} 

include("futer.php"); ?>