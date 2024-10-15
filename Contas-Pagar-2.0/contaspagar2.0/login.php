<?php
$erro = isset($_GET['erro'])?$_GET['erro']:'';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <title>Contas Pagar v2</title>
</head>
<body class="bg-secondary">
    <div>
        <div class="container">


            <div class="position-absolute top-50 start-50 translate-middle border rounded p-5 bg-dark col-3">
                <p class="h1 p-1 text-center pb-5 text-light">Login</p>


                <form action="validar-login.php" method="POST" class="m-5">
                <div class="mb-3">
                        <label class="form-label text-light fw-bold" for="email">E-Mail</label>
                        <input type="email" class="form-control text-light bg-secondary" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" autofocus>
                </div>
                <div class="mb-5">
                        <label class="form-label text-light fw-bold" for="senha">Senha</label>
                        <input type="password" class="form-control text-light bg-secondary" id="senha" name="senha">
                </div>
                <?php
                if(isset($_GET['erro'])){
                                echo '<div class="alert bg-danger text-light fw-bold text-center pt-3 pb-3">'.$erro.'</div>';
                            };
                ?>

                <div class="text-center">
                    <button class="btn btn-outline-light fw-bold">Login</button>
                    <button class="btn btn-outline-light fw-bold" onclick="btnNovoUsuario(event)">Cadastrar</button>
                </div>
                </form>

            </div>


        </div>
    </div>
    <script>
    function btnNovoUsuario(e){
        e.preventDefault();
        window.location.href="./cadastro.php";
    }
    </script>
    <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>