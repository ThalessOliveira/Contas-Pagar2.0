<?php
include_once "./valida-autenticacao.php";
?>

<nav class="navbar bg-dark col-12">
  <div class="container-fluid col-10">
    <a class="navbar-brand" href="index.php<?=$autenticacao?>">
      <img src="../contaspagar2.0/img/CONTAS_PAGAR-removebg.png" alt="Logo" width="150" height="150" class="d-inline-block align-text-top">
    </a>
  </div>
  <ul class="navbar-nav col-2">
            <?php if(isset($_GET['usuario'])){ 
                $usuario = $_GET['usuario'];    
            ?>
                <li><p class="nav-item nav-link display-7 text-light fw-bold">Seja Bem-Vindo, <?=$usuario?></p></li>
                <li class="nav-item">
                <a class="btn btn-outline-light fw-bold" href="logoff.php"><h6 class="display-7">Sair</h6></a>
                </li>
            <?php } else { ?>
                <li class="nav-item display-7">
                    <a href="login.php" class="btn btn-outline-light fw-bold">Login</a>
                </li>
            <?php };?> 
            
        </ul>
</nav>