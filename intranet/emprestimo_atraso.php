<style type="text/css">
    .table-font{
        font-size: .789rem;
    }
    .table-link{
        text-decoration: none;
        color: black;
    }
    .paginate_button, #atraso_filter{
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
<h4 class="mt-md-5 text-center" style="margin-bottom: 2rem">Empréstimos Atrasados</h4>
<table id="atraso" class="table table-striped table-bordered table-hover dataTable mt-md-5">

    <thead class="table-font">
        <tr>
            <th scope="col">Matrícula</th>
            <th scope="col">Data</th>
            <th scope="col">Equipamento</th>
            <th scope="col">Ação</th>
        </tr>
    </thead>
    <tbody class="table-font">
        <?php
        include '../conexao.php';
        $sql = "SELECT * FROM tb_emprestimo WHERE cod_situacao = 3";
        $result = $pdo->query($sql);
        foreach ($result as $key) {
            $matricula = $key['nr_matricula'];
            $data = $key['data_emprestimo'];
            $id_equip = $key['cod_equipamento'];
            $seleciona_equip = "select desc_equipamento from tb_equipamento where cod_equipamento = $cod";
            $query = $pdo->query($seleciona_equip);
            foreach ($query as $row) {
                $equipamento = $row['desc_equipamento'];
            }
            ?>
            <tr>
                <td><?= $matricula ?></td>
                <td><?= date('d/m/Y', strtotime($data)); ?></td>
                <td><?= $equipamento ?></td>
                <td><a href="?url=devolver-equip">Devolver</a></td>
            </tr>
        <?php } ?>
    </tbody>
</table>







<?php
?>
</body>
</html>
