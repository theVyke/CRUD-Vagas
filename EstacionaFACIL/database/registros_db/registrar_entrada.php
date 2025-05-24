<?php
require_once __DIR__ . '/../conexao.php';

if (!empty($_POST['idEntradaVeiculo']) && !empty($_POST['idVagaEntrada']) &&
    !empty($_POST['dataEntrada']) && !empty($_POST['horaEntrada'])) {
    
    $veiculo_id = intval($_POST['idEntradaVeiculo']);
    $vaga_id = intval($_POST['idVagaEntrada']);
    $hora_entrada = $_POST['dataEntrada'] . ' ' . $_POST['horaEntrada'];

    // Validação básica de data/hora
    if (DateTime::createFromFormat('Y-m-d H:i', $hora_entrada) !== false) {
        $stmt = $conn->prepare("UPDATE vagas SET veiculo_id = ?, entrada = ?, disponivel = 0 WHERE id = ?");
        $stmt->bind_param("isi", $veiculo_id, $hora_entrada, $vaga_id);
        $stmt->execute();
        $stmt->close();
    }
     
    header("Location: ../../index.php?REGISTRO_DE_ENTRADA_FEITO_COM_SUCESSO");
    exit();
}

header("Location: ../../index.php");
exit();
?>
