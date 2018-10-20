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
            function somenteNumeros(num) {
                var er = /[^0-9.]/;
                er.lastIndex = 0;
                var campo = num;
                if (er.test(campo.value)) {
                    campo.value = "";
                }
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
            <form action="loginBD.php" method="post" target="_self" name="form" id="form">
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon" style="margin-right: 0.4rem;">
                            <i class="fa fa-user-circle"></i>
                        </div>
                        <input onkeyup="somenteNumeros(this);" 
                               maxlength="6"  
                               ng-model="numero.valor"
                               name="nr_matricula" type="text" 
                               placeholder="Digite sua Matrícula" 
                               class="form-control input-md" required="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon" style="margin-right: 0.4rem;">
                            <i class="fa fa-asterisk"></i>
                        </div>
                        <input type="password" name="senha_pessoa" id="senha" class="form-control" required="" placeholder="Senha">
                    </div>
                </div>
                <?php
                $msg = $_GET['msg'];
                if (isset($msg) && $msg != false && $msg == "alert") {
                    echo "<div class='alert alert-warning fade show text-center' role='alert'> "
                    . "<strong>ALERTA!</strong> <br>"
                    . "Seu cadastro ainda não foi validado entre em contato com o NTI."
                    . "</div>";
                }
                if (isset($msg) && $msg != false && $msg == "error") {
                    echo "<div class='alert alert-danger fade show text-center' role='alert'> "
                    . "<strong>ALERTA!</strong> <br>"
                    . "Matricula ou senha incorreta!<br>"
                    . "Caso não consiga logar entre em contato com o NTI."
                    . "</div>";
                }
                if (isset($msg) && $msg != false && $msg == "alert_cadastrado") {
                    echo "<div class='alert alert-danger fade show text-center' role='alert'> "
                    . "<strong>SUCESSO!</strong> <br>"
                    . "Matricula cadastrada!!"
                    . "</div>";
                }
                if (isset($msg) && $msg != false && $msg == "alert_ja_cadastrado") {
                    echo "<div class='alert alert-danger fade show text-center' role='alert'> "
                    . "<strong>ALERTA!</strong> <br>"
                    . "Matricula já esta cadastrada!!"
                    . "</div>";
                }
                ?>

                <div class="text-center">
                    <a href="cadastro.php?i=<?= $_GET['i']; ?>" >Não possuí cadastro?</a>
                </div>
                <div class="row mt-md-2">
                    <div class="col-md-6">
                        <a href="index.php?url=selecao_pessoa.php">
                            <button type="button" class="btn btn-secondary" style="color: white">
                                Voltar
                            </button>
                        </a>
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