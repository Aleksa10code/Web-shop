<?php
include("connect.php");
$uid=$_GET["id"];
$datum=date("Y-m-d h:i");
$sql="UPDATE woodkorpa SET naplaceno='$datum' WHERE id='$uid'";
mysqli_query($conn,$sql);
header("Location: naplaceno.php");
?>