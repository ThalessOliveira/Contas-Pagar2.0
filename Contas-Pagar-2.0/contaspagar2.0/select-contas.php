<?php
include_once "../contaspagar2.0/conexao-contaspagar/bd.php";
include_once "./valida-autenticacao.php";

$filtro = isset($_GET['filtro']) ? $_GET['filtro'] : '';

$query = "SELECT id, descricao, valor, data_vencimento FROM contas";

if (!empty($filtro)) {
    $query .= " WHERE descricao LIKE '%" . $filtro . "%'";
}

$resultado = executar_sql($query);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $dataVencimento = new DateTime($row["data_vencimento"]);
        $agora = new DateTime();
        $diasRestantes = $dataVencimento >= $agora ? $agora->diff($dataVencimento)->days : -1;
        $classeDestaque = $diasRestantes >= 0 ? "" : "vencimento-excedido";

        echo "<tr>";
        echo "<td>" . $row["descricao"] . "</td>";
        echo "<td>R$ " . $row["valor"] . "</td>";
        echo "<td>" . $row["data_vencimento"] . "</td>";

        if ($diasRestantes != -1) {
            $plural = $diasRestantes == 0 ? "" : "s"; // Verifica se é singular ou plural
            echo "<td class='$classeDestaque'>" . ($diasRestantes + 1) . " dia$plural</td>";
        } else {
            echo "<td><span style='color: red; font-weight: bold;'>Vencimento Excedido!</span></td>";
        }

?>
        <td>
            <a class="btn btn-outline-secondary" href="./deletar-conta.php<?=$autenticacao?>&del_id=<?=$row['id']?>">Excluir</a>
            <a class="btn btn-outline-secondary" href="./adicionar-conta.php<?=$autenticacao?>&edit_id=<?=$row['id']?>">Editar</a>
        </td>
        </tr>
        <?php
    }
} else {
    echo "<tr><td colspan='5'>Nenhuma conta encontrada.</td></tr>";
}
?>