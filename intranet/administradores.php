    <style type="text/css">
    .table-font{
        font-weight: bold;
        font-size: 1rem;
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
<table id='table' class="table table-striped table-bordered table-hover dataTable">
    <thead>
        <tr>
            <th scope="col"><a href="?url=usuario-incluir" class="table-link">
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
        <td>***************</td>
        <td><?= $criado ?></td>
        <td><?= $modificado; }?></td>
    </tr>
</tbody>
</table>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.18/datatables.min.js"></script>
<script>
   $(document).ready(function (){
     $('#table').DataTable({
      "language": {
       "url": "//cdn.datatables.net/plug-ins/1.10.10/i18n/Portuguese-Brasil.json"
   }
});
 });
</script>
