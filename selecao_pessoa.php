
<a href="index.php" style="line-height:90px; margin-left: 100px; float: left;"><img src="img/logo.png" alt="UCEFF" ></a>
<header>
    <h1 class="d-none d-lg-block text-nowrap text-center">
        Faça seu Empréstimo
    </h1>
</header>
<div class="trava container-fluid  mt-md-5">
    <div class="offset-md-3  mt-md-5">
        <div class="row item-card text-center">
            <?php
            include './conexao.php';

            header("Refresh:10");
            
            $sqlTipoPessoa = "SELECT * FROM tb_tipo_pessoa;";

            $sqlTipoPessoaAdm = "SELECT * FROM tb_tipo_pessoa WHERE desc_tipo = 'Administrador';";

            $queryTipoPessoaAdm = $pdo->query($sqlTipoPessoaAdm);

            $dadosAdm = $queryTipoPessoaAdm->fetch();
            $codAdm = $dadosAdm['cod_tipo_pessoa'];
            $descAdm = $dadosAdm['desc_tipo'];

            $queryTipoPessoa = $pdo->query($sqlTipoPessoa);

            while ($dados = $queryTipoPessoa->fetch()) {
                $cod = $dados['cod_tipo_pessoa'];
                $desc = $dados['desc_tipo'];

                $var = base64_encode($cod);

                if ($desc != $descAdm) {
                    ?>
                    <div class="align-center col-md-4">
                        <div class="col align-self-md-center">
                            <div class="card h-100">
                                <a href="./login.php" class="hvr-grow-shadow">
                                    <div class="card-body" 
                                         style="display: flex; 
                                         align-items: center; 
                                         justify-content: center; 
                                         height: 200px;">
                                        <h3><?= $desc; ?></h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
    <div class="item-card fixed-bottom " >
        <a href="./intranet/index.php" class="hvr-bubble-float-bottom-new" style="float: right; margin-right: 100px; margin-bottom:0px; border-radius: 2px; color: #FFF; padding: 5px;">
            <?= $descAdm; ?>
        </a>
    </div>
</div>
