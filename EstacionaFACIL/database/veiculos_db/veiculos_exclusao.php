    <?php
    require_once __DIR__ . '/../conexao.php';
    
if (isset($_POST['idVeiculo'])) {
    
    $id = intval($_POST['idVeiculo']);

    // Verifica se há registros históricos
    $stmt = $conn->prepare("SELECT COUNT(*) FROM registros WHERE veiculo_id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($tem_registros);
    $stmt->fetch();
    $stmt->close();

    if ($tem_registros == 0) {
        // Não há registros, pode excluir integralmente
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
    } else {
        //Exclusão lógica (preservação de historico)
        $stmt = $conn->prepare("UPDATE veiculos SET ativo = 0 WHERE id = ?"); 
        $stmt->bind_param("i", $id);
            if ($stmt->execute()) {
                // redireciona com mensagem de sucesso
                header("Location: ../../index.php?VEICULO_INATIVADO_COM_SUCESSO");
        } else {
                //redireciona com mensagem de erro
                header("Location: ../../index.php?ERRO_AO_INATIVAR_VEICULO");
        }
        $stmt->close();
    }
    exit();
}

header("Location: ../../index.php");
exit();