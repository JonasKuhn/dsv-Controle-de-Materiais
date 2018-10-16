<?php
include './conexao.php';

echo $qtde = $_GET['qtde'];

if ($qtde > 0) {
    $sql = "select cod_equipamento from tb_equipamento "
            . "where cod_tipo_equipamento = $id limit $qtde";
    $query = $pdo->query($sql);
    while ($dados = $query->fetch()) {
        $emerson = $dados['cod_equipamento'];
        $sql1 = "insert into tb_emprestimo (nr_matricula,data_emprestimo,status,cod_equipamento,cod_pessoa,cod_situacao,created) values (1234,now(),true,$emerson, 1,1,now())";
        if ($pdo->query($sql1)) {
            echo 'ok';
        } else {
            echo ("Erro: %s\n" . $pdo->error);
        }
    }
}