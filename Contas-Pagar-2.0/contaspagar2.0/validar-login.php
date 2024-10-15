<?php

session_set_cookie_params([
    'lifetime'=> 60*60, //tempo do cookie em segundos
    'path'=>'/', //caminho do cookie
    'domain'=> 'localhost', //dominio
    'secure'=> false, //Apenas por httpS ---> (S)
    'httponly'=> true, //Apenas por HTTP(Não por JavaScript)
    'samesite'=>'Strict' //politica samesite do cookie
]);

session_start();
$_SESSION['autenticado'] = false;
$_SESSION['id'] = null;
$_SESSION['nome'] = null;
$_SESSION['email'] = null;

if(isset($_POST['email']) && isset($_POST['senha'])){

    $email = trim($_POST['email']);
    $senha = trim($_POST['senha']);
    include_once "./conexao-contaspagar/bd.php";

    $user = select_sql("SELECT * FROM usuarios WHERE email='$email';");
    $user = $user[0];

    $hash = password_verify($senha, $user['senha']); //hash da senha e do usuario do banco true

    if(isset($user['email']) && $hash){ //se email e senha hash = true -> autenticado

        $_SESSION['autenticado'] = true;
        $_SESSION['id'] = $user['id'];
        $_SESSION['nome'] = $user['nome'];
        $_SESSION['email'] = $user['email'];
        header('Location: index.php?usuario='.$_SESSION['nome'].'&id='.$_SESSION['id']);
    }else{
        header('Location: login.php?erro=Não autorizado!');
    }
}

?>