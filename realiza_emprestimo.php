<?php

include './conexao.php';
$nr_matricula = $_GET['reg'];
$nr_pessoa = $_GET['i'];

$sqlMatricula = "SELECT cod_pessoa, nr_matricula FROM tb_pessoa WHERE nr_matricula = '$nr_matricula';";
$queryMatricula = $pdo->prepare($sqlMatricula);
$queryMatricula->execute();

$dados = $queryMatricula->fetch();
$vl_matricula = $dados['nr_matricula'];
$cod_pessoa = $dados['cod_pessoa'];

if ($vl_matricula != '') {
    $sqlEquipamento = "SELECT cod_tipo_equipamento FROM tb_tipo_equipamento;";
    $queryEquipamento = $pdo->query($sqlEquipamento);
    foreach ($queryEquipamento as $tipoequip):
        $cod_tipo = $tipoequip['cod_tipo_equipamento'];
        $limite = $_POST[$cod_tipo];

        if ($limite != '' && $limite != 0) {
            $sqllimit = "SELECT cod_equipamento FROM tb_equipamento WHERE fl_status != FALSE AND cod_tipo_equipamento = '$cod_tipo' LIMIT $limite;";

            $querylimit = $pdo->prepare($sqllimit);
            $querylimit->execute();

            while ($dadolimnit = $querylimit->fetch()) {
                $cod_equipamento = $dadolimnit['cod_equipamento'];


                if ($cod_equipamento != NULL && $cod_equipamento != '0') {
                    try {
                        //REALIZA O EMPRESTIMO
                        $sqlInsert = "INSERT INTO tb_emprestimo (nr_matricula, data_emprestimo, status, cod_equipamento, cod_pessoa, cod_situacao) "
                                . "VALUES ('$vl_matricula', now(), FALSE, '$cod_equipamento', '$cod_pessoa', 1)";
                        $queryinsert = $pdo->prepare($sqlInsert);
                        $queryinsert->execute();
                        
                        $sqlupdateEquip = "UPDATE tb_equipamento                 SET fl_status = 0 WHERE cod_equipamento = '$cod_equipamento';";
                        $queryupdateEquip = $pdo->prepare($sqlupdateEquip);
                        $queryupdateEquip->execute();
                        
                        $sqlupdate = "UPDATE tb_equipamento SET fl_status = 0 WHERE cod_equipamento = '$cod_equipamento';";
                        $queryupdate = $pdo->prepare($sqlupdate);
                        $queryupdate->execute();

                        echo "<SCRIPT Language='javascript' type='text/javascript'> window.location.href = 'index.php'; </SCRIPT>";
                        exit();
                    } catch (PDOException $err) {
                        echo "ERRO PDO ";
                        $erro1 = $err->getMessage();
                        $erro2 = $this->conn->errorInfo();

                        echo "<SCRIPT Language='javascript' type='text/javascript'> window.location.href = "
                        . "'login.php?msg1='$erro1'&msg2='$erro2'; </SCRIPT>";
                    }
                }
            }
        }
    endforeach;
} else {
    echo "ERROR";
}