<?php

include './conexao.php';

$x1 = $_POST['cod_tipo_pessoa'];
$x2 = $_POST['nr_matricula'];
$x3 = $_POST['nome_pessoa'];
$x4 = $_POST['telefone_pessoa'];
$x5 = $_POST['email_pessoa'];

$sqlValidacao = "SELECT nr_matricula FROM tb_pessoa WHERE nr_matricula = '$x2';";

$queryValidacao = $pdo->query($sqlValidacao);
$dados = $queryValidacao->fetch();
$validacao = $dados['nr_matricula'];

if ($validacao != NULL or $validacao != '') {
    echo "<SCRIPT Language='javascript'>
            var confirma = confirm('Número de matricula já cadastrado!');
            if (confirma) {
            location.href='index.php?url=cadastro.php';
            } else {
            location.href='index.php?url=cadastro.php';
            }
            </SCRIPT>";
} else {
    $sql = "CALL insere_cadastro ('$x1', '$x2', '$x3', '$x4', '$x5');";
    $pdo->query($sql);
    sleep(5);
    header('location: ./index.php?url=selecao.php');
    echo "'<SCRIPT Language='javascript'>
            window.alert('Atualizado com Sucesso!');
            location.href='index.php?url=contato.php';
            </SCRIPT>'";
    exit();
}