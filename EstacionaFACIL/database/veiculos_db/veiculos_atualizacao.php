    <?php
    require_once __DIR__ . '/../conexao.php';
    
if (isset($_POST['idAtualizaVeiculo'])) {
    
    $id = $_POST['idAtualizaVeiculo'];
    $placa = $_POST['placa'];
    $modelo = $_POST['modelo'];
    $anoVeiculo = $_POST['anoVeiculo'];
    $proprietario = $_POST['proprietario'];

    $stmt = $conn->prepare("UPDATE veiculos SET placa = ?, modelo = ?, ano = ?, proprietario = ? WHERE id = ?");
    $stmt->bind_param("ssisi", $placa, $modelo, $anoVeiculo, $proprietario, $id);
    
    if ($stmt->execute()) {
        // redireciona com mensagem de sucesso
        header("Location: ../../index.php?VEICULO_ATUALIZADO_COM_SUCESSO");
    } else {
        //redireciona com mensagem de erro
        header("Location: ../../index.php?ERRO_AO_ATUALIZAR_VEICULO");
    }
    
    $stmt->close();
    exit();
}

header("Location: ../../index.php");
exit();