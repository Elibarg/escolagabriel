<?php
include("conecta.php");
// Para pegar o texto dos inputs
$matricula = $_POST["matricula"];
$nome      = $_POST["nome"];
$idade     = $_POST["idade"];

$comando = $pdo->prepare("INSERT INTO
alunos VALUES($matricula,'$nome',$idade)");

$resultado = $comando->execute();

// Para voltar no formulario
header("Location: cadastro.html");
?>