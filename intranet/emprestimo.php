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
if (isset($msg) && $msg != false && $msg == "deav") {
    echo "<br/><div class='alert alert-success table-font' role='alert'>Empréstimo devolvido com sucesso!</div>";
}
if (isset($msg) && $msg != false && $msg == "erro") {
    echo "<br/><div class='alert alert-danger table-font' role='alert'>Ocorreu um erro ao devolver o empréstimo!</div>";
}
?>
<h3 class="mt-md-5 text-center" style="margin-bottom: 2rem">Empréstimos</h3>
<table class="table table-striped table-bordered table-hover dataTable mt-md-5 inicial">

    <thead class="table-font">
        <tr>
            <th scope="col">Matrícula</th>
            <th scope="col">Nome</th>
            <th scope="col">Data</th>
            <th scope="col">Equipamento</th>
            <th scope="col">Ação</th>
        </tr>
    </thead>
    <tbody class="table-font">
        <?php
        include '../conexao.php';
        $sql = "SELECT * FROM tb_emprestimo WHERE cod_situacao != 3 AND cod_situacao != 2";
        $result = $pdo->query($sql);
        foreach ($result as $key) {
            $id = $key['cod_emprestimo'];
            $matricula = $key['nr_matricula'];
            $id_pessoa = $key['cod_pessoa'];
            $seleciona_pessoa = "select nome_pessoa from tb_pessoa where cod_pessoa = $id_pessoa";
            $busca_pessoa = $pdo->query($seleciona_pessoa);
            foreach($busca_pessoa as $pessoa1){
                $nome_pessoa = $pessoa1['nome_pessoa'];
            }
            $data = $key['data_emprestimo'];
            $id_equip = $key['cod_equipamento'];
            $seleciona_equip = "select desc_equipamento from tb_equipamento where cod_equipamento = $cod";
            $query = $pdo->query($seleciona_equip);
            foreach ($query as $row) {
                $equipamento = $row['desc_equipamento'];
            }
            ?>
            <tr>
                <td><?=$matricula?></td>
                <td><?=$nome_pessoa?></td>
                <td><?= date('d/m/Y', strtotime($data)); ?></td>
                <td><?= $equipamento ?></td>
                <td><a href="?url=devolver-equip&id=<?=$id?>&eq=<?=$id_equip?>">Devolver</a></td>
            </tr>
        <?php } ?>
    </tbody>
</table>







<?php
?>
</body>
</html>
