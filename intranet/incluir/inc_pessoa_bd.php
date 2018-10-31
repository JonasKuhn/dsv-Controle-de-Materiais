<?php

include '../../conexao.php';

function Mask($mask, $str) {

    $str = str_replace(" ", "", $str);

    for ($i = 0; $i < strlen($str); $i++) {
        $mask[strpos($mask, "#")] = $str[$i];
    }

    return $mask;
}



$nome = $_POST["nome"];
$matricula = $_POST["matricula"];
$senha = $_POST["senha"];
$fone = $_POST["telefone"];
$telefone_mask = Mask("(##) #####-####",$fone);
$email = $_POST["email"];
$tipo = $_POST["tipo"];
$situacao = $_POST["situacao"];

$sql = "INSERT INTO tb_pessoa(nr_matricula,senha_pessoa,email_pessoa,fl_validacao,telefone_pessoa,nome_pessoa,"
 . "cod_tipo_pessoa, created) "
 . "VALUES ('$matricula', '$matricula', '$email', $situacao, '$telefone_mask', '$nome', $tipo, "
 . "now());";
if ($pdo->query($sql)) {
    header("location: ../intranet.php?url=pessoa&msg=inc");
    exit;
    exit;
} else {
    echo "não inseriu";
    exit;
}

