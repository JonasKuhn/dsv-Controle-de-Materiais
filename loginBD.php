<?php

include './conexao.php';

$x1 = addslashes($_POST['tipo_pessoa']);
$x2 = addslashes($_POST['nr_matricula']);
$x3 = addslashes($_POST['senha_pessoa']);

$sqlValidacao = "SELECT cod_pessoa, nr_matricula,  fl_validacao, nome_pessoa, cod_tipo_pessoa"
        . " FROM tb_pessoa WHERE nr_matricula = '$x2' AND senha_pessoa = '$x3' AND cod_tipo_pessoa = '$x1';";

$queryValidacao = $pdo->query($sqlValidacao);
$dado = $queryValidacao->fetch();
$tipo_pessoa = $dado['tipo_pessoa'];
$nr_matricula = $dado['nr_matricula'];
$fl_validacao = $dado['fl_validacao'];

if ($nr_matricula != NULL or $nr_matricula != '') {
    if ($fl_validacao != FALSE) {
        $_SESSION['id'] = $dado['nr_matricula'];
        $_SESSION['nome'] = $dado['nome_pessoa'];
        setcookie("usuario", $dado['nome_pessoa']);
        header("Location: ./seleciona_equipamentos.php");
    } else {
        if ($tipo_pessoa == 1) {
            echo "<SCRIPT Language='javascript'>
            var confirma = confirm('Seu cadastro ainda não foi validado! Entre em contato com os Administradores.');
            if (confirma) {
            location.href='login.php?&i=1';
            } else {
            location.href='login.php?&i=1';
            }
            </SCRIPT>";
        } else {
            echo "<SCRIPT Language='javascript'>
            var confirma = confirm('Seu cadastro ainda não foi validado! Entre em contato com os Administradores.');
            if (confirma) {
            location.href='login.php?&i=2';
            } else {
            location.href='login.php?&i=2';
            }
            </SCRIPT>";
        }
    }
} else {
    if ($x1 == 1) {
        echo "<SCRIPT Language='javascript'>
            var confirma = confirm('Número de matricula ou Senha Incorretos');
            if (confirma) {
            location.href='login.php?&i=1';
            } else {
            location.href='login.php?&i=1';
            }
            </SCRIPT>";
    } else {
        "<SCRIPT Language='javascript'>
            var confirma = confirm('Número de matricula ou Senha Incorretos');
            if (confirma) {
            location.href='login.php?&i=2';
            } else {
            location.href='login.php?&i=2';
            }
            </SCRIPT>";
    }
}