<style type="text/css">
    .table-font{
        font-weight: bold;
        font-size: 1.3rem;
    }
    
    .table-link{
        text-decoration: none;
        color: black;
    }
    
    .table-link:hover{
        text-decoration: none;
    }
</style>
<h1 class="mt-md-5">Usuários Administradores</h1>
<table class="table table-bordered table-hover " style="font-size: 1.2rem">
    <thead>
        <tr>
            <th scope="col"><a href="?url=incluir-admin" class="table-link">
                    <i class="fa fa-plus fa-2x"></i>
                </a></th>
            <th scope="col" class="table-font">#</th>
            <th scope="col" class="table-font">Nome</th>
            <th scope="col" class="table-font">Login</th>
            <th scope="col" class="table-font">Senha</th>
            <th scope="col" class="table-font">Criado</th>
            <th scope="col" class="table-font">Modificado</th>

        </tr>
    </thead>
    <tbody>
        <?php
        include '../conexao.php';
        $sql = "select * from tb_admin";
        $query = $pdo->query($sql);
        foreach ($query as $row){
            $id = $row["cod_admin"];
            $nome = $row["nome_admin"];
            $login = $row["login_admin"];
            $senha = $row["senha_admin"];
            $criado = $row["created"];
            $modificado = $row["modified"];
        }
        ?>
        <tr>
            <td><a href="?url=editar-admin&id=<?= $id ?>" class="table-link">
                    <i class="fa fa-edit fa-2x"></i>
                </a>&nbsp;<a href="?url=excluir-admin&id=<?= $id ?>" onclick="return excluir('<?= $nome ?>');"  class="table-link">
                    <i class="fa fa-trash-o fa-2x"></i>
                </a>
            </td>
            <td scope="row"><?= $id ?></td>
            <td><?= $nome ?></td>
            <td><?= $login ?></td>
            <td>***************</td>
            <td><?= $criado ?></td>
            <td><?= $modificado ?></td>
        </tr>
    </tbody>
</table>