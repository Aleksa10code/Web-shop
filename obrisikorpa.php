<?php
ob_start();
setcookie("korpa","",time() - 3600, "/");
header("Location: korpa.php");
?>