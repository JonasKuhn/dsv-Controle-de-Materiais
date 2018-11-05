<?php

include './conexao.php';
require_once 'sessao.php';


$nr_matricula = $_SESSION["id"];
$nr_pessoa = $_SESSION["tipo_pessoa"];

//Seleciona a quantidade de tipos de equipamentos
$sqlvalida = "SELECT COUNT(cod_tipo_equipamento) FROM tb_tipo_equipamento where qtd_tipo != 0;";
$queryvalida = $pdo->prepare($sqlvalida);
$queryvalida->execute();
$dadovalida = $queryvalida->fetch();
$count = $dadovalida['COUNT(cod_tipo_equipamento)'];

//seleciona dados da pessoa conforme a matricula
$sqlMatricula = "SELECT cod_pessoa, nr_matricula FROM tb_pessoa WHERE nr_matricula = '$nr_matricula';";
$queryMatricula = $pdo->prepare($sqlMatricula);
$queryMatricula->execute();
$dados = $queryMatricula->fetch();
$vl_matricula = $dados['nr_matricula'];
$cod_pessoa = $dados['cod_pessoa'];

echo 'Quantidade de equipamento - ' . $count . '<br> Matricula - ' . $vl_matricula . '<br> Cod Pessoa - ' . $cod_pessoa;

//valida se a matricula não esta vaizia
if ($vl_matricula != '') {
    //selleciona os equipamentos que não sao de GTI e que estão disponíveis para o emprestimo
    $sqlEquipamento = "SELECT DISTINCT tip.cod_tipo_equipamento "
            . "FROM tb_tipo_equipamento as tip, tb_equipamento as eq "
            . "WHERE tip.cod_tipo_equipamento = eq.cod_tipo_equipamento "
            . "AND eq.fl_curso_gti != TRUE "
            . "AND eq.fl_status != TRUE";
    $queryEquipamento = $pdo->prepare($sqlEquipamento);
    $queryEquipamento->execute();

    foreach ($queryEquipamento as $tipoequip):
        $cod_tipo = $tipoequip['cod_tipo_equipamento'];
        $limite = $_POST[$cod_tipo];

        echo '<br><br> Cod tipo equipamento - ' . $cod_tipo . '<br> Quantidade de equipamentos selecionados - ' . $limite;

        if ($limite != '' && $limite != 0) {
            $sqllimit = "SELECT cod_equipamento "
                    . "FROM tb_equipamento "
                    . "WHERE fl_status = FALSE "
                    . "AND cod_tipo_equipamento = $cod_tipo "
                    . "LIMIT $limite;";

            $querylimit = $pdo->prepare($sqllimit);
            $querylimit->execute();

            while ($dadolimnit = $querylimit->fetch()) {
                $cod_equipamento = $dadolimnit['cod_equipamento'];

                echo '<br> Cod equipamento - ' . $cod_equipamento . '<br> realiza<br><br> ';

                if ($cod_equipamento != NULL && $cod_equipamento != '0') {
                    try {
                        //REALIZA O EMPRESTIMO
                        $sqlInsert = "INSERT INTO tb_emprestimo (nr_matricula, data_emprestimo, status, cod_equipamento, cod_pessoa, cod_situacao) "
                                . "VALUES ('$vl_matricula', now(), FALSE, $cod_equipamento, $cod_pessoa, 1)";
                        $queryinsert = $pdo->prepare($sqlInsert);
                        $queryinsert->execute();

                        echo '<br> Insert tb_emprestimo - ' . $sqlInsert . ' <br> realiza<br><br> ';
                        $sqlupdateEquip = "UPDATE tb_equipamento as eq, tb_tipo_equipamento as teq "
                                . "SET eq.fl_status = 0,  teq.qtd_tipo = teq.qtd_tipo - 1 "
                                . "WHERE eq.cod_tipo_equipamento = teq.cod_tipo_equipamento "
                                . "AND eq.cod_equipamento = $cod_equipamento;";
                        $queryupdateEquip = $pdo->prepare($sqlupdateEquip);
                        $queryupdateEquip->execute();
                        echo '<br> Update tb_tipo_equipamento - ' . $sqlupdateEquip . ' <br> realiza<br><br> ';
                    } catch (PDOException $err) {
                        echo "ERRO PDO ";
                        $erro1 = $err->getMessage();
                        $erro2 = $this->conn->errorInfo();

                        echo "<SCRIPT Language='javascript' type='text/javascript'> window.location.href = "
                        . "'login.php?msg1='$erro1'&msg2='$erro2'; </SCRIPT>";
                    }
                }
            }
        } else {
            $x++;
        }
    endforeach;
    if ($count <= $x) {
        echo '<br><br>Total de tipos de equipamentos - ' . $count . ' <br>Contador - ' . $x;
        echo "<SCRIPT Language='javascript' type='text/javascript'> window.location.href = 'confirma_emprestimo.php?msg=minimoequip';</SCRIPT>";
    } else {
        echo "<SCRIPT Language='javascript' type='text/javascript'> window.location.href = 'emprestimo_pessoa.php';</SCRIPT>";
    }
} else {
    echo "<SCRIPT Language='javascript' type='text/javascript'> window.location.href = 'confirma_emprestimo.php?msg=error'; </SCRIPT>";
}