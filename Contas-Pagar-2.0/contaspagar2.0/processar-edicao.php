<?php
include_once "./valida-autenticacao.php";
include_once "./conexao-contaspagar/bd.php";

    $id = trim($_POST['id']);
    $descricao = trim($_POST['descricao']);
    $valor = trim($_POST['valor']);
    $data_vencimento = trim($_POST['data_vencimento']);

    if (empty($id) || empty($descricao) || empty($valor) || empty($data_vencimento)) {
        echo "<script>alert('Preencha todos os campos!'); window.history.back();</script>";
        exit;
    }

    if (!is_numeric($valor)) {
        echo "<script>alert('O valor deve ser numérico!'); window.history.back();</script>";
        exit;
    }

    if(isset($id)){
        $query = "UPDATE contas SET descricao='$descricao', valor='$valor', data_vencimento='$data_vencimento' WHERE id = $id;";
    } else {
        echo '<script>alert("Erro ao atualizar conta!!!");</script>';
        exit();
    }

    $resposta = executar_sql($query);

header("Location:ver-contas.php$autenticacao");
?>