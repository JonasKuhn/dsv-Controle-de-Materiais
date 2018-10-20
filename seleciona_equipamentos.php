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
                                $sqlEq = "select * from tb_tipo_equipamento";
                                $queryEq = $pdo->query($sqlEq);
                                while ($dadosEq = $queryEq->fetch()) {
                                    $equipamento = $dadosEq['desc_tipo'];
                                    $id = $dadosEq['cod_tipo_equipamento'];
                                    $qtde = $dadosEq['qtd_tipo'];
                                    $equipamentoTrim = str_replace(' ', '', $equipamento);
                                    ?>
                                    <tr>
                                        <td><?= $equipamento ?></td>
                                        <td><input class="form-control" type="number" name="<?= $id ?>" required="" value="0"></td>
                                    </tr>
                                <?php } ?>
                                <!--<tr>
                                    <td>Régua</td>
                                    <td><input class="form-control" type="number" name="regua" required="" value="0"></td>
                                </tr>
                                <tr>
                                    <td>Adaptador HDMI</td>
                                    <td><input class="form-control" type="number" name="hdmi" required="" value="0"></td>
                                </tr>
                                <tr>
                                    <td>Passador de slides</td>
                                    <td><input class="form-control" type="number" name="passador" required="" value="0"></td>
                                </tr>-->


                            </tbody>
                        </table>
                        <button type="button" class="btn btn-secondary btn-lg" >
                            <a href="#" style="color: white">Voltar</a>
                        </button>
                        <input type="submit" name="enviar" class="btn btn-primary btn-lg" value="Concluir" style=" float: right;font-size: 1rem; padding: 1.7%">
                        <div class="trava mt-md-5"></div>  
                    </form>
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