<?php
session_start();

function usuarioEstaLogado(){
	return isset($_SESSION["INO_COOKIE"]);
}


function verificaUsuario(){
	if(!usuarioEstaLogado()){
		$_SESSION["danger"] = "Você não tem acesso a este módulo";
		header("Location: index.php");
		die();
	}
}

function logaUsuario($email){
	$_SESSION["INO_COOKIE"] = $email;
}

function logout(){
	session_destroy();
	session_start();
}