<?php
//CONECTAR AO BD
include("../conexao.php");

//PASSAR DADOS DO FORM PARA VARIÁVEIS
$desc = $_POST['desc_equipamento'];
$obs = $_POST['desc_observacao'];

//ENVIAR DADOS AO BD
$sql = "Insert into tb_equipamento (
    desc_equipamento,
    desc_observação,
    fl_curso_gti,
    fl_status,
    created,
    modified
   ) values (
        '$desc',
        '$obs',
            false,
            false,
            now(),
            null
    ); ";exit;
//echo $sql;   
if($pdo->query($sql)){
    header('location: intranet.php?url=cad_equi');
    exit;
} else {
    echo("Erro: %s\n". $pdo->error);
}