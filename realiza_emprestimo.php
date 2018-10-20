<?php

include './conexao.php';
$nr_matricula = $_GET['reg'];

$sqlMatricula = "SELECT cod_pessoa, nr_matricula FROM tb_pessoa WHERE nr_matricula = '$nr_matricula';";
$queryMatricula = $pdo->query($sqlMatricula);
$dados = $queryMatricula->fetch();
$vl_matricula = $dados['nr_matricula'];
$cod_pessoa = $dados['cod_pessoa'];

if ($vl_matricula != '') {
    $sqlEquipamento = "SELECT cod_tipo_equipamento FROM tb_tipo_equipamento;";
    $queryEquipamento = $pdo->query($sqlEquipamento);
    while ($dado = $queryEquipamento->fetch()) {
        $cod_tipo = $dado['cod_tipo_equipamento'];
        $limite = $_POST[$cod_tipo];

        $sqlLimite = "SELECT cod_equipamento FROM tb_equipamento WHERE fl_status != 0 "
                . "AND cod_tipo_equipamento = '$cod_tipo' LIMIT '$limite';";
        $queryLimite = $pdo->query($sqlLimite);

        while ($dadoLimite = $queryLimite->fetch()) {
            $cod_equipamento = $dadoLimite['cod_equipamento'];
            if ($var != NULL && $var != '0') {
                $sqlInsert = "INSERT INTO tb_emprestimo (nr_matricula, data_emprestimo, status, cod_equipamento, cod_pessoa, cod_situacao) "
                        . "VALUES ('$vl_matricula',now(),0,'$cod_equipamento','$cod_pessoa', 1)";
                if ($pdo->query($sqlInsert)) {
                    $sqlUpdateEquipamento = "UPDATE tb_equipamento SET fl_status = 0 WHERE cod_equipamento = '$cod_equipamento';";
                    $pdo->query($sqlUpdateEquipamento);
                    echo "<SCRIPT Language='javascript' type='text/javascript'> window.location.href = "
                    . "'index.php'; </SCRIPT>";
                    exit();
                } else {
                    echo ("Erro: %s\n" . $pdo->error);
                }
            }
        }
    }
} else {
    echo 'error';
}