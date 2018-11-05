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
        <script src="jquery/jquery.mask.js" type="text/javascript"></script>
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
        <script>
            function salvar() {
                return confirm('Seus dados estão todos corretos?');
            }
        </script>

    </head>

    <body>
        <a href="index.php" style="line-height:90px; margin-left: 100px; float: left;"><img src="img/logo.png" alt="UCEFF" ></a>
        <header>
            <h1 class="d-none d-lg-block text-nowrap text-center">
                Preencha seus dados
            </h1>
        </header>
        <div class="trava"></div>

        <form method="POST" action="cadastroBD.php" enctype="multipart/form-data">
            <div class="container-fluid">
                <div class="col-md-6 offset-md-3 mt-md-5">
                    <div class="form-group row offset-md-1"> 
                        <label class="col-md-2 col-form-label">Tipo Pessoa:</label>  
                        <div class="col-md-8 ml-3 ">
                            <select class="form-control" name="cod_tipo_pessoa" required="">
                                <?php
                                include './conexao.php';
                                $sqlTipoPessoa = "SELECT cod_tipo_pessoa, desc_tipo FROM tb_tipo_pessoa;";
                                $queryTipoPessoa = $pdo->prepare($sqlTipoPessoa);
                                $queryTipoPessoa->execute();
                                while ($dadosTipoPessoa = $queryTipoPessoa->fetch()) {
                                    $desc_tipo = $dadosTipoPessoa['desc_tipo'];
                                    $cod_tipo_pessoa = $dadosTipoPessoa['cod_tipo_pessoa'];
                                    if ($desc_tipo != 'Administrador') {
                                        ?>
                                        <option value="<?= $cod_tipo_pessoa; ?>"><?= $desc_tipo; ?></option>
                                        <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row offset-md-1">
                        <label class="col-md-2 col-form-label">Matrícula:</label>  
                        <div class="col-md-8 ml-3">
                            <input onkeyup="somenteNumeros(this);" 
                                   maxlength="6" type="text"  
                                   ng-model="numero.valor"
                                   name="nr_matricula" type="text" 
                                   placeholder="Digite sua Matrícula" 
                                   class="form-control input-md" required="">

                        </div>
                    </div>

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
                            <input type="text" class="form-control" name="telefone_pessoa" id="telefone_pessoa"
                                   pattern="\([0-9]{2}\)[\s][0-9]{5}-[0-9]{3,4}"
                                   placeholder="(11) 12345-6789">
                        </div>
                    </div>

                    <!-- text input-->
                    <div class="form-group row offset-md-1">
                        <label class="col-md-2 text-nowrap col-form-label">E-mail:</label>
                        <div class="col-md-8 ml-3 ">
                            <input name="email_pessoa" type="email" placeholder="Digite seu e-mail" class="form-control input-md" required="">

                        </div>
                    </div>
                    <?php
                    @$msg = $_GET['msg'];

                    if (isset($msg) && $msg != false && $msg == "alert_ja_cadastrado") {
                        echo "<div class='alert alert-danger fade show text-center' role='alert'> "
                        . "<strong>ALERTA!</strong> <br>"
                        . "Matricula já esta cadastrada!!"
                        . "</div>";
                    }
                    ?>
                    <div class="row mt-md-5">
                        <div class="col-md-6">
                            <a href="login.php?i=<?= $_GET['i']; ?> ">
                                <button type="button" class="btn btn-secondary" style="color: white">
                                    Voltar
                                </button>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <button type="submit" onclick="return salvar();" class="btn btn-primary" style="float: right; color: white">
                                Cadastrar
                            </button>
                        </div>
                    </div>
                    <div class="trava"></div>
                </div>
            </div>
            <script type="text/javascript">
                $('#telefone_pessoa').mask('(00) 00000-0000');
            </script>
        </form>
    </body>
</html>
