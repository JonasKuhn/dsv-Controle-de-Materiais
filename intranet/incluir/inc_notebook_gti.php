<div class="row mt-md-5">
    <div class="col-md-12">
        <h2>Incluir Notebook de GTI</h2>
    </div>
    <div class="col-md-12 mt-md-2">
        <form action="incluir/inc_notebook_gti_bd.php" method="POST">
            <div class="form-group">
                <label>Nome:</label>
                <input type="text" name="nome" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Observação:</label>
                <textarea name="obs" class="form-text"></textarea>
            </div>
            <div class="form-group">
                <label>Status:</label><br>
                <select name="status">
                    <option value="1">Disponível</option>
                    <option value="0" selected>Emprestado</option>
                </select>
            </div>
            <div class="form-group row">
                <div class="form-group col-md-6">
                    <label>Aluno:</label>
                    <input type="text" name="aluno" class="form-control" required>
                </div>
                <div class="form-group col-md-6">
                    <label>Turma:</label>
                    <input type="text" name="turma" class="form-control" required>

                </div>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-default" value="Salvar">
            </div>

        </form>
    </div>
</div>