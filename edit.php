<?php include("cpanel-head.php"); ?>
<style>
/* TELO */
body{background:#f0f0fa;}
main{width:700px; min-height:500px; margin:90px 100px 70px 260px; border-radius:14px; position:relative; background:#fff; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
main div{width:600px; height:40px; line-height:30px; font-size:30px; text-align:center; color:#222; margin:20px auto; background:#fff; font-family:geomanist;}
main span{color:#aa813d; font-size:18px; padding:10px; font-family:geomanist;}
main form{width:600px; margin:0 auto;}
input[type="text"], input[type="number"]{width:100%; height:40px; font-size:18px; padding-left:10px; border:solid 1px #ccc; border-radius:20px; margin:5px; font-family:geomanist;}
textarea{width:100%; min-height:150px; font-size:18px; padding-left:10px; border:none; margin:5px; border-radius:20px; border:solid 1px #ccc; resize:none;}
input[type="file"]{width:100%; height:40px; margin-top:5px; display:none;}
input[type="submit"]{width:100%; height:40px; text-align:center; font-size:18px; color:#dfdfeb; background:#aa813d; border:none; margin:20px auto; border-radius:20px; font-family:geomanist;}
input[type="submit"]:hover{cursor:pointer; border:solid 1px #fff;}

main form img{width:120px; height:110px; object-fit:cover; float:left; position:relative;}

.neka{display:block; width:110px; height:110px; position:relative; float:left; border:solid 1px #dfdfeb; margin:5px; overflow:hidden; border-radius:5px;}
.neka a{display:block; text-decoration:none; width:20px; height:20px; line-height:20px; text-align:center; color:#fff; position:absolute; right:2px; top:2px; border-radius:10px; z-index:2; background:#f00; font-size:10px; font-weight:bold;}
.neka a:hover{background:#f90; color:#222;}

main form label{display:block; width:90px; height:25px; line-height:25px; font-size:14px; text-align:center; border-radius:5px; background:#445175; color:#dfdfeb; position:absolute; bottom:2px; left:12px; z-index:1;}
main form label:hover{color:#fff; cursor:pointer; border:solid 1px #fff;}


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
$id=$_GET["id"];
$_SESSION["id"]=$id;
$sql="SELECT * FROM namestaj WHERE id='$id' ";
$upit=mysqli_query($conn,$sql);
$red=mysqli_fetch_assoc($upit);
?>

<main>
<div>Napravite izmene</div>
<form action="editproizvoda.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?=$red["id"]?>">
<span>Grupa proizvoda</span>
<input type="text" name="grupa" value="<?=$red["grupa"]?>">
<span>Naziv proizvoda</span>
<input type="text" name="naziv" value="<?=$red["naziv"]?>">
<span>Podnaziv proizvoda</span>
<input type="text" name="podnaziv" value="<?=$red["podnaziv"]?>">
<span>Cena proizvoda</span>
<input type="text" name="cena" value="<?=$red["cena"]?>">
<span>Broj komada</span>
<input type="number" name="brojkomada" value="<?=$red["brojkomada"]?>">
<span>Opis proizvoda</span>
<textarea name="opis"><?=$red["opis"]?></textarea>
<!-- slike -->
<iframe src="editslike.php" width="620" height="300" scrolling="no" frameborder="0"></iframe>
<input type="submit" value="IZMENI">
</form>
</main>
<?php include("cpanel-futer.php"); ?>