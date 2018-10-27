<?php
$idTP = $_GET['id'];
if ($idTP != 2) {
    $style = 'd-none"';
}
$sql = "select desc_tipo from tb_tipo_equipamento where cod_tipo_equipamento = $idTP";
$result = $pdo->query($sql); 
foreach ($result as $row) {
    $nomeTP = $row["desc_tipo"];
}
?>
<div class="row mt-md-5">
    <div class="col-md-12">
        <h2>Incluir <?=$nomeTP?></h2>
    </div>
    <div class="col-md-12 mt-md-2">
        <form action="incluir/inc_equipamento_bd.php?id=<?=$idTP?>" method="POST">
            <div class="form-group">
                <label>Nome:</label>
                <input type="text" name="nome" required>
            </div>
            <div class="form-group">
                <label>Observação:</label>
                <textarea name="obs"></textarea>
            </div>
            <div class="form-group">
                <div class="form-group <?php echo $style?>" >
                    <label>Curso GTI:</label><br>
                    <select>
                        <option value="1">Sim</option>
                        <option value="0" selected>Não</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Status:</label><br>
                    <select>
                        <option value="1" selected>Disponível</option>
                        <option value="0">Emprestado</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-default" value="Salvar">
            </div>

        </form>
    </div>
</div>