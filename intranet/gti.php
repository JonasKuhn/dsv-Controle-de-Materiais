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
$sql1 = "select desc_tipo from tb_tipo_equipamento where cod_tipo_equipamento = $id";
$query = $pdo->query($sql1);
foreach ($query as $key) {
    $nomeEq = $key['desc_tipo'];
}
@$msg = $_GET['msg'];
if (isset($msg) && $msg != false && $msg == "inc") {
    echo "<br/><div class='alert alert-success' role='alert'>Notebook incluído com sucesso!</div>";
}
if (isset($msg) && $msg != false && $msg == "alt") {
    echo "<br/><div class='alert alert-success' role='alert'>Notebook alterado com sucesso!</div>";
}
if (isset($msg) && $msg != false && $msg == "exc") {
    echo "<br/><div class='alert alert-success' role='alert'>Notebook excluído com sucesso!</div>";
}
?>
<h2 class="mt-md-5" style="margin-bottom: 2rem">Notebooks GTI</h2>
<table id='table' class="table table-striped table-bordered table-hover table-responsive-lg dataTable mt-md-5">
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
            <th scope="col" class="table-font">Aluno</th>
            <th scope="col" class="table-font">Turma</th>
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
            $aluno = $row["aluno"];
            $turma = $row["turma"];
            $criado = $row["created"];
            $modificado = $row["modified"];
            ?>
            <tr>
                <td><a href="?url=editar-gti&id=<?= $id ?>" class="table-link">
                        <i class="fa fa-edit fa-2x"></i>
                    </a><a href="?url=excluir-gti&id=<?= $id ?>" onclick="return excluir('<?= $nome ?>');"  class="table-link">
                        <i class="fa fa-trash-o fa-2x"></i>
                    </a>
                </td>
                <td scope="row"><?= $id ?></td>
                <td><?= $nome ?></td>
                <td><?= $obs ?></td>
                <td><?= $gti_desc ?></td>
                <td><?= $status_desc ?></td>
                <td><?= $aluno ?></td>
                <td><?= $turma ?></td>
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



