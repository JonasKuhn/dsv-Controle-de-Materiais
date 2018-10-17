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
        <script>
            function excluir(valor) {
                return confirm('Deseja realmente excluir o registro ' + valor + '?');
            }
        </script>
        <script>
            function editar(valor) {
                return confirm('Deseja realmente salvar as alterações em ' + valor + '?');
            }
        </script>
        <script>
            function salvar() {
                return confirm('Deseja realmente salvar as alterações?');
            }
        </script>
    </head>

    <body>
        <a href="index.php" style="line-height:90px; margin-left: 100px; float: left;"><img src="img/logo.png" alt="UCEFF" ></a>
        <header>
            <h1 class="d-none d-lg-block text-nowrap text-center">
                Faça seu Login
            </h1>
        </header>

        <div class="trava"></div>
        <div class="col-md-4 offset-md-4 mt-md-5">
            <form action="loginBD.php" method="post" name="form" id="form">
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon" style="margin-right: 0.4rem;">
                            <i class="fa fa-user"></i>
                        </div>
                        <input name="tipo_pessoa" value="<?= $_GET['i'];?>" style="display: none;">
                        <input type="text" name="nr_matricula" id="codigo" value="" class="form-control" placeholder="Usuário">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon" style="margin-right: 0.4rem;">
                            <i class="fa fa-asterisk"></i>
                        </div>
                        <input type="password" name="senha_pessoa" id="senha" class="form-control" placeholder="Senha">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <a href="cadastro.php?i=<?= $_GET['i'];?>" >Não possuí cadastro?</a>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary" style="float: right; color: white;">
                            Entrar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>