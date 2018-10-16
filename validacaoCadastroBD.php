<?php

include './conexao.php';

$x1 = addslashes($_POST['tipo_pessoa']);
$x2 = addslashes($_POST['nr_matricula']);
$x3 = addslashes($_POST['senha_pessoa']);

$sqlValidacao = "SELECT * FROM tb_pessoa WHERE nr_matricula = '$x2' AND senha_pessoa = '$x3' AND cod_tipo_pessoa = '$x1';";

$queryValidacao = $pdo->query($sqlValidacao);
$dado = $queryValidacao->fetch();
$validacao = $dado['nr_matricula'];

if ($validacao != NULL or $validacao != '') {
    $_SESSION['id'] = $dado['nr_matricula'];
    $_SESSION['nome'] = $dado['nome_pessoa'];
    setcookie("usuario", $dado['nome_pessoa']);
    header("Location: ./seleciona_equipamentos.php");
} else {
    echo "<SCRIPT Language='javascript'>
            var confirma = confirm('Número de matricula ou Senha Incorretos');
            if (confirma) {
            location.href='index.php?url=cadastro.php';
            } else {
            location.href='index.php?url=cadastro.php';
            }
            </SCRIPT>";
}