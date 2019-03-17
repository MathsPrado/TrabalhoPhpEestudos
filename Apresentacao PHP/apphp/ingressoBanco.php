
<?php

include('conexao.php');
session_start();
if(!isset($_SESSION['sessao_user']) && !isset($_SESSION['sessao_senha']))
{
    header("Location: login.php");
}    	
include('menusessao.php');

$idusuario=  $_SESSION['sessao_id']; 
$consulta = "SELECT * FROM ingresso WHERE idUsuarios= $idusuario";
$con = $conexao ->query($consulta) or die ($conexao -> error);


?>


<html>

<head>
	<title>Ingresso</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
	 crossorigin="anonymous">
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>
</head>

<body class="index is-preload">
	<div id="page-wrapper">

	

		<!-- Banner -->
		<section id="banner">
			<div class="inner">

				<header>
					<h2>Seu ingresso</h2>
					<?php #echo $idusuario ?>
				</header>
				
			</div>

		</section>

		
        <!-- Footer -->
        <?php
         while($dado = $con ->fetch_array()){ ?>
		<footer id="footer">
		<p><u>Dados da sua compra</u></p>
          <p>Cidade: <?php  echo $dado["cidade"]; ?></p>
		<p>Horario: <?php  echo $dado["horario"]; ?></p>
		<p>Filme: <?php  echo $dado["filme"]; ?></p>
        <p>Ingresso: <?php echo $dado["ingresso"]; ?></p>
     
        <?php $cde = 'Filme: ' .$dado["filme"] . ', / Horario:' . $dado["horario"] . ' / Tipo de ingresso:' . $dado["ingresso"].'/ Cidade:' . $dado["cidade"]; 
        
        $aux = 'qr_img0.50j\php\qr_img.php?';
        $aux .= 'd= '. $cde .'&';
        $aux .= 'e= H&';
        $aux .= 's = 10&';
        $aux .= 't = P';

        ?>

          <img src="<?php echo $aux; ?>" /> 
        <?php } ?>
	
	

	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.dropotron.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>
