<?php require_once 'sessao.php'; ?>
<html>
    <head>
        <title>Empréstimo NTI</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="assets/css/datatables.min.css"/>

    </head>
    <body>
        <!--Sidebar -->
        <div class="row">
            <div id="sidebar" style="margin-right: 4rem;">
                <div class="inner">

                    <!-- Menu -->
                    <nav id="menu" style="font-size: 1rem">
                        <header class="major">
                            <h2>Empréstimo NTI</h2>
                        </header>

                        <ul>
                            <li><a href="intranet.php">Página Inicial</a></li>
                            <li><a href="intranet.php?url=admin">Administradores</a></li>
                            <li><a href="intranet.php?url=tipo-equip">Cadastro de Tipos</a></li>
                            <li><a href="#">Cadastro de Alunos</a></li>
                            <li>
                                <span class="opener">Equipamentos</span>
                                <ul>
                                    <li><a href="#">Notebook</a></li>
                                    <li><a href="#">Régua</a></li>
                                    <li><a href="#">Projetor</a></li>
                                    <li><a href="#">Adaptador HDMI</a></li>
                                    <li><a href="#">Passador de Slides</a></li>

                                </ul>
                            </li>
                            <li><a href="logout.php">Sair</a></li>
                        </ul>
                    </nav>

                    <!--Footer--> 
                    <footer id="footer">
                        <p class="copyright">&copy; Leonardo Roden. All rights reserved.</p>
                    </footer>
                </div>
            </div>
            <div class="col-md-8">
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
                    default :
                }
                ?>
            </div>
            <div class="trava"></div>
        </div>


        <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/skel.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="assets/js/datatables.min.js"></script>

    </body>
</html>