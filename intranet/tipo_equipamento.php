<style type="text/css">
    .table-font{
        font-size: .8rem;
    }
    .table-link{
        text-decoration: none;
        color: black;
    }
</style>
<?php
    @$msg = $_GET['msg'];
    if (isset($msg) && $msg != false && $msg == "inc") {
        echo "<br/><div class='alert alert-success' role='alert'>Tipo de equipamento incluído com sucesso!</div>";
    }
    ?>
<h2 class="mt-md-5" style="margin-bottom: 2rem">Tipos de Equipamentos</h2>
<table id='table' class="table table-striped table-bordered table-hover dataTable mt-md-5">
    <thead>
        <tr>
            <th scope="col"><a href="?url=incluir-equip" class="table-link">
                    <i class="fa fa-plus fa-2x"></i>
                </a></th>
            <th scope="col" class="table-font">#</th>
            <th scope="col" class="table-font">Equipamento</th>
            <th scope="col" class="table-font">Quantidade</th>
            <th scope="col" class="table-font">Criado</th>
            <th scope="col" class="table-font">Modificado</th>

        </tr>
    </thead>
    <tbody class="table-font">
        <?php
        include '../conexao.php';
        $sql = "select * from tb_tipo_equipamento";
        $query = $pdo->query($sql);
        foreach ($query as $row) {
            $cod = $row["cod_tipo_equipamento"];
            $desc = $row["desc_tipo"];
            $qtde = $row["qtd_tipo"];
            $criado = $row["created"];
            $modificado = $row["modified"]
            ?>
            <tr>
                <td><a href="?url=editar-tp-equip" class="table-link">
                        <i class="fa fa-edit fa-2x"></i>
                    </a>&nbsp;<a href="?url=excluir-tp-equip" onclick="return excluir('<?= $cod ?>');"  class="table-link">
                        <i class="fa fa-trash-o fa-2x"></i>
                    </a>
                </td>
                <td scope="row"><?= $cod ?></td>
                <td><?= $desc ?></td>
                <td><?= $qtde ?></td>
                <td><?= date('d/m/Y  H:i', strtotime($criado)) ?></td>
            <td><?= date('d/m/Y  H:i', strtotime($modificado)); } ?></td>
    </td>
        </tr>
    </tbody>
</table>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.18/datatables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.18/datatables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
      </script>
      <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/b-1.5.4/b-html5-1.5.4/datatables.js"></script>
<script>
$(document).ready(function () {
       $('#table').DataTable({
           "language": {
               "url": "//cdn.datatables.net/plug-ins/1.10.10/i18n/Portuguese-Brasil.json"
           },
           dom: 'Bflrtpi',
           buttons: [
               'excel',
               'pdf'
           ]
       });
   });
     </script>