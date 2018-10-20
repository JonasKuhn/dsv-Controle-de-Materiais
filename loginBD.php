<?php

include_once './conexao.php';

$x1 = addslashes($_POST['nr_matricula']);
$x2 = addslashes($_POST['senha_pessoa']);

$sqlValidacaoMatricula = "SELECT cod_pessoa, nr_matricula, fl_validacao, nome_pessoa, cod_tipo_pessoa"
        . " FROM tb_pessoa WHERE nr_matricula = '$x1' AND senha_pessoa = '$x2' ;";

$queryValidacaoMatricula = $pdo->query($sqlValidacaoMatricula);
$dados = $queryValidacaoMatricula->fetch();
$tipo_pessoa = $dados['cod_tipo_pessoa'];
$nr_matricula = $dados['nr_matricula'];
$fl_validacao = $dados['fl_validacao'];

if ($nr_matricula != NULL) {
    if ($fl_validacao != FALSE) {
        $_SESSION["id"] = $nr_matricula;
        $_SESSION["tipo_pessoa"] = $tipo_pessoa;
        $_SESSION["nome"] = $dados['nome_pessoa'];
        setcookie("usuario", $dados['nome_pessoa']);
        header("Location: ./seleciona_equipamentos.php?i=$tipo_pessoa");
    } else {
        echo "<SCRIPT Language='javascript' type='text/javascript'> window.location.href = "
        . "'login.php?msg=alert'; </SCRIPT>";
        exit();
    }
} else {
    echo "<SCRIPT Language='javascript' type='text/javascript'> window.location.href = "
    . "'login.php?msg=error'; </SCRIPT>";
    exit();
}