<?php
session_start();
$server="mysql443.loopia.se";
$username="aleksaw@w57130";
$password="Aleksawood";
$dbname="woodshop_ga";
$conn=mysqli_connect($server, $username, $password, $dbname);
?>
<style>
/* TELO */
.main{width:610px; min-height:290px; margin:0 auto; position:relative; border:solid 1px #ccc; background:#fff; overflow:hidden; border-radius:14px;}
.main form{width:610px; margin:0 auto; font-family:geomanist;}
.main input[type="text"], input[type="number"]{width:100%; height:40px; font-size:18px; padding-left:10px; border:none; border-radius:20px; margin:5px; font-family:geomanist;}
.main input[type="file"]{width:100%; height:40px; margin-top:5px; display:none;}
.main input[type="submit"]:hover{cursor:pointer; border:solid 1px #fff;}

.main form img{width:120px; height:110px; object-fit:cover; float:left; position:relative;}

.neka{display:block; width:110px; height:110px; position:relative; float:left; border:solid 1px #dfdfeb; margin:5px 10px 0 0; overflow:hidden; border-radius:5px;}
.neka a{display:block; text-decoration:none; width:20px; height:20px; line-height:20px; text-align:center; color:#fff; position:absolute; right:2px; top:2px; border-radius:10px; z-index:2; background:#f00; font-size:10px; font-weight:bold;}
.neka a:hover{background:#f90; color:#222;}

.main form label{display:block; width:90px; height:25px; line-height:25px; font-size:14px; text-align:center; border-radius:5px; background:#aa813d; color:#dfdfeb; position:absolute; bottom:2px; left:12px; z-index:1;}
.main form label:hover{color:#fff; cursor:pointer; border:solid 1px #fff;}


@media only screen and (max-width: 480px) {
main{width:100%;}
main div{width:90%; margin:5%;}
main form{width:90%; margin:5%;}

}

@media only screen and (min-width: 481px) and (max-width: 1024px) {
main{width:90%; margin:70px 5%;}
main div{width:90%; margin:5%;}
main form{width:90%; margin:5%;}
}

</style>
</head>

<body>
<!--TELO-->
<?php
$id=$_SESSION["id"];
$sql="SELECT * FROM namestaj WHERE id='$id' ";
$upit=mysqli_query($conn,$sql);
$red=mysqli_fetch_assoc($upit);
?>

<main class="main">
<form action="editproizvodaslike.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?=$id?>">
<span class="neka">
<label for="sl1" style="font-family:geomanist;">Choose file</label>
<?php if(!empty($red["slika1"])) {echo '<img src="'.$red["slika1"].'">';
echo '<a href="deleteslika.php?id='.$red["id"].'&slika='.$red["slika1"].'&no=slika1">&#9587;</a>';} ?>
<input type="file" name="slika1" id="sl1" onChange="this.form.submit()">
</span>

<span class="neka">
<label for="sl2">Choose file</label>
<?php if(!empty($red["slika2"])) { echo '<img src="'.$red["slika2"].'">';
echo '<a href="deleteslika.php?id='.$red["id"].'&slika='.$red["slika2"].'&no=slika2">&#9587;</a>';} ?>
<input type="file" name="slika2" id="sl2" onChange="this.form.submit()">
</span>

<span class="neka">
<label for="sl3">Choose file</label>
<?php if(!empty($red["slika3"])) { echo '<img src="'.$red["slika3"].'">';
echo '<a href="deleteslika.php?id='.$red["id"].'&slika='.$red["slika3"].'&no=slika3">&#9587;</a>';} ?>
<input type="file" name="slika3" id="sl3" onChange="this.form.submit()">
</span>

<span class="neka">
<label for="sl4">Choose file</label>
<?php if(!empty($red["slika4"])) { echo '<img src="'.$red["slika4"].'">';
echo '<a href="deleteslika.php?id='.$red["id"].'&slika='.$red["slika4"].'&no=slika4">&#9587;</a>';} ?>
<input type="file" name="slika4" id="sl4" onChange="this.form.submit()">
</span>

<span class="neka">
<label for="sl5">Choose file</label>
<?php if(!empty($red["slika5"])) { echo '<img src="'.$red["slika5"].'">';
echo '<a href="deleteslika.php?id='.$red["id"].'&slika='.$red["slika5"].'&no=slika5">&#9587;</a>';} ?>
<input type="file" name="slika5" id="sl5" onChange="this.form.submit()">
</span>

<span class="neka">
<label for="sl6">Choose file</label>
<?php if(!empty($red["slika6"])) { echo '<img src="'.$red["slika6"].'">';
echo '<a href="deleteslika.php?id='.$red["id"].'&slika='.$red["slika6"].'&no=slika6">&#9587;</a>';} ?>
<input type="file" name="slika6" id="sl6" onChange="this.form.submit()">
</span>

<span class="neka">
<label for="sl7">Choose file</label>
<?php if(!empty($red["slika7"])) { echo '<img src="'.$red["slika7"].'">';
echo '<a href="deleteslika.php?id='.$red["id"].'&slika='.$red["slika7"].'&no=slika7">&#9587;</a>';} ?>
<input type="file" name="slika7" id="sl7" onChange="this.form.submit()">
</span>

<span class="neka">
<label for="sl8">Choose file</label>
<?php if(!empty($red["slika8"])) { echo '<img src="'.$red["slika8"].'">';
echo '<a href="deleteslika.php?id='.$red["id"].'&slika='.$red["slika8"].'&no=slika8">&#9587;</a>';} ?>
<input type="file" name="slika8" id="sl8" onChange="this.form.submit()">
</span>

<span class="neka">
<label for="sl9">Choose file</label>
<?php if(!empty($red["slika9"])) { echo '<img src="'.$red["slika9"].'">';
echo '<a href="deleteslika.php?id='.$red["id"].'&slika='.$red["slika9"].'&no=slika9">&#9587;</a>';} ?>
<input type="file" name="slika9" id="sl9" onChange="this.form.submit()">
</span>

<span class="neka">
<label for="sl10">Choose file</label>
<?php if(!empty($red["slika10"])) { echo '<img src="'.$red["slika10"].'">';
echo '<a href="deleteslika.php?id='.$red["id"].'&slika='.$red["slika10"].'&no=slika10">&#9587;</a>';} ?>
<input type="file" name="slika10" id="sl10" onChange="this.form.submit()">
</span>

</form>
</main>

<?php mysqli_close($conn); ?>

</body>
</html>