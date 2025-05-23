    <?php
    require_once __DIR__ . '/../conexao.php';

    //criar uma nova vaga

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['posicao'])) {
    
    $posicao = $_POST['posicao'];
    $disponivel = 1;

    $check_sql = "SELECT id FROM vagas WHERE posicao = '$posicao'";
    $result = $conn->query($check_sql);

        if ($result->num_rows > 0) {
            // Vaga já existe, redireciona com mensagem de erro
            header("Location: ../../index.php?ERRO_VAGA_JA_EXISTE");
            exit();
        }

    // Prepara a query (O valor de ? será substituído deposi)
    $stmt = $conn->prepare("INSERT INTO vagas (posicao, disponivel) VALUES (?, ?)");
    $stmt->bind_param("si", $posicao, $disponivel);

        if ($stmt->execute()) {
            // redireciona para a aba de vagas com mensagem de sucesso
            header("Location: ../../index.php?VAGA_CADASTRADA_COM_SUCESSO");
        } else {
            // redireciona com mensagem de erro
            header("Location: ../../index.php?ERRO_AO_CADASTRAR_VAGA");
        }

    $stmt->close();
    exit();

}
    
    header("Location: ../index.php");
    exit();


    //Listar todas as vagas

    // function getVagas($conn) {
    //     $sql = "SELECT * FROM vagas ORDER BY posicao";
    //     $result = $conn->query($sql);

    //     $vagas = array();
    //     if ($result->num_rows > 0) {
    //         while($row = $result->fetch_assoc()) {
    //             $vagas[] = $row;
    //         }
    //     }
    //     return $vagas;
    // }