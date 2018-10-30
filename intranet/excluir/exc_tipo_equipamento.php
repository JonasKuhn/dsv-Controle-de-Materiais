<?php

$id = $_GET['id'];

$verifica = "SELECT * FROM tb_equipamento WHERE cod_tipo_equipamento = $id";
$result = $pdo->query($verifica);
foreach ($result as $row) {
    if (!empty($row)) {
        header("location: intranet.php?url=tipo-equip&msg=erro");
        #echo "não ta vazio";
        exit;
    }
}
$sql = "DELETE FROM tb_tipo_equipamento WHERE cod_tipo_equipamento = $id";
if ($pdo->query($sql)) {
    header("location: intranet.php?url=tipo-equip&msg=exc&id=$id");
    exit;
}


