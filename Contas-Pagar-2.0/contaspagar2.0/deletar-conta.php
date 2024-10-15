<?php
    include_once "./valida-autenticacao.php";
    include_once "./conexao-contaspagar/bd.php";

    $id = trim($_GET["del_id"]);

    if (empty($id) || !is_numeric($id)) {
        echo "<script>alert('ID inválido!'); window.history.back();</script>";
        exit;
    }

    $query = "DELETE FROM contas WHERE id = $id;";

    executar_sql($query);
    header("Location:ver-contas.php$autenticacao");

?>