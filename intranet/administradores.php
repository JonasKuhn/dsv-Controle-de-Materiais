<style type="text/css">
    .table-font{
        font-size: .8rem;
    }

    .table-link{
        text-decoration: none;
        color: black;
    }

    Updated upstream
    .table-link:hover{
        text-decoration: none;
    }
</style>
<?php

@$msg = $_GET['msg'];
if (isset($msg) && $msg != false && $msg == "inc") {
    echo "<br/><div class='alert alert-success' role='alert'>Administrador incluído com sucesso!</div>";
}
if (isset($msg) && $msg != false && $msg == "alt") {
    echo "<br/><div class='alert alert-success' role='alert'>Administrador alterado com sucesso!</div>";
}
if (isset($msg) && $msg != false && $msg == "exc") {
    echo "<br/><div class='alert alert-success' role='alert'>Administrador excluído com sucesso!</div>";
}
?>


<h2 class="mt-md-5">Administradores</h2>
<table id='table' class="table table-striped table-bordered table-hover dataTable">
    <thead>
        <tr>
            <th scope="col"><a href="?url=incluir-admin" class="table-link">
                    <i class="fa fa-plus fa-2x"></i>
                </a></th>
            <th scope="row">Cód.</th>
            <th scope="col">Nome</th>
            <th scope="col">Login</th>
            <th scope="col">Senha</th>
            <th scope="col">Criado</th>
            <th scope="col">Modificado</th>

        </tr>
    </thead>
    <tbody class="table-font">
        <?php
        include '../conexao.php';
        $sql = "select * from tb_admin";
        $query = $pdo->query($sql);
        foreach ($query as $row) {
            $id = $row["cod_admin"];
            $nome = $row["nome_admin"];
            $login = $row["login_admin"];
            $senha = md5($row["senha_admin"]);
            $criado = $row["created"];
            $modificado = $row["modified"];
            ?>
            <tr>
                <td><a href="?url=editar-admin&id=<?= $id ?>" class="table-link">
                        <i class="fa fa-edit fa-2x"></i>
                    </a><a href="?url=exc_admin&id=<?= $id ?>" onclick="return excluir('<?= $nome ?>');"  class="table-link">
                        <i class="fa fa-trash-o fa-2x"></i>
                    </a>
                </td>
                <td scope="row"><?= $id ?></td>
                <td><?= $nome ?></td>
                <td><?= $login ?></td>
                <td>&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;</td>
                <td><?= date('d/m/Y  H:i', strtotime($criado)) ?></td>
                <td><?= date('d/m/Y  H:i', strtotime($modificado));
    }
        ?></td>
        </tr>
    </tbody>
</table>



