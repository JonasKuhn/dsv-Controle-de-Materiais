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
if (isset($msg) && $msg != false && $msg == "alt") {
    echo "<br/><div class='alert alert-success' role='alert'>Tipo de equipamento alterado com sucesso!</div>";
}
if (isset($msg) && $msg != false && $msg == "exc") {
    echo "<br/><div class='alert alert-success' role='alert'>Tipo de equipamento excluído com sucesso!</div>";
}
if (isset($msg) && $msg != false && $msg == "erro") {
    echo "<br/><div class='alert alert-danger' role='alert'>Não foi possível excluir o registro, existem equipamentos vinculados! </div>";
}
?>
<h2 class="mt-md-5" style="margin-bottom: 2rem">Tipos de Equipamentos</h2>
<table id='table' class="table table-striped table-bordered table-hover table-responsive-lg dataTable mt-md-5">
    <thead>
        <tr>
            <th scope="col"><a href="?url=incluir-tp-equip" class="table-link">
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
        require './sessao.php';
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
                <td><a href="?url=editar-tp-equip&id=<?= $cod ?>" class="table-link">
                        <i class="fa fa-edit fa-2x"></i>
                    </a>&nbsp;<a href="?url=excluir-tp-equip&id=<?= $cod ?>" onclick="return excluir('<?= $desc ?>');"  class="table-link">
                        <i class="fa fa-trash-o fa-2x"></i>
                    </a>
                </td>
                <td scope="row"><?= $cod ?></td>
                <td><?= $desc ?></td>
                <td><?= $qtde ?></td>
                <td><?= date('d/m/Y  H:i', strtotime($criado)) ?></td>
                <td><?php
                    if ($modificado <= '2018-01-01') {
                        echo $modificado = '---';
                    } else {
                        echo date('d/m/Y  H:i', strtotime($modificado));
                    }
                }
                ?></td>
        </tr>
    </tbody>
</table>


