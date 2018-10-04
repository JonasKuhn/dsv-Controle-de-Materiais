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
        <link href="dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>

    </head>

    <body>
        <header>
            <h1 class="text-center d-none d-lg-block">
                Faça seu Empréstimo
            </h1>
        </header>
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-6 offset-3">
                    <table class="table table-bordered table-hover table-responsive-md">
                        <thead>
                            <tr>
                                <th scope="col" class="font-2x">Equipamento</th>
                                <th scope="col" class="font-2x">Quantidade</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $cont = 0;
                            while ($cont < 5) {
                                $cont++;
                                ?>
                                <tr>
                                    <td>Equipamento <?= $cont; ?></td>
                                    <td>1<?php } ?></td>
                            </tr>

                        </tbody>
                    </table>
                    <button type="button" class="btn btn-secondary btn-lg"><a href="#" style="color: white">Voltar</a></button>
                    <button type="button" class="btn btn-primary btn-lg" style="float: right;background-color: #FE6B00;border-color: #FE6B00"><a href="#" style="color: white;">Concluir</a></button>
                    <div class="trava"></div>
                </div>

            </div>

        </div>
    </body>
</html>

