<?php require_once("requisicoes/regras_logicas.php");
logout();
$_SESSION["success"] = "Deslogado com sucesso";
header("Location: index.php");
die();