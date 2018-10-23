<style type="text/css">
    .table-font{
        font-weight: bold;
        font-size: 1.3rem;
    }
    .table-link{
        text-decoration: none;
        color: black;
    }
</style>
<h1 style="margin-top: 3rem">Cadastrar Equipamentos</h1>
<table class="table table-bordered table-hover table-responsive-md" style="font-size: 1.2rem">
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
        $sql = "select * from tb_equipamento";
        $query = $pdo->query($sql);
        foreach ($query as $row):
            $cod = $row["cod_equipamento"];
            $desc = $row["desc_equipamento"];
            $obs = $row["desc_observacao"];
        endforeach;
        ?>
        <tr>
            <td><a href="#" class="table-link">
                    <i class="fa fa-edit fa-2x"></i>
                </a><br><a href="#" onclick="return excluir('<?= $cod ?>');"  class="table-link">
                    <i class="fa fa-trash-o fa-2x"></i>
                </a>
            </td>
            <td scope="row"><?= $cod ?></td>
            <td><?= $desc ?></td>
            <td><?= $obs ?></td>
        </tr>
    </tbody>
</table>