<?php
include("../../conexao.php");

$id = $_GET['id'];
$nome = $_POST['nome'];
$obs = $_POST['obs'];
$gti = $_POST['gti'];
$status = $_POST['status'];
$tipo = $_POST['tipo'];

//ENVIAR DADOS AO BD
$sql = "UPDATE tb_equipamento SET desc_equipamento = '$nome', desc_observacao = '$obs',fl_curso_gti = $gti,"
        . " fl_status = $status, cod_tipo_equipamento = '$tipo', modified = now() where cod_equipamento = $id";
   
if($pdo->query($sql)){
    header('location: ../intranet.php?url=gti&msg=alt');
    exit;
} else {
    echo("Erro: %s\n". $pdo->error);
}