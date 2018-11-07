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

        <link href="dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
        <link href="events/css/hover.css" rel="stylesheet" type="text/css"/>
        <script>
            function voltar() {
                return confirm('Deseja realmente cancelar seu emprestimo?');
            }
        </script>
    </head>
    <!--style="line-height:90px; margin-left: 8%; float: left;"-->
    <body>
        <header>
            <?php
            require_once 'sessao.php';
            ?>
            <a href="index.php?url=logout.php" onclick="return voltar();" style="line-height:90px; margin-left: 100px; float: left;">
                <img src="img/logo.png" alt="UCEFF" >
            </a>
            <div class="cabecalho_selec_equip">
                <h1 class="d-none d-lg-block text-nowrap text-center">
                    Selecione a qtd de equipamentos
                </h1>
            </div>
        </header>

        <div class="trava container-fluid">
            <div class="row">
                <div class="col-md-6 offset-3">
                    <div class="card text-center ">
                        <div class="card-body">
                            <?php
                            //Aqui vou fazer algumas noias
                            ?>
                            <h5 class="card-title">Bem-Vindo <b style="font-size: 1.2rem;"><?= $_SESSION["nome"]; ?>!</b></h5>
                            <p class="card-text">Nesta página você seleciona os equipamentos que deseja utilizar.</p>
                            <a href="emprestimo_pessoa.php" class="btn btn-primary" title="Veja seus empréstimos!">Ver Seus Empréstimos</a>
                        </div>
                    </div>
                    <br/>
                    <form action="confirma_emprestimo.php" method="POST">
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
                                $sqlEq = "SELECT DISTINCT tip.cod_tipo_equipamento, tip.desc_tipo, tip.qtd_tipo "
                                        . "FROM tb_tipo_equipamento as tip, tb_equipamento as eq "
                                        . "WHERE tip.cod_tipo_equipamento = eq.cod_tipo_equipamento "
                                        . "AND eq.fl_curso_gti != TRUE "
                                        . "AND eq.fl_status != TRUE";
                                $queryEq = $pdo->prepare($sqlEq);
                                $queryEq->execute();

                                while ($dadosEq = $queryEq->fetch()) {
                                    $desc_tipo = $dadosEq['desc_tipo'];
                                    $cod_tipo_equipamento = $dadosEq['cod_tipo_equipamento'];
                                    $qtd_tipo = $dadosEq['qtd_tipo'];
                                    $equipamentoTrim = str_replace(' ', '', $desc_tipo);

                                    if ($_SESSION["tipo_pessoa"] == 1) {
                                        if ($cod_tipo_equipamento == ``) {
                                            
                                        } else {
                                            ?>
                                            <tr>
                                                <td><?= $desc_tipo ?></td>
                                                <td>
                                                    <select class="form-control" name="<?= $cod_tipo_equipamento; ?>">
                                                        <?php
                                                        for ($i = 0; $i <= $qtd_tipo; $i++) {
                                                            if ($i == $ix) {
                                                                ?>
                                                                <option selected="true" value="<?= $i; ?>">NENHUM <?= $desc_tipo ?></option>
                                                                <?php
                                                            } else if ($i != $ix) {
                                                                ?>
                                                                <option value="<?= $i; ?>"><?= $i . ' ' . $desc_tipo; ?> </option>
                                                                <?php
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    } else {
                                        ?>
                                        <tr>
                                            <td><?= $desc_tipo; ?></td>
                                            <td>
                                                <select class="form-control" name="<?= $cod_tipo_equipamento; ?>">
                                                    <?php
                                                    for ($i = 0; $i <= $qtd_tipo; $i++) {
                                                        if ($i == $ix) {
                                                            ?>
                                                            <option selected="true" value="<?= $i; ?>">NENHUM <?= $desc_tipo ?></option>
                                                            <?php
                                                        } else if ($i != $ix) {
                                                            ?>
                                                            <option value="<?= $i; ?>"><?= $i . ' ' . $desc_tipo; ?></option>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                }
                                ?>

                            </tbody>
                        </table>   
                        <div class="row mt-md-2">
                            <div class="col-md-6">
                                <a href="logout.php">
                                    <button type="button" class="btn btn-secondary" style="color: white">
                                        Voltar
                                    </button>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary" style="float: right; color: white">
                                    Concluir
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
    <script src="dist/js/bootstrap.js" type="text/javascript"></script>
    <!-- Ativar events -->
    <script>
                var effects = document.querySelectorAll('.effects')[0];

                effects.addEventListener('click', function (e) {

                    if (e.target.className.indexOf('hvr') > -1) {
                        e.preventDefault();
                        e.target.blur();

                    }
                });
    </script>
</html>