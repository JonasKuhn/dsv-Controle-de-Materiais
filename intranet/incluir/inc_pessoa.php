<div class="row mt-md-5">
    <div class="col-md-12">
        <h2>Incluir Pessoa</h2>
    </div>
    <div class="col-md-12 mt-md-2">
        <form action="incluir/inc_pessoa_bd.php" method="POST">
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
                <input type="text" name="nome" class="form-control" placeholder="Digite o nome" required>
            </div>
            <div class="form-group row">
                <div class="form-group col-md-6">
                    <label>Matrícula:</label>
                    <input type="text" name="matricula" class="form-control" placeholder="Digite a matrícula" required>
                </div>
                <div class="form-group col-md-6">
                    <label>Senha:</label>
                    <input type="password" name="senha" class="form-control" placeholder="Digite a senha (Igual a matrícula)" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="form-group col-md-6">
                    <label>E-mail:</label>
                    <input type="email" name="email" class="form-control" placeholder="Digite o e-mail" required>
                </div>
                <div class="form-group col-md-6">
                    <label>Fone:</label>                   
                    <input  type="tel" class="form-control" placeholder="Somente números" name="telefone" id="telefone"/>
                </div>
            </div>
            <div class="form-group">
                <label>Situação:</label>
                <select name="situacao">
                    <option value="1" selected="">Ativo</option>
                    <option value="0">Desativado</option>
                </select>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-default" value="Salvar">
            </div>
        </form>
    </div>
</div>