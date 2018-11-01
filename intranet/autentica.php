<?php

include "../conexao.php";
session_start();
$login = trim($_POST["login"]);
$senha = trim($_POST["senha"]);
$senha_crypt = md5($senha);
if ($login == "" || $senha == "") {
    /*echo "'<SCRIPT Language='javascript'>
            window.alert('Todos os campos devem ser preenchidos!');
            location.href='login.html';
            </SCRIPT>'";*/
    header("Location: index.php?msg=empty");
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
                header("Location: index.php?msg=bad_aut");
                
            }
        } else {
            header("Location: index.php?msg=bad_aut");
            
        }
    endforeach;
}