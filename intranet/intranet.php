<?php
require_once 'sessao.php';
include '../conexao.php';
?>
<html>
    <head>
        <title>Empréstimo NTI</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="assets/css/datatables.min.css"/>
        <script>
            function excluir(valor) {
                return confirm('Deseja realmente excluir o registro \n' + valor + '?');
            }
        </script>
        <style type="text/css">

            #table_length{
                float: left;
            }
            #table_filter{
                float: right;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <!--Sidebar -->
            <div class="row">

                <!-- Menu -->
                <nav id="menu" class=" mt-md-2 col-md-2" style="margin-right: 3rem;margin-left: 1rem;">
                    <header class="major">
                        <h2>Empréstimos</h2>
                    </header>

                    <ul>
                        <li><a href="intranet.php">Inicial</a></li>
                        <li><a href="intranet.php?url=admin">Administradores</a></li>
                        <li><a href="intranet.php?url=tipo-equip">Cadastro de Tipos</a></li>
                        <li><a href="intranet.php?url=pessoa">Cadastro de Pessoas</a></li>
                        <li><a href="intranet.php?url=gti">Notebooks GTI</a></li>
                        <li>
                            <span class="opener">Equipamentos</span>
                            <ul style="overflow-y: auto;">
                                <?php
                                $sql = "select * from tb_tipo_equipamento";
                                $result = $pdo->query($sql);
                                foreach ($result as $row) {
                                    $nome = $row["desc_tipo"];
                                    $id = $row["cod_tipo_equipamento"];
                                    ?>

                                    <li><a href="intranet.php?url=equip&id=<?= $id ?>"><?= $nome ?></a></li>
                                <?php } ?>


                            </ul>
                        </li>

                        <li><a href="logout.php">Sair</a></li>
                    </ul>
                </nav>
                <div class="col-md-9">
                    <?php
                    @$url = $_GET['url'];
                    switch ($url) {
                        case'admin':
                            include('administradores.php');
                            break;
                        case'incluir-admin':
                            include('./incluir/inc_admin.php');
                            break;
                        case'editar-admin':
                            include('./editar/edt_admin.php');
                            break;
                        case'excluir-admin':
                            include('./excluir/exc_admin.php');
                            break;
                        case'tipo-equip':
                            include('tipo_equipamento.php');
                            break;
                        case'incluir-tp-equip':
                            include('./incluir/inc_tipo_equipamento.php');
                            break;
                        case'editar-tp-equip':
                            include('./editar/edt_tipo_equipamento.php');
                            break;
                        case'excluir-tp-equip':
                            include('./excluir/exc_tipo_equipamento.php');
                            break;
                        case'equip':
                            include('equipamentos.php');
                            break;
                        case'incluir-equip':
                            include('./incluir/inc_equipamento.php');
                            break;
                        case'editar-equip':
                            include('./editar/edt_equipamento.php');
                            break;
                        case'excluir-equip':
                            include('./excluir/exc_equipamento.php');
                            break;
                        case'gti':
                            include 'gti.php';
                            break;
                        case'editar-gti':
                            include './editar/edt_gti.php';
                            break;
                        case'incluir-gti':
                            include './incluir/inc_notebook_gti.php';
                            break;
                        case'excluir-gti':
                            include('./excluir/exc_gti.php');
                            break;
                        case'pessoa':
                            include 'pessoa.php';
                            break;
                        case'incluir-pessoa':
                            include './incluir/inc_pessoa.php';
                            break;
                        case'editar-pessoa':
                            include './editar/edt_pessoa.php';
                            break;
                        case'excluir-pessoa':
                            include './excluir/exc_pessoa.php';
                            break;
                        case'apr':
                            include './editar/pessoa_aprova.php';
                            break;
                        case'devolver-equip':
                            include './editar/devolver_equipamento.php';
                            break;
                        default :
                            include './inicial.php';
                    }
                    ?>
                </div>
            </div>
        </div>


        <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/skel.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="../jquery/jquery.mask.js" type="text/javascript"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/b-1.5.4/b-html5-1.5.4/datatables.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
        <script>
            $(document).ready(function () {
                $('#table').DataTable({
                    "language": {
                        "url": "//cdn.datatables.net/plug-ins/1.10.10/i18n/Portuguese-Brasil.json"
                    },
                    dom: 'Bfrtlpi',
                    buttons: [
                        'excel',
                        'pdf'
                    ]
                });
                setTimeout(function () {
                    $('.alert').fadeOut(800);
                }, 4000);
            });
          
            
            $("#telefone").mask("(00) 00000-0000");
            
             $('#apr').DataTable({
                    "language": {
                        "url": "//cdn.datatables.net/plug-ins/1.10.10/i18n/Portuguese-Brasil.json"
                    },
                    dom: 'frtp',
                    buttons: [
                        'excel',
                        'pdf'
                    ]
                });
                $('#atraso').DataTable({
                    "language": {
                        "url": "//cdn.datatables.net/plug-ins/1.10.10/i18n/Portuguese-Brasil.json"
                    },
                    dom: 'frtp',
                    buttons: [
                        'excel',
                        'pdf'
                    ]
                });
        </script>
    </body>
</html>