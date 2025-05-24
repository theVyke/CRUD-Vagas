    <?php
    require_once __DIR__ . '/../conexao.php';

    //criar um novo veiculo

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['placa'])) {
    
    $placa = $_POST['placa'];
    $modelo = $_POST['modelo'];
    $anoVeiculo = $_POST['anoVeiculo'];
    $proprietario = $_POST['proprietario'];

    // Verifica se o veículo já está cadastrado pela placa
    $check_sql = "SELECT id, ativo FROM veiculos WHERE placa = ?";
    $stmt = $conn->prepare($check_sql);
    $stmt->bind_param("s", $placa);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $ativo);
        $stmt->fetch();
        $stmt->close();

        if ($ativo == 0) {
            // Veículo existe e está inativo, reativa
            $update = $conn->prepare("UPDATE veiculos SET ativo = 1, modelo = ?, ano = ?, proprietario = ? WHERE id = ?");
            $update->bind_param("sisi", $modelo, $anoVeiculo, $proprietario, $id);
            if ($update->execute()) {
                header("Location: ../../index.php?VEICULO_REATIVADO_COM_SUCESSO");
            } else {
                header("Location: ../../index.php?ERRO_AO_REATIVAR_VEICULO");
            }
            $update->close();
            exit();
        } else {
            // Veículo já existe e está ativo
            header("Location: ../../index.php?ERRO_VEICULO_JA_EXISTE");
            exit();
        }
    }
    $stmt->close();
    
    // Prepara a query para inserir novo veículo
    $stmt = $conn->prepare("INSERT INTO veiculos (placa, modelo, ano, proprietario) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssis", $placa, $modelo, $anoVeiculo, $proprietario);

        if ($stmt->execute()) {
            // Sucesso - redireciona com mensagem de sucesso
            header("Location: ../../index.php?VEICULO_CADASTRADO_COM_SUCESSO");
        } else {
            // Erro - redireciona com mensagem de erro
            header("Location: ../../index.php?ERRO_AO_CADASTRAR_VEICULO");
        }

    $stmt->close();
    exit();
}

header("Location: ../index.php");
exit();