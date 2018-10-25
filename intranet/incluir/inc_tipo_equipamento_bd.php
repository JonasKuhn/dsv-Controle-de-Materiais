<?php
//CONECTAR AO BD
include("../../conexao.php");

//PASSAR DADOS DO FORM PARA VARIÁVEIS
$qtde = $_POST['qtde'];
$nome = $_POST['nome'];

//ENVIAR DADOS AO BD
$sql = "INSERT INTO tb_tipo_equipamento (desc_tipo,qtd_tipo,created) VALUES ('$nome','$qtde',now())";
//echo $sql;   
if($pdo->query($sql)){
    header('location: ../intranet.php?url=tipo-equip&msg=inc');
    exit;
} else {
    echo("Erro: %s\n". $pdo->error);
}