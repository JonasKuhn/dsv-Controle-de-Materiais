<?php
require '../../conexao.php';
$eq = $_GET['id'];
$nome = $_POST['nome'];
$obs = $_POST['obs'];
$gti = $_POST['gti'];
$status = $_POST['status'];

$sql = "INSERT INTO tb_equipamento (desc_equipamento, desc_observacao, fl_curso_gti, fl_status, cod_tipo_equipamento, created) "
        . "VALUES('$nome','$obs',$gti,$status,$eq,now());";

if($pdo->query($sql)){
    header("location: ../intranet.php?url=equip&msg=inc&id=$eq");
    exit;
} else {
    echo("Erro: %s\n". $pdo->error);
}