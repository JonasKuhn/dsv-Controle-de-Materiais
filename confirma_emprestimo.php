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
        <?php
        require_once 'sessao.php';
        ?>
        <a href="index.php" style="line-height:90px; margin-left: 100px; float: left;"><img src="img/logo.png" alt="UCEFF" ></a>
        <header>
            <h1 class="d-none d-lg-block text-nowrap text-center">
                Faça seu Empréstimo
            </h1>
        </header>

        <div class="trava container-fluid mt-md-5">
            <div class="row">
                <div class="col-md-6 offset-3">
                    <form name="form" id="form" method="POST" action="realiza_emprestimo.php">
                        <table class="table table-bordered table-hover table-responsive-md">
                            <thead>
                                <tr>
                                    <th scope="col" class="font-2x">Equipamento</th>
                                    <th scope="col" class="font-2x">Quantidade</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include_once './conexao.php';
                                $sqlEq = "SELECT DISTINCT tip.cod_tipo_equipamento, tip.desc_tipo, tip.qtd_tipo "
                                        . "FROM tb_tipo_equipamento as tip, tb_equipamento as eq "
                                        . "WHERE tip.cod_tipo_equipamento = eq.cod_tipo_equipamento "
                                        . "AND eq.fl_curso_gti != TRUE "
                                        . "AND eq.fl_status != TRUE";
                                $queryEq = $pdo->query($sqlEq);

                                while ($dadosEq = $queryEq->fetch()) {
                                    $desc_tipo = $dadosEq['desc_tipo'];
                                    $cod_tipo_equipamento = $dadosEq['cod_tipo_equipamento'];
                                    $equipamentoTrim = str_replace(' ', '', $desc_tipo);

                                    $a = $_POST[$cod_tipo_equipamento];
                                    if ($a != '' || $a != NULL) {
                                        if ($_SESSION["tipo_pessoa"] == 1) {
                                            if ($cod_tipo_equipamento == 2) {
                                                
                                            } else {
                                                ?>
                                                <tr>
                                            <input type="text" hidden="" name="<?= $cod_tipo_equipamento; ?>" value="<?= $a; ?>">
                                            <td><?= $desc_tipo; ?></td>
                                            <td><span><?= $a; ?></span></td>
                                            </tr>
                                            <?php
                                        }
                                    } else {
                                        ?>
                                        <tr>
                                        <input type="text" hidden="" name="<?= $cod_tipo_equipamento; ?>" value="<?= $a; ?>">
                                        <td><?= $desc_tipo; ?></td>
                                        <td><span><?= $a; ?></span></td>
                                        </tr>
                                        <?php
                                    }
                                } else {
                                    ?>
                                    <tr>
                                    <input type="text" hidden="" name="<?= $cod_tipo_equipamento; ?>" value="<?= $a; ?>">
                                    <td><?= $desc_tipo; ?></td>
                                    <td><span> 0 </span></td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>
                            </tbody>
                        </table>
                        <?php
                        @$msg1 = $_GET['msg1'];
                        @$msg2 = $_GET['msg2'];
                        @$msg = $_GET['msg'];

                        if (isset($msg1) && $msg1 != false && $msg1 == "bad_aut") {
                            echo "<br/><div class='alert alert-danger' role='alert'><?=$msg1?><br/><?=$msg2?></div>";
                        }
                        if (isset($msg) && $msg != false && $msg == "error") {
                            echo "<br/><div class='alert alert-danger' role='alert'>ERRO NA APLICAÇÃO!!</div>";
                        }
                        if (isset($msg) && $msg != false && $msg == "minimoequip") {
                            echo "<br/><div class='alert alert-danger' role='alert' style='text-align:center;'>Nenhum equipamento selecionado!!<br/> "
                            . "Clique e <a href='seleciona_equipamentos.php'>VOLTAR</a> e selecione algum equipamento.</div>";
                        }
                        ?>
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

