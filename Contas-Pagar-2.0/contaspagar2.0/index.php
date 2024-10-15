<?php
include_once "./partials/head.php";
include_once "./partials/navbar.php";
include_once "./valida-autenticacao.php";
?>

    <div>
        <div class="container col-8">

            <div class="m-5 p-5"></div>
            <div class="mx-auto border rounded p-5 bg-dark m-5 col-6">
                <p class="h1 p-1 text-center pb-5 text-light">Contas a Pagar v2</p>
                <p class="h4 pb-5 text-light text-center">Adicione, veja, edite e exclua suas contas</p>
                <div class="text-center">
                    <a href="adicionar-conta.php<?=$autenticacao?>" class="btn btn-outline-light fw-bold">Adicionar</a>
                    <a href="ver-contas.php<?=$autenticacao?>" class="btn btn-outline-light fw-bold">Ver Contas</a>
                </div>
            </div>
        </div>
    </div>
    <div class="m-5 p-5"></div>

    <?php
    include_once "./partials/footer.php";
    ?>