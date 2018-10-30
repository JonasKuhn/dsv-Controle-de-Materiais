<?php
$id = $_GET['id'];
$sql = "select * from tb_equipamento where cod_equipamento = $id";
$query = $pdo->query($sql);
foreach ($query as $row) {
    #print_r($row);exit;
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
    $tipo = $row['cod_tipo_equipamento'];
}
?>
<div class="row mt-md-5">
    <div class="col-md-12">
        <h2>Alterar Notebook de GTI</h2>
    </div>
    <div class="col-md-12 mt-md-2">
        <form action="editar/edt_gti_bd.php?id=<?= $id ?>" method="POST">
            <div class="form-group">
                <label>Nome:</label>
                <input type="text" name="nome" class="form-control" value="<?= $nome ?>" required="">
            </div>
            <div class="form-group">
                <label>Observação:</label>
                <textarea name="obs"><?= $obs ?></textarea>
            </div>
            <div class="form-group">
                <label>GTI:</label>
                <select name="gti" class="form-control" required="">
                    <option value="1" selected="">Sim</option>
                    <option value="0">Não</option>
                </select>
            </div>
            <div class="form-group">
                <label>Status:</label>
                <select name="status" class="form-control" required="">
                    <option value="1">Disponível</option>
                    <option value="0" selected="">Emprestado</option>
                </select>
            </div>
            <div class="form-group row">
                <div class="form-group col-md-6">
                    <label>Aluno:</label>
                    <input type="text" name="aluno" value="<?=$aluno?>" required>
                </div>
                <div class="form-group col-md-6">
                    <label>Turma:</label>
                    <input type="text" name="turma" value="<?=$turma?>" required>

                </div>
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