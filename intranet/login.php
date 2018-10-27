
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

    <link href="../dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="../css/estilo.css" rel="stylesheet" type="text/css"/>
    <link href="../events/css/hover.css" rel="stylesheet" type="text/css"/>
    <link href="../font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
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
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 offset-md-4 mt-md-5">
            <div class="col-md-4 offset-4 mt-md-5">
                <img src="../img/pic_logo_inst.png" alt="">
            </div>
            <div class="row">
                <div class="col-md-10 offset-1 mt-md-5">
                    <form action="autentica.php" method="post" name="form" id="form">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon" style="margin-right: 0.4rem;">
                                    <i class="fa fa-user"></i>
                                </div>
                                <input type="text" name="login" id="codigo" value="" class="form-control" placeholder="Usuário">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon" style="margin-right: 0.4rem;">
                                    <i class="fa fa-asterisk"></i>
                                </div>
                                <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha">
                            </div>
                        </div>
                        <div class="row">
                            
                            <div class="col-md-12 mt-md-2">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Entrar
                                </button>
                            </div>
                            <div class="col-md-12">
                                <?php
                                @$msg = $_GET['msg'];

                                if (isset($msg) && $msg != false && $msg == "aut") {
                                    echo "<br/><div class='alert alert-danger' role='alert'>Autenticação necessária</div>";
                                }
                                if (isset($msg) && $msg != false && $msg == "bad_aut") {
                                    echo "<br/><div class='alert alert-danger' role='alert'>Login ou Senha Incorretos</div>";
                                }
                                if (isset($msg) && $msg != false && $msg == "empty") {
                                    echo "<br/><div class='alert alert-danger' role='alert'>Todos os Campos Devem Ser Preenchidos</div>";
                                }
                                
                                ?>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>