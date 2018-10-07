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

    <body>
        <a href="#" style="line-height:90px; margin-left: 100px; float: left;"><img src="img/logo.png" alt="UCEFF" ></a>
        <header>
            <h1 class="d-none d-lg-block text-nowrap text-center">
                Faça seu Empréstimo
            </h1>

        </header>
        <div class="trava container-fluid mt-md-5">
            <div class="row item-card text-center">
                <div class="align-center col-md-3 offset-md-3">
                    <div class="col align-self-md-center">
                        <div class="card h-100">
                            <a href="#" class="hvr-grow-shadow">
                                <div class="card-body" style="height: 200px;">
                                    <h3>Alunos</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col col-md-3">
                    <div class="card h-100">
                        <a href="#" class="hvr-grow-shadow">
                            <div class="card-body"  style="height: 200px;">
                                <h3>Professores</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="item-card fixed-bottom " >
                <a href="#" class="hvr-bubble-float-bottom-new" style="float: right; margin-right: 100px; margin-bottom:0px; border-radius: 2px; color: #FFF; padding: 5px;">
                    Administradores
                </a>
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