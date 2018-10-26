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
            <div class="form-group row">
                <div class="form-group col-md-3 <?php echo $style?>" >
                    <label>Curso GTI:</label><br>
                    <input type="radio" name="gti" value="1">Sim<br>
                    <input type="radio" name="gti" value="0" checked>Não
                </div>
                <div class="form-group col-md-3">
                    <label>Status:</label><br>
                    <input type="radio" name="status" value="1" checked>Disponível<br>
                    <input type="radio" name="status" value="0">Emprestado
                </div>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-default" value="Salvar">
            </div>

        </form>
    </div>
</div>