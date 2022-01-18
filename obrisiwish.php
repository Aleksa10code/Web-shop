<?php
ob_start();

setcookie("listazelja","",time() - 3600, "/");

header("Location: index.php");



?>