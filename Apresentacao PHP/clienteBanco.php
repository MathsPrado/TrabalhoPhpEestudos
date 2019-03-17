
<?php

include('conexao.php');
session_start();
if(!isset($_SESSION['sessao_user']) && !isset($_SESSION['sessao_senha']))
{
    header("Location: login.php");
}    	
include('menusessao.php');
$idusuario=  $_SESSION['sessao_id']; 
$consulta = "SELECT * FROM usuarios WHERE id = $idusuario";
$con = $conexao ->query($consulta) or die ($conexao -> error);


?>
<!DOCTYPE HTML>

<html>

<head>
	<title>Ingresso</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
	 crossorigin="anonymous">
	<no>
		<link rel="stylesheet" href="assets/css/no.css" />
	</no>
</head>

<body class="index is-preload">
	<div id="page-wrapper">

	

		<!-- Banner -->
		<section id="banner">
			<div class="inner">

				<header>
					<h2>Dados do Usuário</h2>
					<?php #echo $idusuario ?>
				</header>
				
			</div>

		</section>

		
        <!-- Footer -->
        <?php
         while($dado = $con ->fetch_array()){ ?>
		<footer id="footer">
		<p><u>Informações</u></p>
          <p>Login: <?php  echo $dado["login"]; ?></p>
		<p>Senha: <?php  echo $dado["senha"]; ?></p>
		<p>Nome: <?php  echo $dado["nome"]; ?></p>
        <p>CPF: <?php echo $dado["cpf"]; ?></p>
        <p>Telefone: <?php echo $dado["telefone"]; ?></p>
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


