<?php
include_once "./valida-autenticacao.php";
$submeter = "processar-adicao.php$autenticacao";


    if(isset($_GET['edit_id'])){
        $id_update = $_GET['edit_id'];
        $submeter = "processar-edicao.php$autenticacao";
    
    include_once "./conexao-contaspagar/bd.php";

    $query = "SELECT * FROM contas WHERE id=$id_update;";

    $conta = select_sql($query);
    $conta=$conta[0];

    //print_r($conta);

    };

    include_once "./partials/head.php";
    include_once "./partials/navbar.php";

?>



    <div>
        <div class="container">
            <div class="m-5 p-3"></div>
            <div class="mx-auto border rounded p-5 bg-dark m-5 col-6">
                <p class="h1 p-1 text-center pb-5 text-light">Adicionar Conta</p>


                    <form action=<?=$submeter?> method="POST">

                        <input type="hidden" value="<?=isset($conta)?$conta['id']:''?>" class="form-control" id="id" name="id">

                    <div class="mb-3">
                        <label class="form-label text-light fw-bold" for="descricao">Nome da conta</label>
                        <input type="text" value="<?=isset($conta)?$conta['descricao']:''?>" class="form-control text-light bg-secondary" id="descricao" name="descricao">
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-light fw-bold" for="valor">Valor</label>
                        <input type="number" step="0.01" value="<?=isset($conta)?$conta['valor']:''?>" class="form-control text-light bg-secondary" id="valor" name="valor">
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-light fw-bold" for="data_vencimento">Data de vencimento</label>
                        <input type="date" value="<?=isset($conta)?$conta['data_vencimento']:''?>" class="form-control text-light fw-bold bg-secondary" id="data_vencimento" name="data_vencimento">
                    </div>
                    <div class="text-center">

                            <button type="submit" class="btn btn-outline-light fw-bold">Adicionar</button>
                        
                            <a href="ver-contas.php<?=$autenticacao?>" class="btn btn-outline-light fw-bold">Ver Contas</a>
                    </div>
                 
                </form>
            </div>
        </div>
    </div>
    <div class="m-5 p-3"></div>
    <?php
    include_once "./partials/footer.php";
    ?>
