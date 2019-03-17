<?PHP 
include('conexao.php');

session_start();
if(!isset($_SESSION['sessao_user']) && !isset($_SESSION['sessao_senha']))
{
	include('menu.php');
}else{
	include('menusessao.php');
}

?>

<head>
	<title>Fatec</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>
</head>

<body class="index is-preload">
	<div id="page-wrapper">	

		</header>

		<!-- Banner -->
		<section id="banner">
			<div class="inner">

				<header>
					<h2>Cinema Jundiaí</h2>
				</header>
				<p>Venha conhecer o melhor cinema da regiao
					<footer>
						<ul class="buttons stacked">
							<li>
								<a href="#main" class="button fit scrolly">Conhecer melhor</a>
							</li>
						</ul>
					</footer>

			</div>

		</section>
		<div class="container">
  <h2>Carousel Example</h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/image1.jpg" alt="Dobra" style="width:100%;">
      </div>

      <div class="item">
        <img src="images/image2.jpeg" alt="Vinga" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="images/image3.jpg" alt="Lara" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
		<!-- Main -->
		<article id="main">

			<header class="special container">
				
				<span class="badge badge-pill badge-dark">Informações</span>
				<br></br>
			
				
					
<!--JavaScript-->
<script src="jquery/dist/jquery.js"></script>		
		<script src="js/bootstrap.js"></script>

		<!--Limites laterais-->
		


			</header>

			<section class="wrapper style1 container special">
				<div class="row">
					<div class="col-4 col-12-narrower">

						<section>
					
							<header>
								<h3>Segunda a Sexta
								</h3>
							</header>
							<p>Ingressos promocionais, aberto das 14:00 até as 23:00
							</p>
						</section>

					</div>
					<div class="col-4 col-12-narrower">

						<section>
						
							<header>
								<h3>Sábado</h3>
							</header>
							<p>
							Picocas pela metade do preço caso opte por cinema 3D ou 4D.
							</p>
						</section>

					</div>
					<div class="col-4 col-12-narrower">

						<section>
						
							<header>
								<h3>Domingo e feriados</h3>
							</header>
							<p>Pacotes para sua familia em promoção
							</p>
						</section>

					</div>
				</div>
			</section>

		
		</article>

		<section id="cta">

			<header>
				<h2>Assista já os melhores lançamentos			
				</strong></h2>
				
			</header>
			<footer>
				<ul class="buttons">
					<li>
						<a href="cadastro.html" class="button primary">Cadastre-se</a>
					</li>

				</ul>
			</footer>

		</section>

		

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