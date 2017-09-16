<?php 
error_reporting(E_ALL ^ E_NOTICE);
require_once("requisicoes/alertas.php");
mostraAlerta("success");
mostraAlerta("danger");
?>
<html>
<head>
	<link href="css/main.css" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
	<link rel="icon" href="imgs/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    	  rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">

	<title>Inventário Online</title>
</head>
<body>
<nav class="navbar  navbar-expand-lg navbar-light fundoAzul rounded-bottom">
  <a class="navbar-brand brancoTitulo" href="index.php">Inventário Online</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<!-- Verificar se o usuário esta logado, se estiver, mostrar resto do menu abaixo -->

  <div id="menu" class="collapse navbar-collapse">

    <ul class="nav nav-fill mr-auto">
      <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle branco" data-toggle="dropdown" href="contrucao.php" role="button" aria-haspopup="true" aria-expanded="false"><i class="material-icons">dashboard</i><p>Dashboard</p></a>
    <div class="dropdown-menu">
      <a class="dropdown-item"  href="#">Dashboard</a>
      <a class="dropdown-item"  href="consulta.php">Buscar Equipamentos</a>
      </div>
    </li>
     <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle branco" data-toggle="dropdown" href="contrucao.php" role="button" aria-haspopup="true" aria-expanded="false"><i class="material-icons">assignment</i><p>Cadastros</p></a>
    <div class="dropdown-menu">
      <a class="dropdown-item"  href="#">Computadores</a>
      <a class="dropdown-item"  href="#">Notebooks</a>
      <a class="dropdown-item"  href="#">Impressoras</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item"  href="#">Periféricos</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item"  href="#">Equipamentos Médicos</a>
      <a class="dropdown-item"  href="#">Equipamentos Laboratoriais</a>
    </div>
    </li>
      <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle branco" data-toggle="dropdown" href="contrucao.php" role="button" aria-haspopup="true" aria-expanded="false"><i class="material-icons">today</i><p>Preventivas</p></a>
    <div class="dropdown-menu">
      <a class="dropdown-item"  href="#">Computadores</a>
      <a class="dropdown-item"  href="#">Notebooks</a>
      <a class="dropdown-item"  href="#">Impressoras</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item"  href="#">Periféricos</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item"  href="#">Equipamentos Médicos</a>
      <a class="dropdown-item"  href="#">Equipamentos Laboratoriais</a>
    </div>
    </li>
     <li class="nav-item">
        <a class="nav-link branco" href="contrucao.php"><i class="material-icons">equalizer</i><p>Relatórios</p></a>
      </li>
      <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle branco" data-toggle="dropdown" href="contrucao.php" role="button" aria-haspopup="true" aria-expanded="false"><i class="material-icons">settings</i><p>Configurações</p></a>
    <div class="dropdown-menu">
      <a class="dropdown-item"  href="#">Configurações Gerais</a>
      <a class="dropdown-item"  href="#">Regras Preventivas</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item"  href="#">Config. Usuários</a>
      <a class="dropdown-item"  href="#">Config. Localidades</a>
    </div>
    </li>
    </ul>

    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Nº ou nome" aria-label="Search">
      <button class="btn btn-primary my-2 my-sm-0" type="submit">Buscar</button>

      <?php if(isset($_SESSION["INO_COOKIE"])) { ?>

       <a class="btnlogar" href="logout.php"><button  class="btn btn-link my-12 my-sm-0"  type="button"><i class="material-icons">person</i><p>Log Out</p></a></button>

    <?php }else { ?> 

<a class="btnlogar" href="login.php"><button  class="btn btn-link my-12 my-sm-0"  type="button"><i class="material-icons">person</i><p>Log in</p></a></button>
<?php } ?>
    <!-- Mudar nome conforme seção do usuário, se estiver online: Aparecer nome do usuário e o icone de deslogar.
    Caso contrário exibir somente o "Login"-->
   </form>
  </div>
</nav>


