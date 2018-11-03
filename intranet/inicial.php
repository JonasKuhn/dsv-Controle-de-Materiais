<!DOCTYPE html>
<?php
header('Refresh:300');
include '../conexao.php';
$date = date('Y-m-d');
$sql = "SELECT * FROM tb_emprestimo";
$result = $pdo->query($sql);
foreach ($result as $key) {
    $cod = $key['cod_emprestimo'];
    $dt_emprestimo = $key['data_emprestimo'];
    $dt_amd = date('Y-m-d', strtotime($dt_emprestimo));
    if ($dt_amd < $date) {
        $emprestimo_atraso = "UPDATE tb_emprestimo SET cod_situacao = 3 WHERE cod_emprestimo = $cod";
        $pdo->query($emprestimo_atraso);
    }
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
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
    </body>
</html>
