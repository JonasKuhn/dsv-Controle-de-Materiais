<?php

$id = $_GET['id'];
$equip = $_GET['eq'];
$sql_situacao = "SELECT cod_situacao FROM tb_emprestimo WHERE cod_emprestimo = $id";
$query = $pdo->query($sql_situacao);
foreach ($query as $key) {
    $sit = $key['cod_situacao'];
}
if ($sit === '2') {
    header ('location: intranet.php?url=emprestimo&msg=dev_OK');
} else {
    $sql = "UPDATE tb_emprestimo SET cod_situacao = 2 WHERE cod_emprestimo = $id";
    $sql_equip = "UPDATE tb_equipamento SET fl_status = 1 WHERE cod_equipamento = $equip";
    if ($pdo->query($sql)) {
        header('location: intranet.php?url=inicial&msg=dev');
        exit;
    } else {
        header('location: intranet.php?url=inicial&msg=erro');
        exit;
    }
}
