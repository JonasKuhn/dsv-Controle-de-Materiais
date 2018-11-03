<style type="text/css">
    .table-font{
        font-size: .789rem;
    }
    .table-link{
        text-decoration: none;
        color: black;
    }
    .paginate_button, #apr_filter{
        font-size: .789rem;
    }
</style>
<?php
@$msg = $_GET['msg'];
if (isset($msg) && $msg != false && $msg == "apr") {
    echo "<br/><div class='alert alert-success table-font' role='alert'>Cadastro validado com sucesso!</div>";
}
if (isset($msg) && $msg != false && $msg == "apr_all") {
    echo "<br/><div class='alert alert-success table-font' role='alert'>Todos os cadatros foram validados com sucesso!</div>";
}
?>
<h4 class="mt-md-5 text-center" style="margin-bottom: 2rem">Aguardando Aprovação</h4>
<table id="apr" class="table table-striped table-bordered table-hover dataTable mt-md-5">
    
    <thead class="table-font">
        <tr>
            <th scope="col">Matrícula</th>
            <th scope="col">Nome</th>
            <th scope="col"><a href="?url=apr">Aprovar Todos</a></th>
        </tr>
    </thead>
    <tbody class="table-font">
        <?php
        require './sessao.php';
        include '../conexao.php';
        $sql = "select * from tb_pessoa where fl_validacao = 0";
        $query = $pdo->query($sql);
        foreach ($query as $row) {
            $cod = $row["cod_pessoa"];
            $matricula = $row["nr_matricula"];
            $nome = $row["nome_pessoa"];
            ?>
            <tr>
                <td><?= $matricula ?></td>
                <td><?= $nome ?></td>
                <td><a href="?url=apr&id=<?=$cod?>">Aprovar</a></td>
        </tr>
        <?php } ?>
    </tbody>
</table>




