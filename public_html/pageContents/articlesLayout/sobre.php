<?php include '../log/s.php';?>
<?php
$conteudo = "Lucas Martins Zanella - Sobre mim";
$titulo = "Lucas Zanella";
?>
<html>
<?php include 'header.php';?>
<body>
<?php include 'banner.php';?>
<div align="center">
	<div id="math" align="left">
		<div id="contdo" align="justify">
		<h2> <?php if ($lan=="pt") {echo "Sobre";} else {echo "About";}?> </a></h2>
		<p>
		<?php if ($lan=="pt") {
		include 'sobre_pt.php';
		} else {
		include 'sobre_pt.php';
		}
		?> 
		</div>
	</div>
</div>
<?php include 'rodape.php';?>