<?php

include "../conexao.php";
session_start();
$login = trim(preg_replace('/[^[:alpha:]_]/', '', $_POST['login']));
$senha = trim($_POST["senha"]);
$senha_crypt = md5($senha);
if ($login == "" || $senha == "") {
    header("Location: index.php?msg=empty");
}
$sql = "SELECT * FROM tb_admin WHERE login_admin = ('$login');";
$result = $pdo->query($sql);
foreach ($result as $row) {
    if (!empty($row)) {
        if ($senha_crypt === $row['senha_admin']) {
            $_SESSION["id_usuario"] = $row["cod_admin"];
            $_SESSION["login"] = stripslashes($row["nome_admin"]);
            header("Location: intranet.php");
            exit;
        } else {
            header("Location: index.php?msg=bad_aut");
            exit;
        }
    }
}
header("Location: index.php?msg=bad_aut");
exit;
