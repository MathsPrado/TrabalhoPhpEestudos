
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
					<h2>Seu ingresso</h2>
					<?php #echo $idusuario ?>
				</header>	
			</div>

		</section>

		
        <!-- Footer -->
        <?php
         while($dado = $con ->fetch_array()){ ?>
		<footer id="footer">
		<p><u>Dados pessoais</u></p>
         <ul>
             <li></li
        <p>Nome: <input name='recebe' value="<?php echo $dado["nome"]?>"  style='width:25%;'/></p>
        <p>Email:<input name='recebe' value="<?php echo $dado["login"]?>"  style='width:25%;'/></p>
        <p>Senha:<input name='recebe' value="<?php echo $dado["senha"]?>"  style='width:25%;'/></p>
        <p>CPF:<input name='recebe' value="<?php echo $dado["cpf"]?>"  style='width:25%;'/></p>
        <p>Telefone:<input name='recebe' value="<?php echo $dado["telefone"]?>"  style='width:25%;'/></p>
		<p>Salvar<button id='botaoSalvar' type="button" value="Submit" onclick="atualiza()" class="btn btn-success">Salvar</button>
		<p><button type="button" class="btn btn-danger"><a href="index.php">Cancelar</a></button>
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

    <script>
        window.onload = function atualiza(){

        var funcaoDoBotaoSalvar = `<?php
                                    echo("ate aqui foi");
                                    while($dado = $con ->fetch_array()){ 
                                        $name = $dado["nome"];
                                        $cpf = $dado["cpf"];
                                        $login = $dado["login"];
                                        $senha = $dado["senha"];
                                        $telefone = $dado["telefone"];

                                        $in = mysqli_query($conexao, "UPDATE  usuarios SET nome= $nome WHERE id= $idusuario");
                                        $in = mysqli_query($conexao, "UPDATE  usuarios SET cpf= $cpf WHERE id= $idusuario");
                                        $in = mysqli_query($conexao, "UPDATE  usuarios SET login= $login WHERE id= $idusuario");
                                        $in = mysqli_query($conexao, "UPDATE  usuarios SET senha= $senha WHERE id= $idusuario");
                                        $in = mysqli_query($conexao, "UPDATE  usuarios SET telefone= $telefone WHERE id= $idusuario");
                                    }
                                ?>`;
        }

        document.getElementById("botaoSalvar").innerHTML = funcaoDoBotaoSalvar
    </script>
</body>

</html>




