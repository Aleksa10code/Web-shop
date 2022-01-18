<?php include("head.php"); ?>

<style>
.telo{width:1000px; min-height:600px; margin:auto;}
.telo::after{clear:both; display:table; content:"";}
.telo a{width:364px; height:400px; display:block; float:left; text-decoration:none; margin:17.50px;  overflow:hidden;}
.telo a:hover{opacity:0.7;}
.telo img{width:365px; height:250px; display:block; object-fit:cover;}
.telo header{width:365px; height:50px; margin:0; padding:30px 0 0 0; font-size:15px; line-height:16px; font-weight:600; color:#222; background:#fff;}
.telo main{width:365px; height:50px; margin:0; padding:0; background:#fff; font-size:14px; line-height:14px; letter-spacing:2px; font-weight:lighter; padding:10px 0 0 0; color:#222;}
.telo footer{width:365px; height:50px; margin:0; padding:0; background:#fff; color:#222; font-weight:700; font-size:17px;}

h1{text-align:center; font-size:60px; color:#a27e66; font-family:Camp Granada NF Regular;}

@media only screen and (max-width: 480px) {
.telo{width:100%;}
.telo a{width:90%; margin:5%;}
.telo img{width:100%;}
.telo header{width:100%;}
.telo main{width:100%;}
.telo footer{width:100%;}	
h1{font-size:36px;}	
}

</style>


<div style="background:#fff; min-height:600px;">
<div class="telo">

<h1>FOTELJE I STOLICE</h1>

<a href="#">
<img src="slike/slika40.jpg">
<header>FOTELJA LUX</header>
<main>STOF</main>
<footer>90,000.00 RSD</footer>
</a>

</div>
</div>

<?php include("futer.php"); ?>