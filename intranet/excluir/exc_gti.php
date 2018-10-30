<?php
#include '../../conexao.php';
$id = $_GET['id'];

$sql = "DELETE FROM tb_equipamento WHERE cod_equipamento = $id";
if ($pdo->query($sql)){
    header("location: intranet.php?url=gti&msg=exc");
    exit;
}


