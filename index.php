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
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <a href="#" style="line-height:90px; margin-left: 100px; float: left;"><img src="img/logo.png" alt="UCEFF" ></a>
        <header>
            <h1 class="d-none d-lg-block text-nowrap text-center">
                Faça seu Empréstimo
            </h1>
        </header>

        <?php
        $url = $_GET['url'];

        switch ($url) {
            // CASE PARA OS MENUS
            case 'selecao.php':
                include './selecao.php';
                break;
            case 'administradores.php':
                include './intranet/login.html';
                break;
            default :
                include './selecao.php';
                break;
        }
        ?>


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