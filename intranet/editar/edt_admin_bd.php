
<?php

include("../../conexao.php");

$id = $_GET['id'];

$nome = $_POST['nome_admin'];
$log_adm = $_POST['login_admin'];
$senha = $_POST['senha_admin'];

//ENVIAR DADOS AO BD
$sql = "update tb_admin set "
        . "nome_admin = '$nome',"
        . "login_admin = '$log_adm',"
        . "senha_admin = md5('$senha'),"
        . "modified = now() "
        . "where cod_admin = $id";


if ($pdo->query($sql)) {
    header("location: ../intranet.php?url=admin&msg=alt");
    exit;
} else {
    echo("Erro: %s\n" . $pdo->error);
}