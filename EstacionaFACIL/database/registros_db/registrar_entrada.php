    <?php
    require_once __DIR__ . '/../conexao.php';

        
if (isset($_POST['idVaga'])) {
    
    $id = $_POST['idVaga'];

    $stmt = $conn->prepare("UPDATE FROM vagas WHERE id = ?");
    $stmt->bind_param("i", $id);
    
    if ($stmt->execute()) {
        // redireciona com mensagem de sucesso
        header("Location: ../../index.php?VAGA_EXCLUIDO_COM_SUCESSO");
    } else {
        //redireciona com mensagem de erro
        header("Location: ../../index.php?ERRO_AO_EXCLUIR_VAGA");
    }
    
    $stmt->close();
    exit();
}

header("Location: ../../index.php");
exit();