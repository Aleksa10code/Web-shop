<?php include("head.php"); ?>

<style>
.nosi5{width:1000px; margin:20px auto; overflow:hidden;}
.nosi5 h1{text-align:center;}
.nosi5 p{white-space:pre-wrap; font-size:18px; line-height:26px; color:#737373; word-spacing:4px; padding-left:30px;}

.forma2{width:100%; padding:10px;}
.forma2 aside{display:inline-block; width:calc(50% - 8px); height:40px; margin:10px 0 0 4px; position:relative;}
.forma2 span{position:absolute; top:5px; right:20px; color:#f00;}
.forma2 main{width:980px; height:200px; margin:20px 0 0 4px; position:relative;}


input[type="text"]{width:100%; height:40px; font-size:18px; padding:0 0 0 10px; margin:2px 0 5px 0; border:solid 1px #d6d6d6; border-radius:3px; outline:none;}
input[type="submit"]{width:10%; height:40px; color:#333; background:#a17328; font-size:14px; font-weight:600; text-align:center; border:none; border-radius:3px; outline:none; margin:20px 0 0 4px;}
input[type="submit"]:hover{background:#805c20; color:#fff; cursor:pointer;}
textarea{width:calc(100% - 8px); height:200px; border:solid 1px #d6d6d6; border-radius:2px; padding:10px; font-size:18px; resize:none; outline:none;}
@media only screen and (max-width: 480px) {
.nosi5{width:100%; margin:120px auto 20px auto;}
.nosi5 p{line-height:22px; word-spacing:0px; padding-left:10px;}
.forma2 input[type="submit"] {width:30%;}	
.forma2 aside{width:98%; margin:2% 1%;}
.forma2 input{width:98%;}
.forma2 main{width:98%; margin:5% 2%;} 
.forma2 textarea{width:98%;}
}
</style>

<div class="nosi5">

<h1>Kontakt</h1>
<p>Kao završnu obradu metala koristimo proces plastifikacije.
U pećima specijalnom napravljenim za tu vrstu potreba stavljaju se postlja i ostali prizvodi sirogov stanja, potom zagrevaju na 250C i tako se dobija ''plastifikacija''.

Dostupni su svi RAL - ovi boja, najcesca boja koja se koristi je crna ''smirgla'', bela mat antrhacite ''smirgla''.</p>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
if(empty($_POST["ime"])){$greskaime = "Ovo polje je obavezno";}	
else{$ime = $_POST["ime"];
if(!preg_match("/^[0-9a-zA-Z_ČĆŠŽčćšžĐđ ]{2,30}$/", $ime))
{$greskaime = "Samo slova i brojevi su dozvoljeni!";}}

if(empty($_POST["email"])){$greskaemail = "Ovo polje je obavezno";}	
else{$email = $_POST["email"];
if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
$greskaemail = "Greska email";}}

if(empty($_POST["telefon"])){$greskatelefon = "Ovo polje je obavezno";}	
else{$telefon = $_POST["telefon"];
if(!preg_match("/^[0-9+\-\/\(\) ]{4,30}$/", $telefon))
{$greskatelefon = "Samo slova i brojevi su dozvoljeni!";}}

if(empty($_POST["tekst"])){$greskatekst = "Ovo polje je obavezno";}	
else{$tekst = $_POST["tekst"];
if(!preg_match("/^[0-9a-zA-Z_ČĆŠŽčćšžĐđ ]{9,2000}$/", $tekst))
{$greskatekst = "Samo slova i brojevi su dozvoljeni!";}}

if(empty($greskaime) and empty($greskaemail)  and empty($greskatelefon)  and empty($greskatekst)){
	
$sql = "INSERT INTO woodkontakt (ime, email, telefon, tekst) VALUES ('$ime', '$email', '$telefon', '$tekst')";	
mysqli_query($conn,$sql);
echo '<meta http-equiv="refresh" content="0; url=index.php?poruka=Uspešno ste nas kontaktirali!">';} 

else {$poruka2 = "Popunite ispravno kontakt formu";}}
if($poruka2){echo '<h2 align="center" style="color:#f00;">'.$poruka2.'</h2>';}
?>

<form class="forma2" action="kontakt.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?=$id?>">
<aside>
<input type="text" name="ime" placeholder="Ime" value="<?=$ime?>">
<span><?=$greskaime?></span>
</aside>

<aside>
<input type="text" name="telefon" placeholder="Telefon" value="<?=$telefon?>">
<span><?=$greskatelefon?></span>
</aside>

<aside style="width:100%;">
<input type="text" name="email" placeholder="E-mail" style="width:calc(100% - 8px);" value="<?=$email?>">
<span><?=$greskaemail?></span>
</aside>

<main>
<textarea name="tekst" placeholder="Vaš komentar.."><?=$tekst?></textarea>
<span><?=$greskatekst?></span>
</main>

<input type="submit" value="POŠALJI">
</form>
</div>

<?php include("futer.php"); ?>