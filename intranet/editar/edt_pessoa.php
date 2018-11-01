<?php
$id_pessoa = $_GET['id'];
$sql_pessoa = ("SELECT * from tb_pessoa where cod_pessoa = '$id_pessoa' ");
$result_pessoa = $pdo->query($sql_pessoa);

foreach ($result_pessoa as $key){
    $id_tipo = ['cod_tipo_pessoa'];
    $nome = $key['nome_pessoa'];
    $matricula = $key['nr_matricula'];
    $senha = $key['senha_pessoa'];
    $email = $key['email_pessoa'];
    $fone = $key['telefone_pessoa'];
    $situacao = $key['fl_validacao'];
    if ($situacao == 1){
        $desc_situacao = 'Ativo';
    } else {
        $desc_situacao = 'Desativado';
    }
}
?>

<div class="row mt-md-5">
    <div class="col-md-12">
        <h2>Editar Pessoa</h2>
    </div>
    <div class="col-md-12 mt-md-2">
        <form action="editar/edt_pessoa_bd.php?id=<?=$id_pessoa?>" method="POST">
            <div class="form-group">
                <label>Tipo:</label>
                <select name="tipo" class="form-control" required="">
                    <?php
                    $selecionado = $tipo;
                    $sql1 = "select * from tb_tipo_pessoa where desc_tipo <> 'Administrador'";
                    $result = $pdo->query($sql1);
                    foreach ($result as $item) {
                        if ($item['cod_tipo_pessoa'] == $id_tipo) {
                            echo "<option value='{$item['cod_tipo_pessoa']}' selected>{$item['desc_tipo']}</option>";
                        } else {
                            echo "<option value='{$item['cod_tipo_pessoa']}'>{$item['desc_tipo']}</option>";
                        }
                    }
                    ?>
                </select>
            </div>

            <div class="form-group">

                <label>Nome:</label>
                <input type="text" name="nome" class="form-control" placeholder="Digite o nome" value="<?=$nome?>" required>
            </div>
            <div class="form-group row">
                <div class="form-group col-md-6">
                    <label>Matrícula:</label>
                    <input type="text" name="matricula" class="form-control" placeholder="Digite a matrícula" value="<?=$matricula?>" required>
                </div>
                <div class="form-group col-md-6">
                    <label>Senha:</label>
                    <input type="text" name="senha" class="form-control" placeholder="Digite a senha (Igual a matrícula)" value="<?=$senha?>" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="form-group col-md-6">
                    <label>E-mail:</label>
                    <input type="email" name="email" class="form-control" placeholder="Digite o e-mail" value="<?=$email?>" required>
                </div>
                <div class="form-group col-md-6">
                    <label>Fone:</label>
                    <input  type="tel" class="form-control" name="telefone" value="<?=$fone?>" id="telefone" required>
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