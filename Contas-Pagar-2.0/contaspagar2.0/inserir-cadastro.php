<?php
include_once "./conexao-contaspagar/bd.php";

    $nome = trim($_POST['nome']);
    $email = trim($_POST['Email']);
    $senha = trim($_POST['senha']);
    $cpf = trim($_POST['cpf']);

    if (empty($nome) || empty($email) || empty($senha) || empty($cpf)) {
        echo "<script>alert('Preencha todos os campos!'); window.history.back();</script>";
        exit;
    }
     
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Email inválido!'); window.history.back();</script>";
        exit;
    }
    
    if (!is_numeric($cpf) || strlen($cpf) != 11) {
        echo "<script>alert('CPF inválido!'); window.history.back();</script>";
        exit;
    }

    $senha = password_hash($senha, PASSWORD_DEFAULT);

    $query = "INSERT INTO usuarios VALUES (null, '$nome', '$email', '$senha', '$cpf');";

    $resposta = executar_sql($query);

    Header("Location: index.php");
?>