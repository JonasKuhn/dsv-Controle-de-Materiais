<style type="text/css">
    .table-font{
        font-size: .8rem;
    }

    .table-link{
        text-decoration: none;
        color: black;
    }

    .table-link:hover{
        text-decoration: none;
    }
</style>
<h2 class="mt-md-5">Usuários Administradores</h2>
<table id='table' class="table table-striped table-bordered table-hover dataTable">
    <thead>
        <tr>
            <th scope="col"><a href="?url=usuario-incluir" class="table-link">
                    <i class="fa fa-plus fa-2x"></i>
                </a></th>
            <th scope="col">#</th>
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
            $senha = $row["senha_admin"];
            $criado = $row["created"];
            $modificado = $row["modified"];
            ?>
            <tr>
                <td><a href="?url=usuario-alterar&id=<?= $id ?>" class="table-link">
                        <i class="fa fa-edit fa-2x"></i>
                    </a>&nbsp;<a href="?url=usuario-excluir&id=<?= $id ?>" onclick="return excluir('<?= $nome ?>');"  class="table-link">
                        <i class="fa fa-trash-o fa-2x"></i>
                    </a>
                </td>
                <td scope="row"><?= $id ?></td>
                <td><?= $nome ?></td>
                <td><?= $login ?></td>
                <td>&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;</td>
                <td><?= date('d/m/Y  H:i', strtotime($criado)) ?></td>
                <td><?= date('d/m/Y  H:i', strtotime($modificado));
    } ?></td>
        </tr>
    </tbody>
</table>

<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.18/datatables.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>

