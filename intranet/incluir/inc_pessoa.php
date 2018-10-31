<?php

function Mask($mask, $str) {

    $str = str_replace(" ", "", $str);

    for ($i = 0; $i < strlen($str); $i++) {
        $mask[strpos($mask, "#")] = $str[$i];
    }

    return $mask;
}
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
                        $tipo = $key["desc_tipo"];
                        $idTP = $key["cod_tipo_pessoa"];
                        if ($tipo === "Administrador") {
                            $css = "d-none";
                        }
                        ?>
                        <option value="<?= $idTP ?>" class="<?= $css ?>"><?= $tipo ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label>Nome:</label>
                <input type="text" name="nome" class="form-control" required="">
            </div>
            <div class="form-group row">
                <div class="form-group col-md-6">
                    <label>Matrícula:</label>
                    <input type="text" name="matricula" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label>Senha:</label>
                    <input type="password" name="senha" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="form-group col-md-6">
                    <label>E-mail:</label>
                    <input type="email" name="matricula" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label>Fone:</label>
                    <input type="text" class="form-control" name="telefone_pessoa" id="telefone_pessoa"
                           pattern="\([0-9]{2}\)[\s][0-9]{5}-[0-9]{3,4}"
                           placeholder="(11) 12345-6789">
                </div>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-default" value="Salvar">
            </div>
        </form>
    </div>
</div>