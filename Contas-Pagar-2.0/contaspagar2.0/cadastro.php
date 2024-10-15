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
                <p class="h1 p-1 text-center pb-5 text-light">Cadastrar</p>


                <form action="./inserir-cadastro.php" method="POST" class="m-5">
                <div class="mb-3">
                        <label class="form-label text-light fw-bold" for="nome">Nome</label>
                        <input type="text" class="form-control text-light bg-secondary" id="nome" name="nome" autofocus>
                </div>
                <div class="mb-3">
                        <label class="form-label text-light fw-bold" for="email">E-Mail</label>
                        <input type="email" class="form-control text-light bg-secondary" id="Email" name="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                </div>
                <div class="mb-3">
                        <label class="form-label text-light fw-bold" for="senha">Senha</label>
                        <input type="password" class="form-control text-light bg-secondary" id="senha" name="senha">
                </div>
                <div class="mb-5">
                        <label class="form-label text-light fw-bold" for="cpf">CPF</label>
                        <input type="number" class="form-control text-light bg-secondary" id="cpf" name="cpf">
                </div>


                <div class="text-center">
                    <button class="btn btn-outline-light fw-bold" onclick="btnVoltar(event)">Voltar</button>
                    <button class="btn btn-outline-light fw-bold">Cadastrar</button>
                </div>
                </form>

            </div>


        </div>
    </div>
    <script>
    function btnVoltar(e){
        e.preventDefault();
        window.location.href="./login.php";
    }
    </script>
    <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>