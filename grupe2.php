<?php include("head.php"); ?>

<style>
/* TELO */
.naslov{width:1000px; height:150px; line-height:150px; margin:0 auto; font-size:36px; text-align:center; font-family:prime; color:#222;}

.telo{width:1200px; min-height:600px; margin:0 auto;}
.telo::after{clear:both; display:table; content:"";}
.telo a{width:364px; height:400px; display:block; float:left; text-decoration:none; margin:17.50px;  overflow:hidden;}
.telo a:hover{opacity:0.7;}
.telo img{width:365px; height:250px; display:block; object-fit:cover;}
.telo header{width:365px; height:50px; margin:0; padding:30px 0 0 0; font-size:15px; line-height:16px; font-weight:600; color:#222;}
.telo main{width:365px; height:50px; margin:0; font-size:14px; line-height:14px; letter-spacing:2px; font-weight:lighter; padding:10px 0 0 0; color:#222;}
.telo footer{width:365px; height:50px; margin:0; padding:0; color:#222; font-weight:700; font-size:17px;}

/* MOBILNI TELEFON */
@media only screen and (max-width: 480px) {
.naslov{width:100%;}
.telo{width:100%;}
.telo a{width:90%; margin:5%;}
.telo img{width:100%;}
.telo header, .telo main, .telo footer{width:100%;}
}
</style>

<!--TELO-->
<div style="width:100%;">
<div class="naslov">
<?php
$search=$_POST["search"];
if($_POST["search"]){echo "GRUPE PROIZVODA";
?>
</div>
</div>

<div style="min-height:600px;">
<div class="telo">

<?php
$sql="SELECT * FROM namestaj WHERE brojkomada>0 AND naziv LIKE '%$search%' ORDER BY id DESC";
$upit=mysqli_query($conn,$sql);
while($red=mysqli_fetch_assoc($upit)) { ?>

<a href="prikaz.php?id=<?=$red["id"]?>">
<img src="<?=$red["slika1"]?>">
<header><?=$red["naziv"]?></header>
<main><?=$red["podnaziv"]?></main>
<footer><?=number_format($red["cena"], 2)?> RSD</footer>
</a>

<?php }} else {echo "Nema na stanju";} ?>

</div>
</div>

<!--TELO END-->
<?php include("futer.php"); ?>