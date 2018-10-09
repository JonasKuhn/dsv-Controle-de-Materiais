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

    </head>

    <body>
        <a href="#" style="line-height:90px; margin-left: 100px; float: left;"><img src="img/logo.png" alt="UCEFF" ></a>
        <header>
            <h1 class="d-none d-lg-block text-nowrap text-center">
                Preencha seus dados
            </h1>
        </header>
        <div class="trava"></div>
        <form>
            <div class="container-fluid">
                <div class="col-md-6 offset-md-3">
                    <!-- Text input-->

                    <div class="form-group row offset-md-1">
                        <label class="col-md-2 col-form-label">Matrícula:</label>  
                        <div class="col-md-8 ml-3">
                            <input name="matricula" type="text" placeholder="Digite sua Matrícula" class="form-control input-md" required="">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group row offset-md-1">
                        <label class="col-md-2 col-form-label">Nome:</label>  
                        <div class="col-md-8 ml-3 ">
                            <input name="nome" type="text" placeholder="Digite seu nome" class="form-control input-md" required="">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group row offset-md-1">
                        <label class="col-md-2 col-form-label">Celular:</label>  
                        <div class="col-md-8 ml-3">
                            <input name="telefone" type="tel" placeholder="Digite seu número de telefone" class="form-control input-md" required="">

                        </div>
                    </div>

                    <!-- text input-->
                    <div class="form-group row offset-md-1">
                        <label class="col-md-2 text-nowrap col-form-label">E-mail:</label>
                        <div class="col-md-8 ml-3 ">
                            <input name="email" type="email" placeholder="Digite seu e-mail" class="form-control input-md" required="">

                        </div>
                    </div>

                    <!-- text input-->
                    <div class="form-group row offset-md-1">
                        <label class="col-md-2 col-form-label">Sala:</label>
                        <div class="col-md-8 ml-3 ">
                            <input name="sala" type="text" placeholder="Digite sua sala" class="form-control input-md" required="">

                        </div>
                    </div>
                    <button type="button" class="btn btn-secondary btn-lg">
                        <a href="#" style="color: white">Voltar</a>
                    </button>
                    <button type="button" class="btn btn-primary btn-lg" style="float: right;">
                        <a href="#" style="color: white;">Concluir</a>
                    </button>
                    <div class="trava"></div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
