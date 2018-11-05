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
                    Seus Empréstimos
                </h1>
            </div>
        </header>

        <div class="trava container-fluid">
            <div class="row">
                <div class="col-md-6 offset-3">
                    <div class="card text-center ">
                        <div class="card-body">
                            <h1>REALIZADO COM SUCESSO</h1>
<!--                            <h5 class="card-title">Seja Bem-Vindo <b style="font-size: 1.2rem;"><?= $_SESSION["nome"]; ?>!</b></h5>
                            <p class="card-text">Nesta página você seleciona os equipamentos que deseja utilizar.</p>
                            <a href="#" class="btn btn-primary" title="Veja seus empréstimos!">Ver Seus Empréstimos</a>-->
                        </div>
                    </div>
                    <br/>
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