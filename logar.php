<?php include("conectBD.php");
include("requisicoes/busca_usuario_bd.php");	
include("requisicoes/regras_logicas.php");

$usuario = BuscaUsuario($conexao, $_POST["email"], $_POST["senha"]);

if ($usuario == null) {
	$_SESSION["danger"] = "Usuário ou senha inválida";
	header("Location: index.php?");
}else{
	header("Location: index.php");
	logaUsuario($usuario["email"]);	
}
die();