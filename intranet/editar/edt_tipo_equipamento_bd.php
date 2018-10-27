<?php
//CONECTAR AO BD
include("../../conexao.php");
$id = $_GET['id'];
//PASSAR DADOS DO FORM PARA VARIÁVEIS
$qtde = $_POST['qtde'];
$nome = $_POST['nome'];

//ENVIAR DADOS AO BD
$sql = "UPDATE tb_tipo_equipamento SET desc_tipo = '$nome', modified = now() where cod_tipo_equipamento = $id";
   
if($pdo->query($sql)){
    header('location: ../intranet.php?url=tipo-equip&msg=alt');
    exit;
} else {
    echo("Erro: %s\n". $pdo->error);
}