<?php
$uid=$_GET["id"];
include("connect.php");

/* promena broja komada */
$sql="SELECT * FROM woodkorpa WHERE woodshopuser='$uid' AND isporuceno = 0 ORDER BY naruceno DESC";
$upit=mysqli_query($conn,$sql);
$red=mysqli_fetch_assoc($upit);
$cookie=$red["korpa"];

$niz=explode("-", $cookie);
$broj=count($niz) -1;

for($x=0;$x<$broj;$x++){
	
$exp=explode("*", $niz[$x]);
$id=$exp[0];
$komada=$exp[1];

$sql="SELECT * FROM namestaj WHERE id='$id'";
$upit=mysqli_query($conn,$sql);
$red=mysqli_fetch_assoc($upit);
$brojkomada=$red["brojkomada"];
$prodato=$red["prodato"];

$brojkomada=$brojkomada - $komada;
$prodato=$prodato + $komada;

$sql="UPDATE namestaj SET brojkomada='$brojkomada', prodato='$prodato'  WHERE id='$id'";
mysqli_query($conn,$sql);
}

$datum=date("Y-m-d h:i");
$sql5="UPDATE woodkorpa SET isporuceno='$datum' WHERE woodshopuser='$uid'";
mysqli_query($conn,$sql5);
header("Location: isporuceno.php");
?> 