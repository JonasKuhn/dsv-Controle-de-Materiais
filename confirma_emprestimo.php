<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="Jonas Kuhn">

        <meta property="og:url" content="">
        <meta property="og:type" content="">
        <!-- no type existem vários tipos article/wesite....-->
        <meta property="og:title" content="">
        <meta property="og:description" content="">

        <!-- Tamanho que o FB recomenda 1200x630 máximo 5mb-->
        <meta property="og:image" content="">

        <title>Empréstimos NTI</title>
        <link rel="shortcut icon" href="" type="image/x-icon"/>
        <link href="intranet/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>

    </head>

    <body>
        <a href="index.php" style="line-height:90px; margin-left: 100px; float: left;"><img src="img/logo.png" alt="UCEFF" ></a>
        <header>
            <h1 class="d-none d-lg-block text-nowrap text-center">
                Faça seu Empréstimo
            </h1>
        </header>
        <div class="trava container-fluid mt-md-5">

            <div class="row">
                <div class="col-md-6 offset-3">
                    <form method="POST" action="#">
                        <table class="table table-bordered table-hover table-responsive-md">
                            <thead>
                                <tr>
                                    <th scope="col" class="font-2x">Equipamento</th>
                                    <th scope="col" class="font-2x">Quantidade</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include ('conexao.php');
                                $sqlEq = "select * from tb_tipo_equipamento";
                                $queryEq = $pdo->query($sqlEq);
                                while ($dadosEq = $queryEq->fetch()) {
                                    $equipamentoNome = $dadosEq['desc_tipo'];
                                    $id = $dadosEq['cod_tipo_equipamento'];
                                    $nomeTrim = str_replace(' ', '', $equipamentoNome);
                                    //$nomeMin = strtolower($nomeTrim);
                                    $qtde = $_POST[$id];


                                    if ($qtde > 0) {
                                        $sql = "select cod_equipamento from tb_equipamento "
                                                . "where cod_tipo_equipamento = $id limit $qtde";
                                        $query = $pdo->query($sql);
                                        while ($dados = $query->fetch()) {
                                            $emerson = $dados['cod_equipamento'];
                                            $sql1 = "insert into tb_emprestimo (nr_matricula,data_emprestimo,status,cod_equipamento,cod_pessoa,cod_situacao,created) values (1234,now(),true,$emerson, 1,1,now())";
                                            if ($pdo->query($sql1)) {
                                                header("location: index.php");
                                            } else {
                                                echo ("Erro: %s\n" . $pdo->error);
                                            }
                                        }
                                    }
                                    ?>
                                    <tr>
                                        <td><?= $equipamentoNome ?></td>
                                        <td><?=
                                            $qtde;
                                        }
                                        ?></td>
                                </tr>

                            </tbody>
                        </table>
                        <div class="row mt-md-2">
                            <div class="col-md-6">
                                <a href="seleciona_equipamentos.php">
                                    <button type="button" class="btn btn-secondary" style="color: white">
                                        Voltar
                                    </button>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary" style="float: right; color: white;">
                                    Entrar
                                </button>
                            </div>
                        </div>
                        <br>    
                    </form>
                    <div class="trava"></div>
                </div>
            </div>
        </div>
    </body>
</html>

