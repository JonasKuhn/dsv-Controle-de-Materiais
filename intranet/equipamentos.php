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
$id = $_GET ['id'];
$sql1 = "select desc_tipo from tb_tipo_equipamento where cod_tipo_equipamento = $id";
$query = $pdo->query($sql1);
foreach ($query as $key) {
    #print_r($key);
    $nomeEq = $key['desc_tipo'];
}
@$msg = $_GET['msg'];
if (isset($msg) && $msg != false && $msg == "inc") {
    echo "<br/><div class='alert alert-success' role='alert'>$nomeEq incluído com sucesso!</div>";
}
if (isset($msg) && $msg != false && $msg == "alt") {
    echo "<br/><div class='alert alert-success' role='alert'>$nomeEq alterado com sucesso!</div>";
}
if (isset($msg) && $msg != false && $msg == "exc") {
    echo "<br/><div class='alert alert-success' role='alert'>$nomeEq excluído com sucesso!</div>";
}
if (isset($msg) && $msg != false && $msg == "erro") {
    echo "<br/><div class='alert alert-danger' role='alert'>Não foi possível excluir o equipamento, existem vínculos em empréstimos</div>";
}

?>
<h2 class="mt-md-5" style="margin-bottom: 2rem"><?=$nomeEq?></h2>
<table id='table' class="table table-striped table-bordered table-hover table-responsive-lg dataTable mt-md-5">
    <thead>
        <tr>
            <th scope="col"><a href="?url=incluir-equip&id=<?= $id ?>" class="table-link">
                    <i class="fa fa-plus fa-2x"></i>
                </a></th>
            <th scope="col" class="table-font">#</th>
            <th scope="col" class="table-font">Nome</th>
            <th scope="col" class="table-font">Observação</th>
            <th scope="col" class="table-font">GTI</th>
            <th scope="col" class="table-font">Status</th>
            <th scope="col" class="table-font">Tipo</th>
            <th scope="col" class="table-font">Criado</th>
            <th scope="col" class="table-font">Modificado</th>

        </tr>
    </thead>
    <tbody class="table-font">
        <?php
        require_once 'sessao.php';
        include '../conexao.php';



        $sql = "select * from tb_equipamento where cod_tipo_equipamento = $id and fl_curso_gti = false";
        $result = $pdo->query($sql);
        foreach ($result as $row) {
            $id = $row["cod_equipamento"];
            $nome = $row["desc_equipamento"];
            $obs = $row["desc_observacao"];
            $flgti = $row["fl_curso_gti"];
            if ($flgti == 0) {
                $flgti_desc = "Não";
            } else {
                $flgti_desc = "Sim";
            }
            $status = $row["fl_status"];
            if ($status == 1) {
                $status_desc = "Emprestado";
            } else {
                $status_desc = "Disponível";
            }

            $id_tipo = $row["cod_tipo_equipamento"];
            $sql = "select desc_tipo from tb_tipo_equipamento where cod_tipo_equipamento = $id_tipo";
            $result = $pdo->query($sql);
            foreach ($result as $key) {
                $tipo = $key["desc_tipo"];
            }

            $criado = $row["created"];
            $modificado = $row["modified"];
            #if ($modificado == ""){
            #	$modificado = $criado;
            #}
            ?>
            <tr>
                <td><a href="?url=editar-equip&id=<?=$id?>" class="table-link">
                        <i class="fa fa-edit fa-2x"></i>
                    </a>&nbsp;<a href="?url=excluir-equip&cod=<?=$id?>&id=<?=$id_tipo?>" onclick="return excluir('<?= $nome ?>');"  class="table-link">
                        <i class="fa fa-trash-o fa-2x"></i>
                    </a>
                </td>
                <td scope="row"><?= $id ?></td>
                <td><?= $nome ?></td>
                <td><?= $obs ?></td>
                <td><?= $flgti_desc ?></td>
                <td><?= $status_desc ?></td>
                <td><?= $tipo ?></td>
                <td><?= date('d/m/Y  H:i', strtotime($criado)) ?></td>
                <td><?= date('d/m/Y  H:i', strtotime($modificado));
    }
        ?></td>
        </tr>
    </tbody>
</table>


