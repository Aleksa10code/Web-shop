<style>
.meni{position:fixed; top:120px; left:0; width:250px; height:1000px; background:#000; z-index:1;}
.meni a{width:100%; height:50px; line-height:50px; display:block; text-decoration:none; padding-left:15px; color:#fff; background:#000; border-bottom:1px solid #4c4c4c; font-size:14px; font-weight:400; font-family:Arial, Helvetica, sans-serif;}
.meni a:hover{background:#1b1b1b;}
.meni a:focus{background:#555;}

@media only screen and (max-width: 480px) {
.meni{width:calc(100% - 55px); top:55px; left:-360px; -webkit-transition:all 1s;}
#meni:checked + .meni{left:0; -webkit-transition:all 1s;}	
	
}

</style>

<input type="checkbox" id="meni" />
<div class="meni">
<a href="index.php" style="background:#555;">WOODSTEEL</a>
<a href="cpanel.php">C PANEL</a>
<a href="cpanelunos.php">C PANEL UNOS</a>
</div>








