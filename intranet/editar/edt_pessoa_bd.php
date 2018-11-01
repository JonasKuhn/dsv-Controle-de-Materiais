<?php

include '../../conexao.php';

$id = $_GET['id'];
$nome = $_POST["nome"];
$matricula = $_POST["matricula"];
$senha = $_POST["senha"];
$fone = $_POST["telefone"];
$email = $_POST["email"];
$tipo = $_POST["tipo"];
$situacao = $_POST["situacao"];

$sql = "UPDATE tb_pessoa SET nr_matricula = $matricula,senha_pessoa = '$senha', email_pessoa = '$email', "
 . "fl_validacao = $situacao, telefone_pessoa = '$fone', nome_pessoa = '$nome', cod_tipo_pessoa = $tipo, "
 . "modified = now() WHERE cod_pessoa = $id";
if ($pdo->query($sql)) {
    header("location: ../intranet.php?url=pessoa&msg=alt");
    #echo "inseriu";
    exit;
} else {
    header("location: ../intranet.php?url=pessoa&msg=erro");
    exit;
}

