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
    echo "<br/><div class='alert alert-success' role='alert'>Pessoa incluída com sucesso!</div>";
}
if (isset($msg) && $msg != false && $msg == "alt") {
    echo "<br/><div class='alert alert-success' role='alert'>Pessoa alterada com sucesso!</div>";
}
if (isset($msg) && $msg != false && $msg == "exc") {
    echo "<br/><div class='alert alert-success' role='alert'>Pessoa excluída com sucesso!</div>";
}
?>
<h2 class="mt-md-5" style="margin-bottom: 2rem">Pessoas</h2>
<table id='table' class="table table-striped table-bordered table-hover dataTable mt-md-5">
    <thead class="table-font">
        <tr>
            <th scope="col"><a href="?url=incluir-pessoa" class="table-link">
                    <i class="fa fa-plus fa-2x"></i>
                </a></th>
            <th scope="col">#</th>
            <th scope="col">Matrícula</th>
            <th scope="col">Nome</th>
            <th scope="col">E-mail</th>
            <th scope="col">Telefone</th>
            <th scope="col">Situação</th>
            <th scope="col">Tipo</th>
            <th scope="col">Criado</th>
            <th scope="col">Modificado</th>
        </tr>
    </thead>
    <tbody class="table-font">
        <?php
        require './sessao.php';
        include '../conexao.php';
        $sql = "select * from tb_pessoa";
        $query = $pdo->query($sql);
        foreach ($query as $row) {
            $cod = $row["cod_pessoa"];
            $matricula = $row["nr_matricula"];
            $nome = $row["nome_pessoa"];
            $senha = $row["senha_pessoa"];
            $email = $row["email_pessoa"];
            $fone = $row["telefone_pessoa"];
            $validacao = $row["fl_validacao"];
            if ($validacao == 1){
                $validacao_desc = "Ativo";
            } else {
                $validacao_desc = "Desativado";
            }
            $idTP = $row["cod_tipo_pessoa"];
            $seleciona_tipo = "select * from tb_tipo_pessoa where cod_tipo_pessoa = $idTP";
            $result = $pdo->query($seleciona_tipo);
            foreach ($result as $key){
                $tipo = $key["desc_tipo"];
            }
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
                <td scope="row"><?=$cod?></td>
                <td><?=$matricula?></td>
                <td><?=$nome?></td>
                <td><?=$email?></td>
                <td><?=$fone?></td>
                <td><?=$validacao_desc?></td>
                <td><?=$tipo?></td>
                <td><?= date('d/m/Y  H:i', strtotime($criado)) ?></td>
                <td><?=
                    date('d/m/Y  H:i', strtotime($modificado));
                }
                ?></td>
        </tr>
    </tbody>
</table>



