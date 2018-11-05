<?php

include '../conexao.php';
@$id = $_GET['id'];
$verifica = "SELECT cod_pessoa FROM tb_pessoa WHERE fl_validacao = 0";
$query = $pdo->query($verifica);
foreach ($query as $row) {
    $cont = $row['cod_pessoa'];
}
if (empty($cont)) {
    header('location: intranet.php?msg=no_apr');
} else {
    if (!empty($id)) {
        $sql = "UPDATE tb_pessoa SET fl_validacao = 1 WHERE cod_pessoa = $id";
        if ($pdo->query($sql)) {
            header('location: intranet.php?msg=apr');
            exit;
        } else {
            echo "erro";
        }
    } else {
        $sql = "UPDATE tb_pessoa SET fl_validacao = 1";
        if ($pdo->query($sql)) {
            header('location: intranet.php?msg=apr_all');
            exit;
        } else {
            echo "erro";
        }
    }
}
