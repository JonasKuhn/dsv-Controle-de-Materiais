<?php
#include '../../conexao.php';
$id = $_GET['id'];
$verifica = "SELECT * FROM tb_emprestimo where cod_pessoa = $id";
$query = $pdo->query($verifica);
$emp = $query->fetch();
if (!empty($emp)){
    header("location: intranet.php?url=pessoa&msg=erro");
    exit;
} else {
    $sql = "DELETE FROM tb_pessoa WHERE cod_pessoa = $id";
if ($pdo->query($sql)){
    header("location: intranet.php?url=pessoa&msg=exc");
    exit;
}
}





