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
    </head>
    <!--style="line-height:90px; margin-left: 8%; float: left;"-->
    <body>
        <a href="index.php" style="line-height:90px; margin-left: 100px; float: left;">
            <img src="img/logo.png" alt="UCEFF" >
        </a>
        <div class="cabecalho_selec_equip">
            <h1 class="d-none d-lg-block text-nowrap text-center">
                Selecione a qtd de equipamentos
            </h1>
        </header>

        <div class="trava container-fluid">
            <div class="row">
                <div class="col-md-6 offset-3 mt-md-5">
                    <form action="confirma_emprestimo.php?i=<?= $_GET['i']; ?>&reg=<?= $_GET['reg']; ?>" method="POST">
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
                                $sqlEq = "select cod_tipo_equipamento, desc_tipo, qtd_tipo from tb_tipo_equipamento";
                                $queryEq = $pdo->query($sqlEq);

                                while ($dadosEq = $queryEq->fetch()) {
                                    $desc_tipo = $dadosEq['desc_tipo'];
                                    $cod_tipo_equipamento = $dadosEq['cod_tipo_equipamento'];
                                    $qtd_tipo = $dadosEq['qtd_tipo'];
                                    $equipamentoTrim = str_replace(' ', '', $desc_tipo);

                                    if ($_GET['i'] == 1) {
                                        if ($cod_tipo_equipamento == 2) {
                                            
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
                                                                <option selected="true" value="<?= $i; ?>"><?= $i; ?></option>
                                                                <?php
                                                            } else if ($i != $ix) {
                                                                ?>
                                                                <option value="<?= $i; ?>"><?= $i; ?></option>
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
                                            <td><?= $desc_tipo ?></td>
                                            <td>
                                                <select class="form-control" name="qtd_select">
                                                    <?php
                                                    for ($i = 0; $i <= $qtde; $i++) {
                                                        if ($i == $ix) {
                                                            ?>
                                                            <option selected="true" value="<?= $i; ?>"><?= $i; ?></option>
                                                            <?php
                                                        } else if ($i != $ix) {
                                                            ?>
                                                            <option value="<?= $i; ?>"><?= $i; ?></option>
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
                                <a href="login.php">
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