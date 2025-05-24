<?php
require_once __DIR__ . '/../conexao.php';

if (!empty($_POST['idVagaSaida']) && !empty($_POST['dataSaida']) && !empty($_POST['horaSaida'])) {
    
    $vaga_id = intval($_POST['idVagaSaida']);
    $hora_saida = $_POST['dataSaida'] . ' ' . $_POST['horaSaida'];

    // Validação básica de data/hora
    if (DateTime::createFromFormat('Y-m-d H:i', $hora_saida) !== false) {
        $stmt = $conn->prepare("UPDATE vagas SET veiculo_id = NULL, saida = ?, disponivel = 1 WHERE id = ?");
        $stmt->bind_param("si", $hora_saida, $vaga_id);
        $stmt->execute();
        $stmt->close();

        // Atualiza registro no histórico
        $stmt = $conn->prepare("UPDATE registros SET saida = ? WHERE vaga_id = ? AND saida IS NULL");
        $stmt->bind_param("si", $hora_saida, $vaga_id);
        $stmt->execute();
        $stmt->close();
    }
     
    header("Location: ../../index.php?REGISTRO_DE_SAIDA_FEITO_COM_SUCESSO");
    exit();
}

header("Location: ../../index.php");
exit();
?>