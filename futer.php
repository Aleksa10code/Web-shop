<!--FUTER-->
<style>
.dugme{display:block; width:50px; height:50px; position:fixed; bottom:20px; right:10px; transition:all 1s; z-index:10;}

@media only screen and (max-width: 480px) {
.dugme{bottom:30px; right:10px;}	
}
</style>
<div style="background:#f5f5f5; position:relative;">
<a href="#" class="dugme" id="myBtn"><img src="grafika/arrow.png" /></a>

<script>
var mybutton = document.getElementById("myBtn");
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
  if (document.body.scrollTop > 700 || document.documentElement.scrollTop > 700) {
    mybutton.style.opacity = "1";
  } else {
    mybutton.style.opacity = "0";
  }
}
</script>

<div class="futer">

<footer>
<label>Brzi linkovi</label>
<figure>
<a href="index.php">Početna</a>
<a href="index.php">Proizvodi</a>
<a href="rokisporuke.php">Rok isporuke</a>
<a href="zavrsnaobrada.php">Završna obrada</a>
<a href="plastifikacija.php">Plastifikacija</a>
<a href="onama.php">O nama</a>
</figure>
</footer>

<footer>
<label>Kontaktirajte nas</label>
<figure>
<a style="white-space:pre-wrap;" href="#">Petar Petrovic 
+38160405xxxxx
woodsteelrs@gmail.com
</a>
<p>
PIB: 11xxxxxx
Maticni broj: 65xxxxxx
RACUN: 1xxxxxxx
</p>
</figure>
</footer>

<footer style="height:220px; padding:0;">
<label>Obaveštenja</label>
<form action="woodsubscribe.php" method="post">
<input type="email" name="email" placeholder="E-mail adresa" title="Upišite Vaš email na koji želite da Vam šaljemo novosti sa našeg sajta!" required="required">
<input type="submit" value="POŠALJI!">
</form>
</footer>

<footer>
<label>Pomoć i podrška</label>
<figure>
<a href="pomocipodrska.php">Pomoć i podrška</a>
<a href="uslovikoriscenja.php">Uslovi korišćenja</a>
<a href="kolacici.php">Kolačići</a>
<a href="isporuka.php">Isporuka i rok izrade</a>
<a href="pravilnik.php">Pravilnik o reklamacijama</a>
</figure>
</footer>
</div>
</div>
<!--FUTER END-->

<!--PODFUTER-->
<div style="border-top:solid 2px #ddd; background:#f5f5f5;">

<section>

<aleksa>
<a href="#"><img src="grafika/face.png"></a>
<a href="#"><img src="grafika/insta.png"></a>
</aleksa>

<dragas>
<small>&copy; 2020
<a href="#">WOODSTEEL.COM</a>
</small>
</dragas>

</section>

</div>
<!--PODFUTER-->
</body>
</html>
<?php
$sql7="SELECT * FROM woodposete WHERE id=1";
$upit7=mysqli_query($conn,$sql7);
$red7=mysqli_fetch_assoc($upit7);
mysqli_close($conn);
?>