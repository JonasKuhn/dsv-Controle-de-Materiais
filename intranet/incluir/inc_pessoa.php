<?php
/* $sql = "select * from tb_tipo_pessoa";
  $result = $pdo->query($sql);
  foreach ($result as $key) {
  print_r($key);
  exit;
  } */
?>
<div class="row mt-md-5">
    <div class="col-md-12">
        <h2>Incluir Pessoa</h2>
    </div>
    <div class="col-md-12 mt-md-2">
        <form action="incluir/inc_tipo_equipamento_bd.php" method="POST">
            <div class="form-group">
                <label>Tipo:</label>
                <select name="tipo">
                    <?php
                    $sql = "select * from tb_tipo_pessoa";
                    $result = $pdo->query($sql);
                    foreach ($result as $key) {
                        $tipo = $row["desc_tipo"];
                        $idTP = $row["cod_tipo_pessoa"];
                        ?>
                    <option value="<?=$idTP?>"><?= $tipo ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label>Nome:</label>
                <input type="text" name="nome" class="form-control" required="">
            </div>
            <div class="form-group">
                <label>Quantidade:</label>
                <input type="number" name="qtde" class="form-control" value="0" readonly>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-default" value="Salvar">
            </div>
        </form>
    </div>
</div>