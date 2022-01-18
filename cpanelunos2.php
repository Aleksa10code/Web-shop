<?php include("cpanel-head.php"); ?>
<style>
/* TELO */
body{background:#f0f0fa;}
main{width:700px; min-height:100px; margin:90px 30px 40px 240px; border-radius:15px; position:relative; background:#f1f1f1; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
main div{width:600px; height:40px; font-size:30px; text-align:center; color:#222; margin:10px auto; font-family:geomanist;}
main form{width:600px; margin:0 auto;}
input[type="text"], input[type="number"] {width:100%; height:40px; font-size:18px; color:#222; padding-left:10px; border:solid 1px #b2b282; margin-top:5px; border-radius:15px; font-family:geomanist; outline:none;}
textarea{width:100%; min-height:150px; font-size:18px; padding-left:10px; border:solid 1px #b2b282; margin-top:5px; border-radius:15px; font-family:geomanist; resize:none; outline:none;}
input[type="file"] {width:100%; height:40px; border:solid 1px #ccc; margin-top:5px; border-radius:15px; color:#f1f1f1;}
input[type="submit"] {width:100%; height:40px; text-align:center; font-size:18px; color:#ddd; background:#aa813d; outline:none; border-radius:15px; margin:5px auto; cursor:pointer; border:none; font-family:geomanist;}
input[type="submit"]:hover{border:solid 1px #dfdfef;}

@media only screen and (max-width: 480px) {
main{width:100%;}
main div{width:90%; margin:5%;}
main form{width:90%; margin:5%;}
}
</style>
</head>

<body>

<!--TELO-->
<main>
<div>Unesite proizvod</div>
<form action="unosproizvoda.php" method="post" enctype="multipart/form-data">
<input type="text" name="grupa" placeholder="Grupa proizvoda">
<input type="text" name="naziv" placeholder="Naziv proizvoda">
<input type="text" name="podnaziv" placeholder="Podnaziv proizvoda">
<input type="text" name="cena" placeholder="Cena proizvoda">
<input type="number" name="brojkomada" placeholder="Broj komada">
<textarea name="opis" placeholder="Unesite opis.."></textarea>
<input type="file" name="slika1">
<input type="file" name="slika2">
<input type="file" name="slika3">
<input type="file" name="slika4">
<input type="file" name="slika5">
<input type="file" name="slika6">
<input type="file" name="slika7">
<input type="file" name="slika8">
<input type="file" name="slika9">
<input type="file" name="slika10">
<input type="submit" value="POTVRDI">
</form>
</main>

<?php include("cpanel-futer.php"); ?>