
<?php
include ('../conexao.php');

$id = $_GET['id']; 
$sql = "Select * from tb_admin where cod_admin = $id;";
$query = $pdo->query($sql);
foreach ($query as $row)
$nome = $row['nome_admin'];
$log_adm = $row['login_admin'];
$senha = $row['senha_admin'];
?>


<div class="row mt-md-5">
    <div class="col-md-12">
        <h2>Editar Administrador</h2>
    </div>
    <div class="col-md-12 mt-md-2">
        <form action="editar/edt_admin_bd.php?id=<?=$id?>" method="POST">
            <div class="form-group">
                <label>Nome:</label>
                <input type="text" name="nome_admin" value="<?=$nome?>" required/>
            </div>
            <div class="form-group">
                <label>Login:</label>
                <input type="text" name="login_admin" value="<?=$log_adm?>" required/>
            </div>
              <div class="form-group">
                <label>Senha:</label>
                <input type="password" name="senha_admin" value="<?=$senha?>" required/>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-default" value="Salvar">
            </div>
        </form>
    </div>
</div>