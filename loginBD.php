<?php

include_once './conexao.php';

$x1 = addslashes($_POST['nr_matricula']);
$x2 = addslashes($_POST['senha_pessoa']);
if ($x1 == "" || $x2 == "") {
    header("Location: login.php?msg=empty");
} else {
    $sqlValidacaoMatricula = "SELECT cod_pessoa, nr_matricula, fl_validacao, nome_pessoa, cod_tipo_pessoa"
            . " FROM tb_pessoa WHERE nr_matricula = '$x1' AND senha_pessoa = '$x2';";

    $queryValidacaoMatricula = $pdo->query($sqlValidacaoMatricula);
    $dados = $queryValidacaoMatricula->fetch();
    $tipo_pessoa = $dados['cod_tipo_pessoa'];
    $nr_matricula = $dados['nr_matricula'];
    $fl_validacao = $dados['fl_validacao'];
    if ($nr_matricula != NULL) {
        if ($fl_validacao != FALSE) {
            session_start();
            $_SESSION["id"] = $nr_matricula;
            $_SESSION["tipo_pessoa"] = $tipo_pessoa;
            $_SESSION["nome"] = $dados['nome_pessoa'];
            setcookie("usuario", $dados['nome_pessoa']);

            $sqlValidaEmprestimo = "SELECT COUNT(cod_equipamento) FROM tb_emprestimo WHERE cod_situacao = 3 AND nr_matricula = $nr_matricula;";
            $queryValidaEmprestimo = $pdo->prepare($sqlValidaEmprestimo);
            $queryValidaEmprestimo->execute();
            $dado = $queryValidaEmprestimo->fetch();
            $number = $dado['COUNT(cod_equipamento)'];
            if ($number > 0) {
                header("Location: ./emprestimo_pessoa.php?msg=atrasado");
            } else {
                header("Location: ./seleciona_equipamentos.php");
            }
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
}