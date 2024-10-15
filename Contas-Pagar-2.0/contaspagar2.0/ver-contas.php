<?php
include_once "./partials/head.php";
include_once "./partials/navbar.php";
include_once "./valida-autenticacao.php";
?>
    <div>
        <div class="container">


            <div class="mx-auto border rounded p-5 bg-dark m-5 col-8">
                <p class="h1 p-1 text-center pb-5 text-light">Exibindo Contas</p>


                <form method="GET" action="">

                <input type="hidden" name="usuario" value="<?php echo $_GET['usuario']; ?>">
                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                    
                    <div class="input-group mb-3">
                        <input class="form-control text-light bg-secondary text-light" type="text" id="filtro" name="filtro"
                        value="<?php echo isset($_GET['filtro']) ? $_GET['filtro'] : ''; ?>">
                        <button class="btn btn-outline-light fw-bold" href="./ver-contas.php<?=$autenticacao?>">Pesquisar</button>
                    </div>
                </form>


                <table id="tabelaContas" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Descrição</th>
                            <th>Valor</th>
                            <th>Data de Vencimento</th>
                            <th>Dias Restantes</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                <tbody>
                    <?php
                    include_once "./select-contas.php";
                    ?>
                </tbody>
                </table>
            <div class="text-center">
                    <a href="adicionar-conta.php<?=$autenticacao?>" class="btn btn-outline-light fw-bold">Adicionar Contas</a>
            </div>
            </div>


        </div>
    </div>
    <?php
    include_once "./partials/footer.php";
    ?>