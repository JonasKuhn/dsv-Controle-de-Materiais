<style type="text/css">
.table-font{
	font-size: .8rem;
}
.table-link{
	text-decoration: none;
	color: black;
}
</style>
<?php
@$msg = $_GET['msg'];
if (isset($msg) && $msg != false && $msg == "inc") {
	echo "<br/><div class='alert alert-success' role='alert'>Tipo de equipamento incluído com sucesso!</div>";
}
?>
<h2 class="mt-md-5" style="margin-bottom: 2rem">Cadastrar Tipos de Equipamentos</h2>
<table id='table' class="table table-striped table-bordered table-hover dataTable mt-md-5">
	<thead>
		<tr>
			<th scope="col"><a href="?url=incluir-tp-equip" class="table-link">
				<i class="fa fa-plus fa-2x"></i>
			</a></th>
			<th scope="col" class="table-font">#</th>
			<th scope="col" class="table-font">Nome</th>
			<th scope="col" class="table-font">Observação</th>
			<th scope="col" class="table-font">GTI</th>
			<th scope="col" class="table-font">Status</th>
			<th scope="col" class="table-font">Tipo</th>
			<th scope="col" class="table-font">Criado</th>
			<th scope="col" class="table-font">Modificado</th>

		</tr>
	</thead>
	<tbody class="table-font">
		<?php
		require_once 'sessao.php';
		include '../conexao.php';

		$id = $_GET ['id'];

		$sql = "select * from tb_equipamento where cod_tipo_equipamento = $id";
		$result = $pdo->query($sql);
		foreach ($result as $row) {
			$id = $row["cod_equipamento"];
			$nome = $row["desc_equipamento"];
			$obs = $row["desc_observacao"];
			$flgti = $row["fl_curso_gti"];
			if ($flgti == 0){
				$flgti_desc = "Não";
			} else {
				$flgti_desc = "Sim";
			}
			$status = $row["fl_status"];
			if ($status == 1){
				$status_desc = "Disponível";
			} else {
				$status_desc = "Emprestado";
			}

			$id_tipo = $row["cod_tipo_equipamento"];
			$sql = "select desc_tipo from tb_tipo_equipamento where cod_tipo_equipamento = $id_tipo";
			$result = $pdo->query($sql);
			foreach ($result as $key) {
				$tipo = $key["desc_tipo"];
			}

			$criado = $row["created"];
			$modificado = $row["modified"];
			?>
			<tr>
				<td><a href="?url=editar-tp-equip" class="table-link">
					<i class="fa fa-edit fa-2x"></i>
				</a>&nbsp;<a href="?url=excluir-tp-equip" onclick="return excluir('<?= $cod ?>');"  class="table-link">
					<i class="fa fa-trash-o fa-2x"></i>
				</a>
			</td>
			<td scope="row"><?= $id ?></td>
			<td><?= $nome ?></td>
			<td><?= $obs ?></td>
			<td><?= $flgti_desc ?></td>
			<td><?= $status_desc ?></td>
			<td><?= $tipo ?></td>
			<td><?= date('d/m/Y H:i:s', strtotime($criado)) ?></td>
			<td><?= date('d/m/Y H:i:s', strtotime($modificado)); } ?></td>
		</tr>
	</tbody>
</table>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.18/datatables.min.js"></script>
<script>
	$(document).ready(function () {
		$('#table').DataTable({
			"language": {
				"url": "//cdn.datatables.net/plug-ins/1.10.10/i18n/Portuguese-Brasil.json"
			}
		});
	});
</script>