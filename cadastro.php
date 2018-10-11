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
        <script src="dist/js/bootstrap.js" type="text/javascript"></script>
        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
        <script src="jquery/jquery.js" type="text/javascript"></script>
    </head>

    <body>
        <a href="#" style="line-height:90px; margin-left: 100px; float: left;"><img src="img/logo.png" alt="UCEFF" ></a>
        <header>
            <h1 class="d-none d-lg-block text-nowrap text-center">
                Preencha seus dados
            </h1>
        </header>
        <div class="trava"></div>
        <form method="POST" action="cadastro_BD.php" enctype="multipart/form-data">
            <div class="container-fluid">
                <div class="col-md-6 offset-md-3 mt-md-5">
                    <!-- Text input-->

                    <div class="form-group row offset-md-1">
                        <label class="col-md-2 col-form-label">Matrícula:</label>  
                        <div class="col-md-8 ml-3">
                            <input name="cod_tipo_pessoa" value="<?= $_GET['i']; ?>" style="display: none;">
                            <input name="nr_matricula" type="text" placeholder="Digite sua Matrícula" class="form-control input-md" required="">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group row offset-md-1">
                        <label class="col-md-2 col-form-label">Nome:</label>  
                        <div class="col-md-8 ml-3 ">
                            <input name="nome_pessoa" type="text" placeholder="Digite seu nome" class="form-control input-md" required="">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group row offset-md-1">
                        <label class="col-md-2 col-form-label">Celular:</label>  
                        <div class="col-md-8 ml-3">
                            <input name="telefone_pessoa" type="tel" placeholder="Digite seu número de telefone" class="form-control input-md" required="">

                        </div>
                    </div>

                    <!-- text input-->
                    <div class="form-group row offset-md-1">
                        <label class="col-md-2 text-nowrap col-form-label">E-mail:</label>
                        <div class="col-md-8 ml-3 ">
                            <input name="email_pessoa" type="email" placeholder="Digite seu e-mail" class="form-control input-md" required="">

                        </div>
                    </div>

                    <a href="validacaoCadastro.php"><button type="button" class="btn btn-secondary" style="color: white">
                        Voltar
                        </button></a>
                    <button type="submit" class="btn btn-primary" style="float: right; color: white" >
                        Concluir
                    </button>
                    <div class="trava"></div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
