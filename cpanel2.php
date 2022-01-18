<?php include("cpanel-head.php"); ?>

<style>
/* TELO */
main{width:800px; min-height:700px; margin:100px 0 30px 190px; border:solid 2px #222; position:relative; background:#364061;}
.proizvodi{border-collapse:collapse; width:780px; margin:10px; font-family:geomanist;}
.proizvodi td{border:solid 1px #e7e9ed; text-align:center;}
.proizvodi th{border:solid 1px #e7e9ed; text-align:center;}

.delete{text-decoration:none; text-align:center; font-size:14px; background:#e7e9ed; color:#e45164; border-radius:50%; display:block; width:65px; height:65px; line-height:65px; font-weight:bold; font-family:geomanist; margin:auto;}
.delete:hover{background:#b8babd;}
.edit{text-decoration:none; text-align:center; font-size:14px; background:#e7e9ed; color:#e45164; border-radius:50%; display:block; width:65px; height:65px; line-height:65px; font-weight:bold; font-family:geomanist; margin:auto;}
.edit:hover{background:#b8babd;}

form{width:700px; height:50px; margin:6px 0 0 10px;}
input{width:160px; height:30px; padding-left:10px; font-size:18px; font-family:geomanist;}
input[type="submit"]{width:80px; height:30px; line-height:20px; border-radius:15px; cursor:pointer; border:none; background:#e7e9ed; font-size:17px; text-align:center; font-family:geomanist;}
input[type="submit"]:hover{background:#b8babd;}
select{height:32px; padding-left:4px; font-family:geomanist;}

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

@media only screen and (min-width: 481px) and (max-width: 1024px) {

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
<th style="color:#fff;">Slika</th>
<th style="color:#65dd97;">Grupa</th>
<th style="color:#f29d00;">Naziv</th>
<th style="color:#cff540;">Broj komada</th>
<th style="color:#cff540;">Broj pregleda</th>
<th style="color:#e46664;">Obriši</th>
<th style="color:#e46664;">Izmeni</th>
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
<td width="120" height="100"><img src="<?=$red["slika1"]?>" width="100%" height="100"></td>
<td style="color:#65dd9b; font-family:geomanist;" width="110"><?=$red["grupa"]?></td>
<td style="color:#ff9d00; font-family:geomanist;" width="150"><?=$red["naziv"]?></td>
<td style="color:#d9f540; font-family:geomanist;" width="70"><?=$red["brojkomada"]?></td>
<td  style="color:#d9f540; font-family:geomanist;" width="70"><?=$red["pregleda"]?></td>
<td width="70">
<a class="delete" href="#pitanje<?=$red['id']?>">OBRIŠI</a>
<style>
#pitanje<?=$red['id']?>{display:none;}
#pitanje<?=$red['id']?>:target{position:fixed; left:calc(50% - 150px); top:calc(50% - 100px); width:300px; height:200px; background:#ccd; z-index:3; display:block;}
#pitanje<?=$red['id']?> span{display:block; width:200px; position:absolute; left:calc(50% - 100px); top:30px;}
</style>

<div id="pitanje<?=$red['id']?>">
<span>Da li ste sigurni da želite da obrišete proizvod?</span>
<a class="delete" href="#" style="position:absolute; left:50px; bottom:50px;">ODUSTANI</a>
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