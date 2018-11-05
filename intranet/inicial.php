<?php
header('Refresh:300');
include '../conexao.php';
$date = date('Y-m-d');
$sql = "SELECT cod_situacao,cod_emprestimo,data_emprestimo FROM tb_emprestimo";
$result = $pdo->query($sql);
foreach ($result as $key) {
    $situacao = $key['cod_situacao'];
    $cod = $key['cod_emprestimo'];
    $dt_emprestimo = $key['data_emprestimo'];
    $dt_amd = date('Y-m-d', strtotime($dt_emprestimo));
    if ($situacao == 1) {


        if ($dt_amd < $date) {
            $emprestimo_atraso = "UPDATE tb_emprestimo SET cod_situacao = 3 "
                    . "WHERE cod_emprestimo = $cod";
            if ($pdo->query($emprestimo_atraso)) {
                
            }
        }
    }
}
?>
<style type="text/css">
    .dataTables_filter{
        font-size: .789rem;
    }
</style>

<div class="row">
    <div class="col-sm-12">
        <?php
        @$msg = $_GET['msg'];
        if (isset($msg) && $msg != false && $msg == "apr") {
            echo "<br/><div class='alert alert-success table-font' role='alert'>Cadastro validado com sucesso!</div>";
        }
        if (isset($msg) && $msg != false && $msg == "apr_all") {
            echo "<br/><div class='alert alert-success table-font' role='alert'>Todos os cadatros foram validados com sucesso!</div>";
        }
        if (isset($msg) && $msg != false && $msg == "dev") {
            echo "<br/><div class='alert alert-success table-font' role='alert'>Empréstimo devolvido com sucesso!</div>";
        }
        if (isset($msg) && $msg != false && $msg == "erro") {
            echo "<br/><div class='alert alert-danger table-font' role='alert'>Ocorreu um erro ao devolver o empréstimo!</div>";
        }
        ?>
    </div>
</div>
<div class="row">
    <div class="col-sm-6">
        <?php
        include './pessoa_apr.php';
        ?>
    </div>
    <div class="col-sm-6">
        <?php
        include './emprestimo_atraso.php';
        ?>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <?php
        include './emprestimo.php';
        ?>
    </div>
</div>

