<?php

include "../conexao.php";
session_start();
$login = trim($_POST["login"]);
$senha = trim($_POST["senha"]);
$senha_crypt = md5($senha);
if ($login == "" || $senha == "") {
    echo "'<SCRIPT Language='javascript'>
            window.alert('Todos os campos devem ser preenchidos!');
            location.href='login.html';
            </SCRIPT>'";
} else {
    $sql = "SELECT * FROM tb_admin WHERE login_admin = '$login';";
    $result = $pdo->query($sql);
    foreach ($result as $row):
        if ($row != "") {
            if ($senha_crypt === $row['senha_admin']) {
                $_SESSION["id_usuario"] = $row["cod_admin"];
                $_SESSION["login"] = stripslashes($row["nome_admin"]);
                header("Location: intranet.php");
                exit;
            } else {
                echo "'<SCRIPT Language='javascript'>
            window.alert('Login e/ou senha incorretos!');
            location.href='login.html';
            </SCRIPT>'";
                
            }
        } else {
            echo "'<SCRIPT Language='javascript'>
            window.alert('Login e/ou senha incorretos!');
            location.href='login.html';
            </SCRIPT>'";
            
        }
    endforeach;
}




/*
$entrar = $_POST['login'];

if (isset($entrar)) {
    $usuario = addslashes($_POST['login_admin']);
    $senha = md5(addslashes($_POST['senha_admin']));

    require 'conexao.php';

    $sql = $pdo->query("SELECT * FROM tb_admin WHERE login_admin = '$usuario' AND senha_admin = '$senha'");

    if ($sql->rowCount() > 0) {
        $dado = $sql->fetch();
        $_SESSION['id'] = $dado['id'];
        $_SESSION['nome'] = $dado['login_admin'];
        setcookie("usuario", $dado['nome_admin']);
        header("Location: ./index.php");
    } else {
        echo "'<SCRIPT Language='javascript'>
            window.alert('Login e/ou senha incorretos!');
            location.href='login.html';
            </SCRIPT>'";
        die();
    }
}*/