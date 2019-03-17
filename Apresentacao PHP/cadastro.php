
<?php
include ('conexao.php');

$nome = $_POST['user_name'];
$login = $_POST['user_login'];
$senha = $_POST['user_pass'];
$cpf = $_POST['user_cpf'];
$telefone = $_POST['user_fone'];



$in = mysqli_query($conexao,"insert into usuarios (nome, cpf, login, senha, telefone)values ('$nome','$cpf','$login','$senha','$telefone')");
header("location: login.php");


?>
