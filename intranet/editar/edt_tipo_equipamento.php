<?php
    $id = $_GET['id'];
    $sql = "select * from tb_tipo_equipamento where cod_tipo_equipamento = $id";
    $query = $pdo->query($sql);
    foreach ($query as $row){
        //print_r($row);exit;
        $nome = $row["desc_tipo"];
        $qtde = $row["qtd_tipo"];
    }
?>
<div class="row mt-md-5">
    <div class="col-md-12">
        <h2>Alterar Tipo de Equipamento</h2>
    </div>
    <div class="col-md-12 mt-md-2">
        <form action="editar/edt_tipo_equipamento_bd.php?id=<?=$id?>" method="POST">
            <div class="form-group">
                <label>Nome:</label>
                <input type="text" name="nome" class="form-control" value="<?=$nome?>" required="">
            </div>
            <div class="form-group">
                <label>Quantidade:</label>
                <input type="number" name="qtde" class="form-control" value="<?=$qtde?>" readonly>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-default" value="Salvar">
            </div>
        </form>
    </div>
</div>