<?php

$id = $_GET['id'];
$equip = $_GET['eq'];
$sql = "UPDATE tb_emprestimo SET cod_situacao = 2 WHERE cod_emprestimo = $id";
$sql_equip = "UPDATE tb_equipamento SET fl_status = 1 WHERE cod_equipamento = $equip";
if($pdo->query($sql)){
    header ('location: intranet.php?url=inicial&msg=dev');
    exit;
} else {
    header ('lcation: intranet.php?url=inicial&msg=erro');
    exit;
}
