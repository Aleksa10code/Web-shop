<?php
session_start();
session_destroy();
setcookie("zapamti","da",time() - 3600,"/");
header("Location: cpanel.php");
?>