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
    echo "<br/><div class='alert alert-success' role='alert'>Notebook de GTI incluído com sucesso!</div>";
}
?>
<h2 class="mt-md-5" style="margin-bottom: 2rem">Notebooks GTI</h2>
<table id='table' class="table table-striped table-bordered table-hover dataTable mt-md-5">
    <thead>
        <tr>
            <th scope="col"><a href="?url=incluir-gti&id=<?= $id ?>" class="table-link">
                    <i class="fa fa-plus fa-2x"></i>
                </a></th>
            <th scope="col" class="table-font">#</th>
            <th scope="col" class="table-font">Nome</th>
            <th scope="col" class="table-font">Observação</th>
            <th scope="col" class="table-font">GTI</th>
            <th scope="col" class="table-font">Status</th>
            <th scope="col" class="table-font">Criado</th>
            <th scope="col" class="table-font">Modificado</th>

        </tr>
    </thead>
    <tbody class="table-font">
        <?php
        require_once 'sessao.php';
        include '../conexao.php';



        $sql = "select * from tb_equipamento where cod_tipo_equipamento = 2 and fl_curso_gti = true";
        $result = $pdo->query($sql);
        foreach ($result as $row) {
            $id = $row["cod_equipamento"];
            $nome = $row["desc_equipamento"];
            $obs = $row["desc_observacao"];
            $gti = $row["fl_curso_gti"];
            if ($gti == 1) {
                $gti_desc = "Sim";
            } else {
                $gti_desc = "Não";
            }
            $status = $row["fl_status"];
            if ($status == 1) {
                $status_desc = "Disponível";
            } else {
                $status_desc = "Emprestado";
            }
            $criado = $row["created"];
            $modificado = $row["modified"];
            ?>
            <tr>
                <td><a href="?url=editar-tp-equip" class="table-link">
                        <i class="fa fa-edit fa-2x"></i>
                    </a><a href="?url=excluir-tp-equip" onclick="return excluir('<?= $cod ?>');"  class="table-link">
                        <i class="fa fa-trash-o fa-2x"></i>
                    </a>
                </td>
                <td scope="row"><?= $id ?></td>
                <td><?= $nome ?></td>
                <td><?= $obs ?></td>
                <td><?= $gti_desc ?></td>
                <td><?= $status_desc ?></td>
                <td><?= date('d/m/Y  H:i', strtotime($criado)) ?></td>
                <td><?= date('d/m/Y  H:i', strtotime($modificado));
    }
        ?></td>
        </tr>
    </tbody>
</table>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.18/datatables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.18/datatables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
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