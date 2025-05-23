    <?php
    require_once __DIR__ . '/../conexao.php';
    
if (isset($_POST['idVeiculo'])) {
    
    $id = $_POST['idVeiculo'];

    $stmt = $conn->prepare("DELETE FROM veiculos WHERE id = ?");
    $stmt->bind_param("i", $id);
    
    if ($stmt->execute()) {
        // redireciona com mensagem de sucesso
        header("Location: ../../index.php?VEICULO_EXCLUIDO_COM_SUCESSO");
    } else {
        //redireciona com mensagem de erro
        header("Location: ../../index.php?ERRO_AO_EXCLUIR_VEICULO");
    }
    
    $stmt->close();
    exit();
}

header("Location: ../../index.php");
exit();