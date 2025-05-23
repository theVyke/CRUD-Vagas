    <?php
    require_once __DIR__ . '/../conexao.php';

    //criar um novo veiculo

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['placa'])) {
    
    $placa = $_POST['placa'];
    $modelo = $_POST['modelo'];
    $anoVeiculo = $_POST['anoVeiculo'];
    $proprietario = $_POST['proprietario'];

    // Verifica se o veículo já está cadastrado pela placa
    $check_sql = "SELECT id FROM veiculos WHERE placa = '$placa'";
    $result = $conn->query($check_sql);

        if ($result->num_rows > 0) {
            // Veículo já existe, redireciona com mensagem de erro
            header("Location: ../../index.php?ERRO_VEICULO_JA_EXISTE");
            exit();
        }

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