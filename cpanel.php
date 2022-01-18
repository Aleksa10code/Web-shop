<?php include("cpanel-head.php"); ?>

<style>
/* TELO */
body{background:#f0f0fa;}
main{width:800px; min-height:760px; margin:100px 0 30px 260px; position:relative; background:#f1f1f1; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-radius:14px;}
.proizvodi{border-collapse:collapse; width:780px; margin:10px; font-family:geomanist;}
.proizvodi td{border-bottom:solid 1px #ccc; text-align:center;}
.proizvodi th{border-bottom:solid 1px #ccc; text-align:center;}

.delete{text-decoration:none; text-align:center; font-size:14px; background:#e7e9ed; color:#e45164; border-radius:50%; display:block; width:65px; height:65px; line-height:65px; font-weight:bold; font-family:geomanist; margin:auto; filter:drop-shadow(4px 4px 4px gray);}
.delete:hover{background:#b8babd;}
.edit{text-decoration:none; text-align:center; font-size:14px; background:#e7e9ed; color:#e45164; border-radius:50%; display:block; width:65px; height:65px; line-height:65px; font-weight:bold; font-family:geomanist; margin:auto; filter:drop-shadow(4px 4px 4px gray);}
.edit:hover{background:#b8babd;}

form{width:450px; height:50px; padding:10px 0 0 14px; position:relative;}
input[type="text"]{width:160px; height:29px; padding:0 0 0 10px; font-size:18px; font-family:geomanist; outline:none; border:solid 1px #ccc; position:absolute; top:7px; left:160px;}
input[type="submit"]{width:80px; height:30px; line-height:20px; border-radius:15px; cursor:pointer; border:none; background:#e7e9ed; font-size:17px; text-align:center; font-family:geomanist; outline:none; position:absolute; top:7px; left:330px;}
input[type="submit"]:hover{background:#b8babd;}
form select{height:30px; padding:0 0 0 4px; font-family:geomanist; outline:none; border:solid 1px #ccc; position:absolute; top:7px; left:10px;}

/* paginacija */
.paginacija{width:500px; height:40px; margin:20px auto 50px calc(50% - 250px); text-align:center;}
.paginacija::after{clear:both; display:table; content:"";}
.paginacija a{display:block; float:left; text-decoration:none; text-align:center; width:40px; height:40px; line-height:40px; font-size:18px; margin:0 2px; background:#222; border-radius:50%; border:none; color:#fff;}
.paginacija a:hover{background:#4e4e4e;}
.strana{float:left; text-align:center; width:40px; height:40px; line-height:40px; font-size:18px; border:none; border-radius:50%; background:#f90; color:#fff;}
.paginacijam{display:none;}

/* MOBILNI TELEFON */
@media only screen and (max-width: 480px) {
.paginacija{display:none;}	

.paginacijam{width:100%; height:40px; margin:20px 0 30px 0; display:block;}
.paginacijam::after{clear:both; display:table; content:"";}
.paginacijam a{display:block; float:left; text-decoration:none; text-align:center; width:40px; height:40px; line-height:40px; font-size:18px; margin:0 2px; background:#222; border-radius:50%; border:none; color:#fff;}
.paginacijam a:hover{background:#4e4e4e;}
}
</style>

<!--TELO-->
<main>

<div>
<?php
$naziv=$_REQUEST["naziv"];
if($_REQUEST["grupa"] == ""){$grupa="%";} else{
$grupa = $_REQUEST["grupa"];}
?>
<form action="cpanel.php" method="post">
<select name="grupa" onChange="this.form.submit()">
<?php
if($grupa=="%"){echo '<option value="">Sve kategorije</option>';} else{echo '<option value="'.$grupa.'">'.$grupa.'</option>';}
?>
<?php
if($grupa!=="%"){echo '<option value="">Sve kategorije</option>';}
?>
<?php
$sql5 = "SELECT DISTINCT grupa FROM namestaj ORDER BY grupa";
$upit5 = mysqli_query($conn,$sql5);
while($red5 = mysqli_fetch_assoc($upit5)){ ?>
<option value="<?=$red5["grupa"]?>"><?=$red5["grupa"]?></option>
<?php } ?>
</select>
<input type="text" name="naziv" value="<?=$naziv?>" placeholder="Naziv proizvoda">
<input type="submit" value="Pretraži">
</form>
</div>

<table class="proizvodi">
<tr>
<th style="color:#222;">Slika</th>
<th style="color:#222;">Grupa</th>
<th style="color:#222;">Naziv</th>
<th style="color:#222;">Broj komada</th>
<th style="color:#222;">Broj pregleda</th>
<th style="color:#222;">Obriši</th>
<th style="color:#222;">Izmeni</th>
</tr>
<?php
/* PAGINACINA */

$sql="SELECT * FROM namestaj WHERE naziv LIKE '%$naziv%' AND grupa LIKE '$grupa'";
$upit=mysqli_query($conn,$sql);
$brojredova=mysqli_num_rows($upit);

$postrani=5;

$brojstrana=ceil($brojredova / $postrani);

if(empty($_GET["strana"]) or $_GET["strana"]==1) {
$odakle=0; $strana=1;} 
else{$odakle=(($_GET["strana"] - 1)*$postrani); $strana=$_GET["strana"];}
/* PAGINACIJA 1 END */

$sql="SELECT * FROM namestaj WHERE naziv LIKE '%$naziv%' AND grupa LIKE '$grupa' ORDER BY id DESC LIMIT $odakle,$postrani";
$upit=mysqli_query($conn,$sql);
while($red=mysqli_fetch_assoc($upit)) { ?>
<tr>
<td width="120" height="100" style="padding:4px;"><img src="<?=$red["slika1"]?>" width="100%" height="100"></td>
<td style="color:#222; font-family:geomanist;" width="110"><?=$red["grupa"]?></td>
<td style="color:#222; font-family:geomanist;" width="150"><?=$red["naziv"]?></td>
<td style="color:#222; font-family:geomanist;" width="70"><?=$red["brojkomada"]?></td>
<td  style="color:#222; font-family:geomanist;" width="70"><?=$red["pregleda"]?></td>
<td width="70">
<a class="delete" href="#pitanje<?=$red['id']?>">OBRIŠI</a>
<style>
#pitanje<?=$red['id']?>{display:none;}
#pitanje<?=$red['id']?>:target{position:fixed; left:calc(50% - 150px); top:calc(50% - 100px); width:300px; height:200px; background:#fff; z-index:3; display:block; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
#pitanje<?=$red['id']?> span{display:block; width:200px; position:absolute; left:calc(50% - 100px); top:30px;}
</style>

<div id="pitanje<?=$red['id']?>">
<span>Da li ste sigurni da želite da obrišete proizvod?</span>
<a class="delete" href="#" style="position:absolute; left:50px; bottom:50px; font-size:13px;">ODUSTANI</a>
<a class="delete" style="position:absolute; right:50px; bottom:50px;" href="delete.php?id=<?=$red['id']?>">OBRIŠI</a>
</div>
</td>

<td width="70"><a class="edit" href="edit.php?id=<?=$red['id']?>">EDIT</a></td>
</tr>

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
echo '<a href="'.$_SERVER['PHP_SELF'].'?strana='.$x.'&naziv='.$naziv.'&grupa='.$grupa.'"><<</a>';}	

/* na prethodnu stranu */
if($strana>1){$x=$strana - 1;
echo '<a href="'.$_SERVER['PHP_SELF'].'?strana='.$x.'&naziv='.$naziv.'&grupa='.$grupa.'"><</a>';}	
	
for($x=($strana - $range);$x<(($strana + $range) + 1);$x++){
if($x > 0 and $x<($brojstrana + 1)){
if($strana==$x) { ?>
<div class="strana"><?=$x?></div>
<?php } else {echo '<a href="'.$_SERVER['PHP_SELF'].'?strana='.$x.'&naziv='.$naziv.'&grupa='.$grupa.'">'.$x.'</a>';	
}}}
	
/* na narednu stranu */
if($strana < $brojstrana) {$x=$strana + 1;
echo '<a href="'.$_SERVER['PHP_SELF'].'?strana='.$x.'&naziv='.$naziv.'&grupa='.$grupa.'">></a>';}

/* na poslednju stranu */
if($strana < $brojstrana) {$x=$brojstrana;
echo '<a href="'.$_SERVER['PHP_SELF'].'?strana='.$x.'&naziv='.$naziv.'&grupa='.$grupa.'">>></a>';}
?>
<div style="clear:both;"></div>
</div>
</div>
<!-- PAGINACIJA END -->

<!-- PAGINACIJAM -->
<div class="paginacijam">
<?php
if($_GET["strana"]==1 or $_GET["strana"]==$brojstrana)
{$width = 176;} else {$width = 308;}
?>

<div style="width:<?=$width?>px; margin:0 auto 0 auto;">
<?php
$range=1;
/* na prvu stranu */
if($strana!==1){$x=1;
echo '<a href="'.$_SERVER['PHP_SELF'].'?strana='.$x.'&naziv='.$naziv.'&grupa='.$grupa.'"><<</a>';}	

/* na prethodnu stranu */
if($strana>1){$x=$strana - 1;
echo '<a href="'.$_SERVER['PHP_SELF'].'?strana='.$x.'&naziv='.$naziv.'&grupa='.$grupa.'"><</a>';}	
	
for($x=($strana - $range);$x<(($strana + $range) + 1);$x++){
if($x > 0 and $x<($brojstrana + 1)){
if($strana==$x) { ?>
<div class="strana"><?=$x?></div>
<?php } else {echo '<a href="'.$_SERVER['PHP_SELF'].'?strana='.$x.'&naziv='.$naziv.'&grupa='.$grupa.'">'.$x.'</a>';	
}}}
	
/* na narednu stranu */
if($strana < $brojstrana) {$x=$strana + 1;
echo '<a href="'.$_SERVER['PHP_SELF'].'?strana='.$x.'&naziv='.$naziv.'&grupa='.$grupa.'">></a>';}

/* na poslednju stranu */
if($strana < $brojstrana) {$x=$brojstrana;
echo '<a href="'.$_SERVER['PHP_SELF'].'?strana='.$x.'&naziv='.$naziv.'&grupa='.$grupa.'">>></a>';}
?>
<div style="clear:both;"></div>

</div>
</div>
<!-- PAGINACIJAM END -->

</main>

<?php include("cpanel-futer.php"); ?>