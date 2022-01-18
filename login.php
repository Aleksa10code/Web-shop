<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<style>
body{margin:0; padding:0;}
*{box-sizing:border-box;}
@font-face{font-family: geomanist; src:url(grafika/Geomanist-Regular.otf);}
.nosi{position:fixed; left:0; top:0; width:100%; height:100%; background:#bcbcbb;}
form{width:300px; height:300px; background:#966844; position:absolute; left:calc(50% - 150px); top:calc(50% - 150px); padding:5px 20px 20px 20px; font-family:geomanist; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
input{width:100%; height:40px; font-size:18px; padding-left:10px; margin-bottom:10px; border:none; outline:none;}
input[type="submit"]{background:#dfbe05; color:#fff; border:none; cursor:pointer; transition:all 0.5s; width:25%; position:absolute; right:20px; bottom:40px;}
input[type="submit"]:hover{background:#f8d406; transition:all 0.5s;}
input[type="checkbox"]{width:15px; height:15px; position:absolute; left:110px; bottom:42px;}
form div{height:100px;}
form div img{width:170px; margin:20px 0 20px 40px;}
</style>
</head>

<body>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
if($_POST['username'] == "woodshop2021" and $_POST['password'] == "woodshop2021")
{$_SESSION['username'] = "woodshop2021";
if($_POST["zapamti"] == "da")
{setcookie("zapamti","da",time() + 86400 * 30,"/");}
header("Location: cpanel.php");} else
{header("Location: index.php");}			
}
?>
<div class="nosi">
<form action="login.php" method="post">
<div>
<h3 align="center" style="color:#fff; margin:0;">ADMIN PANEL</h3>
<img src="grafika/logo.png">
</div>
<input type="text" name="username" placeholder="Username" />
<input type="text" name="password" placeholder="Password" />
<input type="submit" value="Log-in" />
<span style="color:#fff; position:absolute; left:20px; bottom:50px;">Zapamti me:</span> <input type="checkbox" name="zapamti" value="da">
</form>
</div>

</body>
</html>
