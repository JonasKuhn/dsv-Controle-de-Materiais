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
        <header > 
            <h1 class="text-center d-none d-lg-block">
                Preencha seus dados:
            </h1>
        </header>
        <div class="container-fluid">
            <div class=" offset-md-4">
                <!-- Text input-->

                <div class="form-group row">
                    <label class="col-md-1" for="idDepto">Matrícula:</label>  
                    <div class="col-md-5 ml-3">
                        <input id="idDepto" name="idDepto" type="text" placeholder="Digite sua Matrícula" class="form-control input-md" required="">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group row">
                    <label class="col-md-1" for="idDepto">Nome:</label>  
                    <div class="col-md-5 ml-3 ">
                        <input id="idDepto" name="idDepto" type="text" placeholder="Digite seu nome" class="form-control input-md" required="">

                    </div>
                </div>

                <!-- Text input-->
                <div class="form-group row">
                    <label class="col-md-1" for="idUsuario">Celular:</label>  
                    <div class="col-md-5 ml-3">
                        <input id="idUsuario" name="idUsuario" type="text" placeholder="Digite seu número de telefone" class="form-control input-md" required="">

                    </div>
                </div>

                <!-- text input-->
                <div class="form-group row">
                    <label class="col-md-1 text-nowrap" for="idSenha">E-mail:</label>
                    <div class="col-md-5 ml-3 ">
                        <input id="idSenha" name="idSenha" type="text" placeholder="Digite seu e-mail" class="form-control input-md" required="">

                    </div>
                </div>

                <!-- text input-->
                <div class="form-group row">
                    <label class="col-md-1 " for="idSenha">Sala:</label>
                    <div class="col-md-5 ml-3 ">
                        <input id="idSenha" name="idSenha" type="text" placeholder="Digite sua sala" class="form-control input-md" required="">

                    </div>
                </div>
            </div>
            <!-- Button (Double) -->
            <div class="form-group">
                <label class="col-md-4 form-group " for="idConfirmar"></label>
                <div class="col-md-12 ">
                    <button id="idCancelar" name="idCancelar" class="btn btn-danger col-md-2 offset-md-1 ">Voltar</button>
                    <button id="idConfirmar" name="idConfirmar" class="btn btn-primary col-md-2 offset-md-6">Próximo</button>                
                </div>
            </div>
        </div>
    </body>
</html>
