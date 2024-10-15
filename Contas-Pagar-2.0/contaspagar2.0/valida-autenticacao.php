<?php
    $id_usuario = $_GET['id'];
    $nome_usuario = '';
    session_start();
    if($id_usuario == $_SESSION['id'] && $_SESSION['autenticado'] == true){
        $nome_usuario = $_GET['usuario'];

        $autenticacao = "?usuario=$nome_usuario&id=$id_usuario";

    } else{
        header('Location: login.php?erro=É necessário se autenticar!');
    }
?>