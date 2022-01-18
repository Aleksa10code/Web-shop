<?php ob_start(); include("cpanel-head.php"); ?>

<style>
body{background:#f0f0fa;}
.naslov{position:absolute; left:320px; top:80px; font-size:30px; font-family:geomanist;}
.telo{width:600px; min-height:100px; margin:140px 50px 30px 260px; background:#f1f1f1; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border:solid 1px #f1f1f1; border-radius:15px;}
.nositabelu{width:502px; border-bottom:solid 1px #555; margin:20px auto;}
.onama{width:500px; margin:auto; border-collapse:collapse;}
.red1{background:#f1f1f1; color:#222; padding:10px; font-family:geomanist;}
.red2{background:#f1f1f1; color:#222; padding:5px; font-family:geomanist;}
.red3{background:#f1f1f1; color:#222; padding:5px; font-family:geomanist;}
.red4{background:#f1f1f1; color:#222; padding:5px; font-family:geomanist;}
.red5{background:#f1f1f1; color:#222; padding:5px; font-family:geomanist;}
.red6{background:#f1f1f1; padding-right:10px; text-align:right; font-family:geomanist;}
.red6 a{color:#fd5949; text-decoration:none; font-size:18px;}
.red6 a:hover{border-bottom:solid 2px #fd5949;}
</style>

<div class="naslov">Prikaz svih dospelih kontakata</div>

<div class="telo">

<?php 

$id=$_GET['id'];
$sql2="DELETE FROM woodkontakt WHERE id='$id'";
mysqli_query($conn,$sql2);

$sql="SELECT * FROM woodkontakt ORDER BY id DESC";
$upit=mysqli_query($conn,$sql);
while($red=mysqli_fetch_assoc($upit)) { ?>

<div class="nositabelu">
<table class="onama" cellspacing="1">
<tr>
<td class="red1"><?=$red["ime"]?></td>
<td class="red2"><?=$red["datum"]?></td>
</tr>
<tr>
<td class="red3"><?=$red["tekst"]?></td>
<td class="red4"><?=$red["telefon"]?></td>
</tr>
<tr>
<td class="red5"><?=$red["email"]?></td>
<td class="red6"><a href="onamaedit.php?id=<?=$red['id']?>">OBRIŠI</a></td>
</tr>

</table>
</div>
<?php } ?>
</div>

<?php include("cpanel-futer.php"); ?>