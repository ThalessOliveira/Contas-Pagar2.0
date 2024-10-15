<?php
    include_once "./valida-autenticacao.php";
    include_once "./conexao-contaspagar/bd.php";

    $descricao = trim($_POST['descricao']);
    $valor = trim($_POST['valor']);
    $data_vencimento = trim($_POST['data_vencimento']);

    if (empty($descricao) || empty($valor) || empty($data_vencimento)) {
        echo "<script>alert('Preencha todos os campos!'); window.history.back();</script>";
        exit;
    }

    if (!is_numeric($valor)) {
        echo "<script>alert('O valor deve ser numérico!'); window.history.back();</script>";
        exit;
    }

    $query = "INSERT INTO contas VALUES (null, '$descricao', '$valor', '$data_vencimento');"; 

    $resposta = executar_sql($query);
    header("Location: adicionar-conta.php$autenticacao");

?>