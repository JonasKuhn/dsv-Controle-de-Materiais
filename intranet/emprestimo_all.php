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
if (isset($msg) && $msg != false && $msg == "dev") {
    echo "<br/><div class='alert alert-success' role='alert'>Empréstimo devolvido com sucesso!</div>";
}
if (isset($msg) && $msg != false && $msg == "dev_OK") {
    echo "<br/><div class='alert alert-warning' role='alert'>O empréstimo já foi devolvido!</div>";
}
if (isset($msg) && $msg != false && $msg == "erro") {
    echo "<br/><div class='alert alert-danger' role='alert'>Ocorreu um erro ao devolver o empréstimo!</div>";
}
?>
<h3 class="mt-md-5" style="margin-bottom: 2rem">Todos os empréstimos</h3>
<table id="table" class="table table-striped table-bordered table-hover dataTable mt-md-5">

    <thead class="table-font">
        <tr>
            <th scope="col">Matrícula</th>
            <th scope="col">Nome</th>
            <th scope="col">Data</th>
            <th scope="col">Equipamento</th>
            <th scope="col">Situação</th>
            <th scope="col">Ação</th>
        </tr>
    </thead>
    <tbody class="table-font">
        <?php
        include '../conexao.php';
        $sql = "SELECT * FROM tb_emprestimo";
        $result = $pdo->query($sql);
        foreach ($result as $key) {
            $id = $key['cod_emprestimo'];
            $matricula = $key['nr_matricula'];
            $id_pessoa = $key['cod_pessoa'];
            $seleciona_pessoa = "select nome_pessoa from tb_pessoa where cod_pessoa = $id_pessoa";
            $busca_pessoa = $pdo->query($seleciona_pessoa);
            foreach ($busca_pessoa as $pessoa1) {
                $nome_pessoa = $pessoa1['nome_pessoa'];
            }
            $data = $key['data_emprestimo'];
            $id_equip = $key['cod_equipamento'];
            $seleciona_equip = "select desc_equipamento from tb_equipamento where cod_equipamento = $id_equip";
            $query = $pdo->query($seleciona_equip);
            foreach ($query as $row) {
                $equipamento = $row['desc_equipamento'];
            }
                $idsituacao = $key['cod_situacao'];
                
                $busca_sit = "SELECT desc_situacao FROM tb_situacao WHERE cod_situacao = $idsituacao";
                $sit = $pdo->query($busca_sit);
                foreach ($sit as $pega){
                    $situacao = $pega['desc_situacao'];
                }
            ?>
            <tr>
                <td><?= $matricula ?></td>
                <td><?= $nome_pessoa ?></td>
                <td><?= date('d/m/Y', strtotime($data)); ?></td>
                <td><?= $equipamento ?></td>
                <td><?= ucfirst(strtolower($situacao)) ?></td>
                <td><a href="?url=devolver-equip&id=<?= $id ?>&eq=<?= $id_equip ?>">Devolver</a></td>
            </tr>
        <?php } ?>
    </tbody>
</table>







<?php
?>
</body>
</html>
