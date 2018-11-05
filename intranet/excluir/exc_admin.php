<?php

$id = $_GET['id'];

$sql = "DELETE FROM tb_admin WHERE cod_admin = $id";
if ($pdo->query($sql)){
    header("location: intranet.php?url=admin&msg=exc");
    exit;
}