<?php include("cpanel-head.php"); ?>

<style>
body{background:#f0f0fa;}
.naslov{position:absolute; left:450px; top:80px; font-size:30px; font-family:geomanist;}
.naslov2{font-size:24px; font-family:geomanist; position:absolute; top:100px; left:300px;}

.telo{width:600px; min-height:100px; margin:160px 50px 30px 260px; background:#f1f1f1; border-radius:15px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
.subscribe{border-bottom:solid 2px #dfdfef; width:500px; margin:20px 10px 10px 50px;}
.red1{background:#ccc; color:#222; padding:10px; border-radius:10px;}
.red2{background:#ccc; color:#222; padding:5px; border-radius:10px; text-align:right; padding-right:10px;}
.red3{background:#ccc; padding:5px; min-height:30px; text-align:right; padding-right:14px; border-radius:10px;}
.red3 a{color:#222; text-decoration:none; font-size:18px;}
.red3 a:hover{border-bottom:solid 1px #555;}

form{width:596px; margin:20px auto 10px auto; padding:5px; border-radius:10px;}
input{width:100%; height:40px; font-size:18px; padding-left:10px; background:#aa813d; border-radius:15px; margin:5px 0; border:none; font-family:geomanist; color:#f1f1f1; outline:none;}
input::placeholder{color:#f1f1f1;}
input[type="submit"]:hover{border:solid 1px #dfdfef; cursor:pointer;}
textarea{width:100%; height:150px; padding:5px; border-radius:15px; font-family:geomanist; outline:none; resize:none;}
</style>

<div class="naslov">Prikaz Subscribe</div>

<h2 class="naslov2">Možete poslati maksimalno 50 poruka odjednom.</h2>


<div class="telo">

<!--SLANJE SUBSCRIBE PORUKE-->
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$poslato=$_POST["poslato"];
$poruka=$_POST["poruka"];
	
/* slanje mejlova */
$sql="SELECT * FROM woodsubscribe WHERE poslato='$poslato' LIMIT 50 ";
$upit=mysqli_query($conn,$sql);
$x=$poslato + 1;
while($red=mysqli_fetch_assoc($upit)){
$mail=$red["email"];
$id=$red["id"];
mail($mail, "woodshop", $poruka);	
		
$sql2="UPDATE woodsubscribe SET poslato='$x' WHERE id='$id' ";	
mysqli_query($conn,$sql2);
}} ?>

<form action="subscribeedit.php" method="post">
<input type="number" name="poslato" placeholder="Napišite broj od 0 do xxx">
<textarea name="poruka"></textarea>
<input type="submit" value="POŠALJI">
</form>

<!--PRIKAZ SUBSCRIBE EMAIL-A-->
<?php 
$id=$_GET['id'];
$sql="DELETE FROM woodsubscribe WHERE id='$id' ";
mysqli_query($conn,$sql);

$sql="SELECT * FROM woodsubscribe ORDER BY id DESC";
$upit=mysqli_query($conn,$sql);
while($red=mysqli_fetch_assoc($upit)) { ?>

<table class="subscribe" cellspacing="1">	
<tr>
<td class="red1"><?=$red["email"]?></td>
<td class="red2"><?=$red["datum"]?></td>
</tr>
<tr>
<td style="color:#3e9be2; background:#ccc; font-size:20px; padding-left:5px; border-radius:10px;"><?=$red["poslato"]?></td>
<td class="red3"><a href="subscribeedit.php?id=<?=$red['id']?>">OBRIŠI</a></td>
</table>
<?php } ?>
</div>

<?php include("cpanel-futer.php"); ?>