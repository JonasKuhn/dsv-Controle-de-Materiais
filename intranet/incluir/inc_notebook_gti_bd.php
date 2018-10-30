<?php
require '../../conexao.php';
$eq = 2;
$nome = $_POST['nome'];
$obs = $_POST['obs'];
$gti = 1;
$status = $_POST['status'];
$aluno = $_POST['aluno'];
$turma = $_POST['turma'];
        
$sql = "INSERT INTO tb_equipamento (desc_equipamento, desc_observacao, fl_curso_gti, fl_status, aluno, turma, cod_tipo_equipamento, created) "
        . "VALUES('$nome','$obs',$gti,$status,'$aluno','$turma',$eq,now());";

if($pdo->query($sql)){
    header("location: ../intranet.php?url=gti&msg=inc");
    exit;
} else {
    echo("Erro: %s\n". $pdo->error);
}