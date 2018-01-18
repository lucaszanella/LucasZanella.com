<?php include '../log/s.php';?>
<?php 
$conteudo = 'Artigos matemáticos e de computação';
$titulo = 'Artigos';
?>
<html>
<?php include 'header.php';?>
<body>
<?php include 'banner.php';?>
<div align="center">
	<div id="math" align="left">
		<div id="contdo" align="justify">
		<h2>Artigos</h2>
		<p><?php if ($lan=="pt") {echo "Atenção: leia e entenda o objetivo destes artigos em <a href='sobre.php'> sobre </a>";} else {echo "Attention: read and understand the objective of these articles <a href='sobre.php'> here </a>";}?> 
			<h3>Matemática:</h3>
				<h4><a href="math/zeta">&#8226; <?php if ($lan=="pt") {echo "Função Zeta";} else {echo "Zeta Function";}?> </a>
					<p><a href="math/gamma">&#8226; <?php if ($lan=="pt") {echo "Função Gamma";} else {echo "Gamma Function";}?> </a>
					<p><a href="math/basel">&#8226; <?php if ($lan=="pt") {echo "Problema de Basileia";} else {echo "Basel Problem";}?>  </a>
					<p><a href="math/bernoulli">&#8226; <?php if ($lan=="pt") {echo "Números de Bernoulli";} else {echo "Bernoulli Numbers";}?> </a>
					<p><a href="math/paradoxo_gabriel">&#8226; <?php if ($lan=="pt") {echo "Trompete de Gabriel";} else {echo "Gabriel Trompet";}?> </a>
					<p><a href="math/calculo">&#8226; <?php if ($lan=="pt") {echo "Revisão de Cálculo";} else {echo "Calculus revision";}?> </a>


				</h4>
				
				<h3>Computação: (inglês) </h3>
				<h4>
					<a href="comp/transistor_amp">&#8226;<?php if ($lan=="pt") {echo "Tensão através do corpo";} else {echo "Voltage through your body";}?> </a>
				</h4>
		</div>
	</div>
</div>
<?php include 'rodape.php';?>
