<?php

$id = $_GET['cod'];
$tipo = $_GET['id'];

$sql = "DELETE FROM tb_equipamento WHERE cod_equipamento = $id";
if ($pdo->query($sql)){
    header("location: intranet.php?url=equip&msg=exc&id=$tipo");
    exit;
}


