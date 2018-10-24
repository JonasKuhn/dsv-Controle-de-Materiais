<style type="text/css">
.table-font{
    font-weight: bold;
    font-size: 1rem;
}
.table-link{
    text-decoration: none;
    color: black;
}
</style>
<h1 class="mt-md-5" style="margin-bottom: 2rem">Cadastrar Tipos de Equipamentos</h1>
<table id='table' class="table table-striped table-bordered table-hover dataTable mt-md-5">
    <thead>
        <tr>
            <th scope="col"><a href="?url=cad_equi_inc" class="table-link">
                <i class="fa fa-plus fa-2x"></i>
            </a></th>
            <th scope="col" class="table-font">Código</th>
            <th scope="col" class="table-font">Equipamento</th>
            <th scope="col" class="table-font">Observação</th>

        </tr>
    </thead>
    <tbody>
        <?php
        include '../conexao.php';
        $sql = "select * from tb_tipo_equipamento";
        $query = $pdo->query($sql);
        foreach ($query as $row){
            $cod = $row["cod_tipo_equipamento"];
            $desc = $row["desc_tipo"];
            $qtde = $row["qtd_tipo"];
            
            ?>
            <tr>
                <td><a href="#" class="table-link">
                    <i class="fa fa-edit fa-2x"></i>
                </a><a href="#" onclick="return excluir('<?= $cod ?>');"  class="table-link">
                    <i class="fa fa-trash-o fa-2x"></i>
                </a>
            </td>
            <td scope="row"><?= $cod ?></td>
            <td><?= $desc ?></td>
            <td><?= $qtde; } ?></td>
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