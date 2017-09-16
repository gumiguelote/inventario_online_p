<?php require_once("requisicoes/regras_logicas.php");
	verificaUsuario();
?>

<?php require_once("header.php");?>
<?php require_once("conectBD.php");?>


<?php

$resultado = mysqli_query($conexao, "select * from empresa");

while($produto = mysqli_fetch_assoc($resultado)) {
    echo $produto['id_empresa'] . "<br/>";
    echo $produto['razao_social'] . "<br/>";
    echo $produto['nome_fantasia'] . "<br/>";
    echo $produto['endereco'] . "<br/>";
    echo $produto['registro_criacao'] . "<br/>";
}


?>

<?php include("footer.php"); ?>