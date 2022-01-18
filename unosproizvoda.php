<?php
$server="s369.loopia.se";
$username="wood@w61685";
$password="aleksawood4";
$dbname="woodshop_ga";
$conn=mysqli_connect($server, $username, $password, $dbname);

$grupa=$_POST["grupa"];
$naziv=$_POST["naziv"];
$podnaziv=$_POST["podnaziv"];
$cena=$_POST["cena"];
$brojkomada=$_POST["brojkomada"];
$opis=$_POST["opis"];

/* ako slika nije prazna */
if(!empty($_FILES["slika1"]["name"])) {
	
/* tip slike */
if($_FILES["slika1"]["type"]=="image/jpeg"){
$slika1="slike/".time().uniqid().".jpg";
move_uploaded_file($_FILES["slika1"]["tmp_name"],$slika1);

/* resize */
$src=imagecreatefromjpeg($slika1);
list($w, $h)=getimagesize($slika1);
if($w>1800 or $h>1500){
$nw=1800;
$nh=1500;

if($nw/$nh<$w/$h){$nh=$h/$w*1500;}
elseif($nw/$nh>$w/$h){$nw=$w/$h*1800;}
else{}

$tmp=imagecreatetruecolor($nw, $nh);
imagecopyresampled($tmp, $src, 0,0,0,0, $nw, $nh, $w, $h);
imagejpeg($tmp, $slika1, 100);
imagedestroy($src);
imagedestroy($tmp);}
/* resize */
}

/* tip slike */
elseif($_FILES["slika1"]["type"]=="image/png"){
$slika1="slike/".time().uniqid().".png";
move_uploaded_file($_FILES["slika1"]["tmp_name"],$slika1);

/* resize */
$src=imagecreatefrompng($slika1);
list($w, $h)=getimagesize($slika1);
if($w>1800 or $h>1500){
$nw=1800;
$nh=1500;

if($nw/$nh<$w/$h){$nh=$h/$w*1500;}
elseif($nw/$nh>$w/$h){$nw=$w/$h*1800;}
else{}

$tmp=imagecreatetruecolor($nw, $nh);
imagecopyresampled($tmp, $src, 0,0,0,0, $nw, $nh, $w, $h);
imagepng($tmp, $slika1, 9);
imagedestroy($src);
imagedestroy($tmp);}
/* resize */
}
else{}

} else {$slika1="";}	
/* kraj uslova da nije prazna */

/* ako slika2 nije prazna */
if(!empty($_FILES["slika2"]["name"])) {
	
/* tip slike */
if($_FILES["slika2"]["type"]=="image/jpeg"){
$slika2="slike/".time().uniqid().".jpg";
move_uploaded_file($_FILES["slika2"]["tmp_name"],$slika2);

/* resize */
$src=imagecreatefromjpeg($slika2);
list($w, $h)=getimagesize($slika2);
if($w>1800 or $h>1500){
$nw=1800;
$nh=1500;

if($nw/$nh<$w/$h){$nh=$h/$w*1500;}
elseif($nw/$nh>$w/$h){$nw=$w/$h*1800;}
else{}

$tmp=imagecreatetruecolor($nw, $nh);
imagecopyresampled($tmp, $src, 0,0,0,0, $nw, $nh, $w, $h);
imagejpeg($tmp, $slika2, 100);
imagedestroy($src);
imagedestroy($tmp);}
/* resize */
}

/* tip slike */
elseif($_FILES["slika2"]["type"]=="image/png"){
$slika2="slike/".time().uniqid().".png";
move_uploaded_file($_FILES["slika2"]["tmp_name"],$slika2);

/* resize */
$src=imagecreatefrompng($slika2);
list($w, $h)=getimagesize($slika2);
if($w>1800 or $h>1500){
$nw=1800;
$nh=1500;

if($nw/$nh<$w/$h){$nh=$h/$w*1500;}
elseif($nw/$nh>$w/$h){$nw=$w/$h*1800;}
else{}

$tmp=imagecreatetruecolor($nw, $nh);
imagecopyresampled($tmp, $src, 0,0,0,0, $nw, $nh, $w, $h);
imagepng($tmp, $slika2, 9);
imagedestroy($src);
imagedestroy($tmp);}
/* resize */
}
else{}

} else {$slika2="";}	
/* kraj uslova da nije prazna */

/* ako slika3 nije prazna */
if(!empty($_FILES["slika3"]["name"])) {
	
/* tip slike */
if($_FILES["slika3"]["type"]=="image/jpeg"){
$slika3="slike/".time().uniqid().".jpg";
move_uploaded_file($_FILES["slika3"]["tmp_name"],$slika3);

/* resize */
$src=imagecreatefromjpeg($slika3);
list($w, $h)=getimagesize($slika3);
if($w>1800 or $h>1500){
$nw=1800;
$nh=1500;

if($nw/$nh<$w/$h){$nh=$h/$w*1500;}
elseif($nw/$nh>$w/$h){$nw=$w/$h*1800;}
else{}

$tmp=imagecreatetruecolor($nw, $nh);
imagecopyresampled($tmp, $src, 0,0,0,0, $nw, $nh, $w, $h);
imagejpeg($tmp, $slika3, 100);
imagedestroy($src);
imagedestroy($tmp);}
/* resize */
}

/* tip slike */
elseif($_FILES["slika3"]["type"]=="image/png"){
$slika3="slike/".time().uniqid().".png";
move_uploaded_file($_FILES["slika3"]["tmp_name"],$slika3);

/* resize */
$src=imagecreatefrompng($slika3);
list($w, $h)=getimagesize($slika3);
if($w>1800 or $h>1500){
$nw=1800;
$nh=1500;

if($nw/$nh<$w/$h){$nh=$h/$w*1500;}
elseif($nw/$nh>$w/$h){$nw=$w/$h*1800;}
else{}

$tmp=imagecreatetruecolor($nw, $nh);
imagecopyresampled($tmp, $src, 0,0,0,0, $nw, $nh, $w, $h);
imagepng($tmp, $slika3, 9);
imagedestroy($src);
imagedestroy($tmp);}
/* resize */
}
else{}

} else {$slika3="";}	
/* kraj uslova da nije prazna */

/* ako slika4 nije prazna */
if(!empty($_FILES["slika4"]["name"])) {
	
/* tip slike */
if($_FILES["slika4"]["type"]=="image/jpeg"){
$slika4="slike/".time().uniqid().".jpg";
move_uploaded_file($_FILES["slika4"]["tmp_name"],$slika4);

/* resize */
$src=imagecreatefromjpeg($slika4);
list($w, $h)=getimagesize($slika4);
if($w>1800 or $h>1500){
$nw=1800;
$nh=1500;

if($nw/$nh<$w/$h){$nh=$h/$w*1500;}
elseif($nw/$nh>$w/$h){$nw=$w/$h*1800;}
else{}

$tmp=imagecreatetruecolor($nw, $nh);
imagecopyresampled($tmp, $src, 0,0,0,0, $nw, $nh, $w, $h);
imagejpeg($tmp, $slika4, 100);
imagedestroy($src);
imagedestroy($tmp);}
/* resize */
}

/* tip slike */
elseif($_FILES["slika4"]["type"]=="image/png"){
$slika4="slike/".time().uniqid().".png";
move_uploaded_file($_FILES["slika4"]["tmp_name"],$slika4);

/* resize */
$src=imagecreatefrompng($slika4);
list($w, $h)=getimagesize($slika4);
if($w>1800 or $h>1500){
$nw=1800;
$nh=1500;

if($nw/$nh<$w/$h){$nh=$h/$w*1500;}
elseif($nw/$nh>$w/$h){$nw=$w/$h*1800;}
else{}

$tmp=imagecreatetruecolor($nw, $nh);
imagecopyresampled($tmp, $src, 0,0,0,0, $nw, $nh, $w, $h);
imagepng($tmp, $slika4, 9);
imagedestroy($src);
imagedestroy($tmp);}
/* resize */
}
else{}

} else {$slika4="";}	
/* kraj uslova da nije prazna */

/* ako slika5 nije prazna */
if(!empty($_FILES["slika5"]["name"])) {
	
/* tip slike */
if($_FILES["slika5"]["type"]=="image/jpeg"){
$slika5="slike/".time().uniqid().".jpg";
move_uploaded_file($_FILES["slika5"]["tmp_name"],$slika5);

/* resize */
$src=imagecreatefromjpeg($slika5);
list($w, $h)=getimagesize($slika5);
if($w>1800 or $h>1500){
$nw=1800;
$nh=1500;

if($nw/$nh<$w/$h){$nh=$h/$w*1500;}
elseif($nw/$nh>$w/$h){$nw=$w/$h*1800;}
else{}

$tmp=imagecreatetruecolor($nw, $nh);
imagecopyresampled($tmp, $src, 0,0,0,0, $nw, $nh, $w, $h);
imagejpeg($tmp, $slika5, 100);
imagedestroy($src);
imagedestroy($tmp);}
/* resize */
}

/* tip slike */
elseif($_FILES["slika5"]["type"]=="image/png"){
$slika5="slike/".time().uniqid().".png";
move_uploaded_file($_FILES["slika5"]["tmp_name"],$slika5);

/* resize */
$src=imagecreatefrompng($slika5);
list($w, $h)=getimagesize($slika5);
if($w>1800 or $h>1500){
$nw=1800;
$nh=1500;

if($nw/$nh<$w/$h){$nh=$h/$w*1500;}
elseif($nw/$nh>$w/$h){$nw=$w/$h*1800;}
else{}

$tmp=imagecreatetruecolor($nw, $nh);
imagecopyresampled($tmp, $src, 0,0,0,0, $nw, $nh, $w, $h);
imagepng($tmp, $slika5, 9);
imagedestroy($src);
imagedestroy($tmp);}
/* resize */
}
else{}

} else {$slika5="";}	
/* kraj uslova da nije prazna */

/* ako slika6 nije prazna */
if(!empty($_FILES["slika6"]["name"])) {
	
/* tip slike */
if($_FILES["slika6"]["type"]=="image/jpeg"){
$slika6="slike/".time().uniqid().".jpg";
move_uploaded_file($_FILES["slika6"]["tmp_name"],$slika6);

/* resize */
$src=imagecreatefromjpeg($slika6);
list($w, $h)=getimagesize($slika6);
if($w>1800 or $h>1500){
$nw=1800;
$nh=1500;

if($nw/$nh<$w/$h){$nh=$h/$w*1500;}
elseif($nw/$nh>$w/$h){$nw=$w/$h*1800;}
else{}

$tmp=imagecreatetruecolor($nw, $nh);
imagecopyresampled($tmp, $src, 0,0,0,0, $nw, $nh, $w, $h);
imagejpeg($tmp, $slika6, 100);
imagedestroy($src);
imagedestroy($tmp);}
/* resize */
}

/* tip slike */
elseif($_FILES["slika6"]["type"]=="image/png"){
$slika6="slike/".time().uniqid().".png";
move_uploaded_file($_FILES["slika6"]["tmp_name"],$slika6);

/* resize */
$src=imagecreatefrompng($slika6);
list($w, $h)=getimagesize($slika6);
if($w>1800 or $h>1500){
$nw=1800;
$nh=1500;

if($nw/$nh<$w/$h){$nh=$h/$w*1500;}
elseif($nw/$nh>$w/$h){$nw=$w/$h*1800;}
else{}

$tmp=imagecreatetruecolor($nw, $nh);
imagecopyresampled($tmp, $src, 0,0,0,0, $nw, $nh, $w, $h);
imagepng($tmp, $slika6, 9);
imagedestroy($src);
imagedestroy($tmp);}
/* resize */
}
else{}

} else {$slika6="";}	
/* kraj uslova da nije prazna */

/* ako slika7 nije prazna */
if(!empty($_FILES["slika7"]["name"])) {
	
/* tip slike */
if($_FILES["slika7"]["type"]=="image/jpeg"){
$slika7="slike/".time().uniqid().".jpg";
move_uploaded_file($_FILES["slika7"]["tmp_name"],$slika7);

/* resize */
$src=imagecreatefromjpeg($slika7);
list($w, $h)=getimagesize($slika7);
if($w>1800 or $h>1500){
$nw=1800;
$nh=1500;

if($nw/$nh<$w/$h){$nh=$h/$w*1500;}
elseif($nw/$nh>$w/$h){$nw=$w/$h*1800;}
else{}

$tmp=imagecreatetruecolor($nw, $nh);
imagecopyresampled($tmp, $src, 0,0,0,0, $nw, $nh, $w, $h);
imagejpeg($tmp, $slika7, 100);
imagedestroy($src);
imagedestroy($tmp);}
/* resize */
}

/* tip slike */
elseif($_FILES["slika7"]["type"]=="image/png"){
$slika7="slike/".time().uniqid().".png";
move_uploaded_file($_FILES["slika7"]["tmp_name"],$slika7);

/* resize */
$src=imagecreatefrompng($slika7);
list($w, $h)=getimagesize($slika7);
if($w>1800 or $h>1500){
$nw=1800;
$nh=1500;

if($nw/$nh<$w/$h){$nh=$h/$w*1500;}
elseif($nw/$nh>$w/$h){$nw=$w/$h*1800;}
else{}

$tmp=imagecreatetruecolor($nw, $nh);
imagecopyresampled($tmp, $src, 0,0,0,0, $nw, $nh, $w, $h);
imagepng($tmp, $slika7, 9);
imagedestroy($src);
imagedestroy($tmp);}
/* resize */
}
else{}

} else {$slika7="";}	
/* kraj uslova da nije prazna */


/* ako slika8 nije prazna */
if(!empty($_FILES["slika8"]["name"])) {
	
/* tip slike */
if($_FILES["slika8"]["type"]=="image/jpeg"){
$slika8="slike/".time().uniqid().".jpg";
move_uploaded_file($_FILES["slika8"]["tmp_name"],$slika8);

/* resize */
$src=imagecreatefromjpeg($slika8);
list($w, $h)=getimagesize($slika8);
if($w>1800 or $h>1500){
$nw=1800;
$nh=1500;

if($nw/$nh<$w/$h){$nh=$h/$w*1500;}
elseif($nw/$nh>$w/$h){$nw=$w/$h*1800;}
else{}

$tmp=imagecreatetruecolor($nw, $nh);
imagecopyresampled($tmp, $src, 0,0,0,0, $nw, $nh, $w, $h);
imagejpeg($tmp, $slika8, 100);
imagedestroy($src);
imagedestroy($tmp);}
/* resize */
}

/* tip slike */
elseif($_FILES["slika8"]["type"]=="image/png"){
$slika8="slike/".time().uniqid().".png";
move_uploaded_file($_FILES["slika8"]["tmp_name"],$slika8);

/* resize */
$src=imagecreatefrompng($slika8);
list($w, $h)=getimagesize($slika8);
if($w>1800 or $h>1500){
$nw=1800;
$nh=1500;

if($nw/$nh<$w/$h){$nh=$h/$w*1500;}
elseif($nw/$nh>$w/$h){$nw=$w/$h*1800;}
else{}

$tmp=imagecreatetruecolor($nw, $nh);
imagecopyresampled($tmp, $src, 0,0,0,0, $nw, $nh, $w, $h);
imagepng($tmp, $slika8, 9);
imagedestroy($src);
imagedestroy($tmp);}
/* resize */
}
else{}

} else {$slika8="";}	
/* kraj uslova da nije prazna */


/* ako slika9 nije prazna */
if(!empty($_FILES["slika9"]["name"])) {
	
/* tip slike */
if($_FILES["slika9"]["type"]=="image/jpeg"){
$slika9="slike/".time().uniqid().".jpg";
move_uploaded_file($_FILES["slika9"]["tmp_name"],$slika9);

/* resize */
$src=imagecreatefromjpeg($slika9);
list($w, $h)=getimagesize($slika9);
if($w>1800 or $h>1500){
$nw=1800;
$nh=1500;

if($nw/$nh<$w/$h){$nh=$h/$w*1500;}
elseif($nw/$nh>$w/$h){$nw=$w/$h*1800;}
else{}

$tmp=imagecreatetruecolor($nw, $nh);
imagecopyresampled($tmp, $src, 0,0,0,0, $nw, $nh, $w, $h);
imagejpeg($tmp, $slika9, 100);
imagedestroy($src);
imagedestroy($tmp);}
/* resize */
}

/* tip slike */
elseif($_FILES["slika9"]["type"]=="image/png"){
$slika9="slike/".time().uniqid().".png";
move_uploaded_file($_FILES["slika9"]["tmp_name"],$slika9);

/* resize */
$src=imagecreatefrompng($slika9);
list($w, $h)=getimagesize($slika9);
if($w>1800 or $h>1500){
$nw=1800;
$nh=1500;

if($nw/$nh<$w/$h){$nh=$h/$w*1500;}
elseif($nw/$nh>$w/$h){$nw=$w/$h*1800;}
else{}

$tmp=imagecreatetruecolor($nw, $nh);
imagecopyresampled($tmp, $src, 0,0,0,0, $nw, $nh, $w, $h);
imagepng($tmp, $slika9, 9);
imagedestroy($src);
imagedestroy($tmp);}
/* resize */
}
else{}

} else {$slika9="";}	
/* kraj uslova da nije prazna */


/* ako slika10 nije prazna */
if(!empty($_FILES["slika10"]["name"])) {
	
/* tip slike */
if($_FILES["slika10"]["type"]=="image/jpeg"){
$slika10="slike/".time().uniqid().".jpg";
move_uploaded_file($_FILES["slika10"]["tmp_name"],$slika10);

/* resize */
$src=imagecreatefromjpeg($slika10);
list($w, $h)=getimagesize($slika10);
if($w>1800 or $h>1500){
$nw=1800;
$nh=1500;

if($nw/$nh<$w/$h){$nh=$h/$w*1500;}
elseif($nw/$nh>$w/$h){$nw=$w/$h*1800;}
else{}

$tmp=imagecreatetruecolor($nw, $nh);
imagecopyresampled($tmp, $src, 0,0,0,0, $nw, $nh, $w, $h);
imagejpeg($tmp, $slika10, 100);
imagedestroy($src);
imagedestroy($tmp);}
/* resize */
}

/* tip slike */
elseif($_FILES["slika10"]["type"]=="image/png"){
$slika10="slike/".time().uniqid().".png";
move_uploaded_file($_FILES["slika10"]["tmp_name"],$slika10);

/* resize */
$src=imagecreatefrompng($slika10);
list($w, $h)=getimagesize($slika10);
if($w>1800 or $h>1500){
$nw=1800;
$nh=1500;

if($nw/$nh<$w/$h){$nh=$h/$w*1500;}
elseif($nw/$nh>$w/$h){$nw=$w/$h*1800;}
else{}

$tmp=imagecreatetruecolor($nw, $nh);
imagecopyresampled($tmp, $src, 0,0,0,0, $nw, $nh, $w, $h);
imagepng($tmp, $slika10, 9);
imagedestroy($src);
imagedestroy($tmp);}
/* resize */
}
else{}

} else {$slika10="";}	
/* kraj uslova da nije prazna */

$sql="INSERT INTO namestaj (grupa, naziv, podnaziv, cena, brojkomada, opis, slika1, slika2, slika3, slika4, slika5, slika6, slika7, slika8, slika9, slika10) VALUES ('$grupa', '$naziv', '$podnaziv', '$cena', '$brojkomada', '$opis', '$slika1', '$slika2', '$slika3', '$slika4', '$slika5', '$slika6', '$slika7', '$slika8', '$slika9', '$slika10')";
mysqli_query($conn,$sql);
header("Location: cpanel.php");
?>