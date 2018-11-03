<?php
include '../conexao.php';
$id = $_GET['id'];

if (!empty($id)){
    $sql = "UPDATE tb_pessoa SET fl_validacao = 1 WHERE cod_pessoa = $id";
    if ($pdo->query($sql)){
        header ('location: intranet.php?msg=apr');
        exit;
    } else {
        echo "erro";
    }
} else {
    $sql = "UPDATE tb_pessoa SET fl_validacao = 1";
    if ($pdo->query($sql)){
        header ('location: intranet.php?msg=apr_all');
        exit;
    } else {
        echo "erro";
    }
}
