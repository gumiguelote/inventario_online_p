<?php require_once("requisicoes/regras_logicas.php");?>
<?php require_once("header.php")?>

 <div class="container centralizaTexto noMeioConteudo">

<?php if(usuarioEstaLogado()) { ?>
<p class="centralizaTexto alert-primary">Colocar toaste aqui ou no header"Usuario logado"</p>

<?php }else {?>	

<?php include("modlogin.php"); ?>

<?php }?>
</div>

<?php require_once("footer.php")?>







