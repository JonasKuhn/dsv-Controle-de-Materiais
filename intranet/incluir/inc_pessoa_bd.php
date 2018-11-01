<?php

include '../../conexao.php';



$nome = $_POST["nome"];
$matricula = $_POST["matricula"];
$senha = $_POST["senha"];
$fone = $_POST["telefone"];
$email = $_POST["email"];
$tipo = $_POST["tipo"];
$situacao = $_POST["situacao"];

$sql = "INSERT INTO tb_pessoa(nr_matricula,senha_pessoa,email_pessoa,fl_validacao,telefone_pessoa,nome_pessoa,"
 . "cod_tipo_pessoa, created) "
 . "VALUES ('$matricula', '$matricula', '$email', $situacao, '$fone', '$nome', $tipo, "
 . "now());";
if ($pdo->query($sql)) {
    header("location: ../intranet.php?url=pessoa&msg=inc");
    exit;
    exit;
} else {
    echo "não inseriu";
    exit;
}

