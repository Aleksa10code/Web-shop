<?php include("cpanel-head.php"); ?>
<style>
/* TELO */
body{background:#f0f0fa;}
main{width:800px; min-height:100px; margin:90px 30px 40px 260px; border-radius:15px; position:relative; background:#f1f1f1; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
main div{width:700px; height:40px; font-size:30px; text-align:center; color:#222; margin:10px auto; font-family:geomanist;}
main form{width:700px; margin:0 auto;}
input[type="text"], input[type="number"] {width:100%; height:40px; font-size:18px; color:#222; padding-left:10px; border:solid 1px #b2b282; margin-top:5px; border-radius:15px; font-family:geomanist; outline:none;}
textarea{width:100%; min-height:150px; font-size:18px; padding-left:10px; border:solid 1px #b2b282; margin-top:5px; border-radius:15px; font-family:geomanist; resize:none; outline:none;}
input[type="file"] {width:100%; height:40px; border:solid 1px #ccc; margin-top:5px; border-radius:15px; color:#f1f1f1;}
input[type="submit"] {width:100%; height:40px; text-align:center; font-size:18px; color:#ddd; background:#aa813d; outline:none; border-radius:15px; margin:5px auto; cursor:pointer; border:none; font-family:geomanist; transition:all 0.3s;}
input[type="submit"]:hover{color:#222; transition:all 0.3s;}

.custom-file-upload{min-width:120px; height:30px; line-height:30px; margin:15px 5px 15px 5px; padding:0 5px; text-align:center; cursor:pointer; display:inline-block; background:#333; color:#fff; transition:all 0.5s; border-radius:10px;}
.custom-file-upload:hover{background:#333; color:#cdb27f; transition:all 0.5s;}

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<label for="file-upload" class="custom-file-upload">
<i class="fa fa-cloud-upload"></i> Izaberi sliku
</label>
<input id="file-upload" type="file" name="slika1" style="display:none;">
<script type="text/javascript">
$('#file-upload').change(function() {
var i = $(this).prev('label').clone();
var file = $('#file-upload')[0].files[0].name;
$(this).prev('label').text(file);
});
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<label for="file-upload2" class="custom-file-upload">
<i class="fa fa-cloud-upload"></i> Izaberi sliku
</label>
<input id="file-upload2" type="file" name="slika2" style="display:none;">
<script type="text/javascript">
$('#file-upload2').change(function() {
var i = $(this).prev('label').clone();
var file = $('#file-upload2')[0].files[0].name;
$(this).prev('label').text(file);
});
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<label for="file-upload3" class="custom-file-upload">
<i class="fa fa-cloud-upload"></i> Izaberi sliku
</label>
<input id="file-upload3" type="file" name="slika3" style="display:none;">
<script type="text/javascript">
$('#file-upload3').change(function() {
var i = $(this).prev('label').clone();
var file = $('#file-upload3')[0].files[0].name;
$(this).prev('label').text(file);
});
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<label for="file-upload4" class="custom-file-upload">
<i class="fa fa-cloud-upload"></i> Izaberi sliku
</label>
<input id="file-upload4" type="file" name="slika4" style="display:none;">
<script type="text/javascript">
$('#file-upload4').change(function() {
var i = $(this).prev('label').clone();
var file = $('#file-upload4')[0].files[0].name;
$(this).prev('label').text(file);
});
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<label for="file-upload5" class="custom-file-upload">
<i class="fa fa-cloud-upload"></i> Izaberi sliku
</label>
<input id="file-upload5" type="file" name="slika5" style="display:none;">
<script type="text/javascript">
$('#file-upload5').change(function() {
var i = $(this).prev('label').clone();
var file = $('#file-upload5')[0].files[0].name;
$(this).prev('label').text(file);
});
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<label for="file-upload6" class="custom-file-upload">
<i class="fa fa-cloud-upload"></i> Izaberi sliku
</label>
<input id="file-upload6" type="file" name="slika6" style="display:none;">
<script type="text/javascript">
$('#file-upload6').change(function() {
var i = $(this).prev('label').clone();
var file = $('#file-upload6')[0].files[0].name;
$(this).prev('label').text(file);
});
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<label for="file-upload7" class="custom-file-upload">
<i class="fa fa-cloud-upload"></i> Izaberi sliku
</label>
<input id="file-upload7" type="file" name="slika7" style="display:none;">
<script type="text/javascript">
$('#file-upload7').change(function() {
var i = $(this).prev('label').clone();
var file = $('#file-upload7')[0].files[0].name;
$(this).prev('label').text(file);
});
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<label for="file-upload8" class="custom-file-upload">
<i class="fa fa-cloud-upload"></i> Izaberi sliku
</label>
<input id="file-upload8" type="file" name="slika8" style="display:none;">
<script type="text/javascript">
$('#file-upload8').change(function() {
var i = $(this).prev('label').clone();
var file = $('#file-upload8')[0].files[0].name;
$(this).prev('label').text(file);
});
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<label for="file-upload9" class="custom-file-upload">
<i class="fa fa-cloud-upload"></i> Izaberi sliku
</label>
<input id="file-upload9" type="file" name="slika9" style="display:none;">
<script type="text/javascript">
$('#file-upload9').change(function() {
var i = $(this).prev('label').clone();
var file = $('#file-upload9')[0].files[0].name;
$(this).prev('label').text(file);
});
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<label for="file-upload10" class="custom-file-upload">
<i class="fa fa-cloud-upload"></i> Izaberi sliku
</label>
<input id="file-upload10" type="file" name="slika10" style="display:none;">
<script type="text/javascript">
$('#file-upload10').change(function() {
var i = $(this).prev('label').clone();
var file = $('#file-upload10')[0].files[0].name;
$(this).prev('label').text(file);
});
</script>

<input type="submit" value="POTVRDI">
</form>
</main>

<?php include("cpanel-futer.php"); ?>