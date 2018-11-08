<style type="text/css">
    .table-font{
        font-size: .789rem;
    }
    .table-link{
        text-decoration: none;
        color: black;
    }

</style>
<h4 class="mt-md-5 text-center" style="margin-bottom: 2rem">Aguardando Aprovação</h4>
<table class="table table-striped table-bordered table-hover dataTable mt-md-5 inicial">
    
    <thead class="table-font">
        <tr>
            <th scope="col">Matrícula</th>
            <th scope="col">Nome</th>
            <th scope="col">Tipo</th>
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
            $idTP = $row["cod_tipo_pessoa"];
            $sqlTP = "SELECT desc_tipo from tb_tipo_pessoa WHERE cod_tipo_pessoa = $idTP";
            $result = $pdo->query($sqlTP);
            foreach ($result as $res){
                $tipo = $res["desc_tipo"];
            }
            ?>
            <tr>
                <td><?= $matricula ?></td>
                <td><?= $nome ?></td>
                <td><?= $tipo ?></td>
                <td><a href="?url=apr&id=<?=$cod?>">Aprovar</a></td>
        </tr>
        <?php } ?>
    </tbody>
</table>




