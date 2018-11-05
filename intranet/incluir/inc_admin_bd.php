<?php
require '../../conexao.php';
$nome = $_POST['nome_admin'];
$log_adm = $_POST['login_admin'];
$senha = $_POST['senha_admin'];

$sql = "INSERT INTO tb_admin (nome_admin, login_admin, senha_admin, created) "
        . "VALUES('$nome','$log_adm','$senha',now());";

if($pdo->query($sql)){
    header("location: ../intranet.php?url=admin&msg=inc");
    exit;
} else {
    echo("Erro: %s\n". $pdo->error);
}