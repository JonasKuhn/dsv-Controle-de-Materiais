<?php
$id = $_GET['id'];
$sql = "select * from tb_equipamento where cod_equipamento = $id";
$query = $pdo->query($sql);
foreach ($query as $row) {
    #print_r($row);exit;
    $nome = $row["desc_equipamento"];
    $obs = $row["desc_observacao"];
    $gti = $row["fl_curso_gti"];
    $status = $row["fl_status"];
    $tipo = $row['cod_tipo_equipamento'];
    if ($tipo != 2){
        $css = 'd-none';
    }
    $sql = "select desc_tipo from tb_tipo_equipamento where cod_tipo_equipamento = $tipo";
    $result = $pdo->query($sql);
    foreach ($result as $key){
        $nomeTP = $key['desc_tipo'];
    }
}
?>
<div class="row mt-md-5">
    <div class="col-md-12">
        <h2>Alterar <?=$nomeTP?></h2>
    </div>
    <div class="col-md-12 mt-md-2">
        <form action="editar/edt_equipamento_bd.php?id=<?= $id ?>" method="POST">
            <div class="form-group">
                <label>Nome:</label>
                <input type="text" name="nome" class="form-control" value="<?= $nome ?>" required="">
            </div>
            <div class="form-group">
                <label>Observação:</label>
                <textarea name="obs"><?= $obs ?></textarea>
            </div>
            <div class="form-group <?=$css?>">
                <label>GTI:</label>
                <select name="gti" class="form-control" required="">
                    <option value="1">Sim</option>
                    <option value="0"  selected="">Não</option>
                </select>
            </div>
            <div class="form-group">
                <label>Tipo:</label>
                <select name="tipo" class="form-control" required="">
                    <?php
                    $selecionado = $tipo;
                    $sql1 = "select * from tb_tipo_equipamento;";
                    $result = $pdo->query($sql1);

                    foreach ($result as $dados){
                        $matriz[] = array(
                            'cod' => $dados['cod_tipo_equipamento'],
                            'valor' => $dados['desc_tipo']
                        );
                    }
                    foreach ($matriz as $item) {
                        $selected = ($selecionado == $item['cod'] ? 'selected' : null);
                        echo "<option value='{$item[cod]}' {$selected}>{$item[valor]}</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-default" value="Salvar">
            </div>

        </form>
    </div>
</div>