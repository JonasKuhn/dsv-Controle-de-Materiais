<?php

$id = $_GET['id'];
$equip = $_GET['eq'];
$sql_equip = "SELECT cod_tipo_equipamento from tb_equipamento where cod_equipamento = $equip";
$result = $pdo->query($sql_equip);
foreach ($result as $key) {
    $id_tipo = $key['cod_tipo_equipamento'];
}
$sql_situacao = "SELECT cod_situacao FROM tb_emprestimo WHERE cod_emprestimo = $id";
$query = $pdo->query($sql_situacao);
foreach ($query as $key) {
    $sit = $key['cod_situacao'];
}
if ($sit === '2') {
    header('location: intranet.php?url=emprestimo&msg=dev_OK');
} else {
    $sql = "UPDATE tb_emprestimo SET cod_situacao = 2 WHERE cod_emprestimo = $id";
    $sql_equip = "UPDATE tb_equipamento SET fl_status = 0 WHERE cod_equipamento = $equip";
    $sql_qtde_tp = "UPDATE tb_tipo_equipamento SET qtd_tipo = qtd_tipo+1 WHERE cod_tipo_equipamento = $id_tipo";
    if ($pdo->query($sql)) {
        $pdo->query($sql_equip);
        $pdo->query($sql_qtde_tp);
        header('location: intranet.php?url=inicial&msg=dev');
        exit;
    } else {
        header('location: intranet.php?url=inicial&msg=erro');
        exit;
    }
}
