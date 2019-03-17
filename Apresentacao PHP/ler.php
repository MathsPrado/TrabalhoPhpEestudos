<?PHP 
include('conexao.php');

session_start();
if(!isset($_SESSION['sessao_user']) && !isset($_SESSION['sessao_senha']))
{
    header("Location: login.php");
}    	

	include ('menusessao.php');
	include ('conexao.php');
	
	if (isset($_POST['filme'])){
		$filme=$_POST['filme'];
	}else {
		$filme="";
	}
	if (isset($_POST['horario'])){
		$horario=$_POST['horario'];
	}else {
        $horario="";
	}
	if (isset($_POST['ingresso'])){
		$ingresso=$_POST['ingresso'];
	}else{
		$ingresso="";
	}

	if (isset($_POST['cidade'])){
		$cidade=$_POST['cidade'];
	}else{
		$cidade="";
	}
	$idusuario=  $_SESSION['sessao_id']; 
	

	$cd = 'Filme: ' . $filme . ', / Horario:' . $horario . ' / Tipo de ingresso:' . $ingresso .'/ Cidade:' . $cidade;



			
	$aux = 'qr_img0.50j\php\qr_img.php?';
	$aux .= 'd= '. $cd .'&';
	$aux .= 'e= H&';
	$aux .= 's = 10&';
	$aux .= 't = P';
	
	$in = mysqli_query($conexao, "INSERT INTO ingresso (filme, horario, cidade, ingresso, idUsuarios)VALUES('$filme','$horario','$cidade','$ingresso','$idusuario')");

 /*<?php echo $_SESSION['sessao_id']; ?>*/
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
					<?php echo $idusuario ?>
				</header>
				
			</div>

		</section>

		
		<!-- Footer -->
		<footer id="footer">
		<p><u>Dados da sua compra</u></p>
          <p>Cidade: <?php echo $cidade; ?></p>
		<p>Horario: <?php echo $horario; ?></p>
		<p>Filme: <?php echo $filme; ?></p>
		<p>Ingresso: <?php echo $ingresso; ?></p>

	
			<p>Qr code do ingresso</p>
		
			<img src="<?php echo $aux; ?>" /> 
		</footer>

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
