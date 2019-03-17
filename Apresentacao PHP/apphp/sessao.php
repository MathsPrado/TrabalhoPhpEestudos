<?PHP 
include('conexao.php');

session_start();
if(!isset($_SESSION['sessao_user']) && !isset($_SESSION['sessao_senha']))
{
    header("Location: login.php");
} include('menusessao.php')  	
?>
<!DOCTYPE HTML>

<head>
	<title>Cadastro</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="stylesheet" href="assets/css/estacao.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
	 crossorigin="anonymous">
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>
</head>

<body class="body is-preload">
		<div id="page-wrapper">
	
			
	
			</header>
			<!-- Fim header-->
			<div class="container">

					<article id="main">
			
						<header class="special container"><h1>INFORME SEUS DADOS</h1> </header>	
							
							
							
							<form action="ler.php" style="text-align: center" method="post">
									<p> Escolha o filme: <?php echo $_SESSION['sessao_id']; ?>
										<Select name="filme">
											<option value="Cinquenta Tons de Liberdade">Cinquenta Tons de Liberdade</option>
											<option value="Bumblebee">Bumblebee</option>
											<option value="Maze Runner: A Cura Mortal">Maze Runner: A Cura Mortal</option>
											<option value="Rampage: Destruição Total">Rampage: Destruição Total</option>
											<option value="Tomb Raider: A Origem">Tomb Raider: A Origem</option>
											<option value="Uma Dobra no Tempo">Uma Dobra no Tempo</option>
											<option value="Círculo de Fogo: A Revolta">Círculo de Fogo: A Revolta</option>
											<option value="Nasce uma Estrela">Nasce uma Estrela</option>
											<option value="Hellboy">Hellboy</option>
				
										</Select>
									</p>
										<div class="row" style="text-align: center">
										<p> Escolha o horario:
											<Select name="horario"  style="width: 50px;">
												<option value="13:00">13:00</option>
												<option value="14:30">14:30</option>
												<option value="15:00"> 15:00</option>
												<option value="16:30">16:30</option>
												<option value="17:00">17:00</option>
												<option value="18:30 ">18:30 </option>
												<option value="20:00">20:00</option>
												<option value="21:00">21:00</option>					
											</Select>
                                        </p><br>
                                        <p> Escolha a cidade: 
											<Select name="cidade" style="width: 90px;" style="text-align: center">
												<option value="Jundiaí">Jundiaí </option>
												<option value="Vinhedo">Vinhedo</option>
												<option value="São Paulo">São Paulo</option>
												<option value="Valinhos">Valinhos</option>
												<option value="Caieras">Caieras</option>
												<option value="Campinas">Campinas</option>
												<option value="Socorocaba">Socorocaba </option>
												<option value="Santos">Santos</option>
												<option value="Osasco">Osasco</option>					
											</Select>
										</p><br>
										<p> Tipo de ingresso: 
												<Select name="ingresso" style="width: 90px;">
													<option value="Inteiro">Inteiro</option>
													<option value="Meia">Metade</option>
																	
												</Select>
											</p>
								</div><br>
								
									</div>
			
			
								<div class="rows" align="center">
									<p><br>
									<input type="submit" name="enviar" value="Enviar"/>
									<input type="reset" name="resetar" value="Limpar"/>	</p>						
								</div>
							</form>
			
	
			
						</header>
		

		</article>
	</div>

		<section id="cta">

			<footer>


			</footer>

		</section>

		<!-- Footer
		<footer id="footer">


		</footer> -->

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
	
			