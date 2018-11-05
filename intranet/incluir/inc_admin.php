<div class="row mt-md-5">
    <div class="col-md-12">
        <h2>Incluir Administrador</h2>
    </div>
    <div class="col-md-12 mt-md-2">
        <form action="incluir/inc_admin_bd.php" method="POST">
            <div class="form-group">
                <label>Nome:</label>
                <input type="text" name="nome_admin" value="" required/>
            </div>
            <div class="form-group">
                <label>Login:</label>
                <input type="text" name="login_admin" value="" required/>
            </div>
              <div class="form-group">
                <label>Senha:</label>
                <input type="password" name="senha_admin" value="" required/>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-default" value="Salvar">
            </div>
        </form>
    </div>
</div>