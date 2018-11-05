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

        <style type="text/css">
            .table-font{
                font-size: .789rem;
            }
        </style>
        <script>
            function voltar() {
                return confirm('Deseja realmente sair?');
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
            <div class="d-none d-lg-block text-nowrap text-center">
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
                            <h3>Bem-Vindo <?= $_SESSION["nome"]; ?>!</h3>
                        </div>
                    </div>


                    <table class="table table-striped table-bordered table-hover dataTable mt-md-5 ">
                        <thead class="table-font">
                            <tr>
                                <th scope="col">Matrícula</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Data</th>
                                <th scope="col">Equipamento</th>
                            </tr>
                        </thead>
                        <tbody class="table-font">
                            <?php
                            include './conexao.php';
                            $sql = "SELECT cod_emprestimo,nr_matricula,cod_pessoa,cod_equipamento FROM tb_emprestimo WHERE cod_situacao != 3 AND cod_situacao != 2";
                            $result = $pdo->query($sql);
                            foreach ($result as $key) {
                                $id = $key['cod_emprestimo'];
                                $matricula = $key['nr_matricula'];
                                $id_pessoa = $key['cod_pessoa'];
                                $seleciona_pessoa = "SELECT nome_pessoa FROM tb_pessoa where cod_pessoa = $id_pessoa";
                                $busca_pessoa = $pdo->query($seleciona_pessoa);
                                foreach ($busca_pessoa as $pessoa1) {
                                    $nome_pessoa = $pessoa1['nome_pessoa'];
                                }
                                $data = $key['data_emprestimo'];
                                $id_equip = $key['cod_equipamento'];
                                $seleciona_equip = "select desc_equipamento from tb_equipamento where cod_equipamento = $id_equip";
                                $query = $pdo->query($seleciona_equip);
                                foreach ($query as $row) {
                                    $equipamento = $row['desc_equipamento'];
                                }
                                ?>
                                <tr>
                                    <td><?= $matricula ?></td>
                                    <td><?= $nome_pessoa ?></td>
                                    <td><?= date('d/m/Y', strtotime($data)); ?></td>
                                    <td><?= $equipamento ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                    <div class="row mt-md-2">
                        <div class="col-md-6">
                            <a href="seleciona_equipamentos.php">
                                <button type="button" class="btn btn-secondary" style="color: white">
                                    Voltar
                                </button>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <button type="submit" onclick="return voltar();" class="btn btn-primary" style="float: right; color: white;">
                                Sair
                            </button>
                        </div>
                    </div>
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