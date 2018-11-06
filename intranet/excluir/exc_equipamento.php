<?php

include '../../conexao.php';
$id = $_GET['cod'];
$tipo = $_GET['id'];

$verifica = "SELECT * FROM tb_equipamento WHERE cod_equipamento = $id";
$result = $pdo->query($verifica);
foreach ($result as $key) {
    $res = $key['cod_equipamento'];
}

if (!empty($res)) {
    header("location: intranet.php?url=equip&msg=erro&id=$tipo");
} else {

    $sql = "DELETE FROM tb_equipamento WHERE cod_equipamento = $id";
    if ($pdo->query($sql)) {
        header("location: intranet.php?url=equip&msg=exc&id=$tipo");
        exit;
    }
}


