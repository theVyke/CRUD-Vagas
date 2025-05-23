<?php
include 'database/conexao.php'; // conexao com BD
?>

<!-- FALTA IMPLEMENTAR 

- Vinculação com os botões de registrar entrada e saída de veículos para atualizar as tabelas de vagas

- Verificar a funcionalidade do read para os registros (implementar data e hora que virão da tabela de vagas e 
também incorporar o valor do estacionamento)

 -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>EstacionaFácil</title>
  <link rel="shortcut icon" href="image/favicon.png" type="png" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/style.css"/>
</head>

<body>
  
  <!-- Navbar -->
  <?php include_once 'partials/components/navbar.php'; ?>

  <div class="container py-4">
    <h2 class="mb-4 text-center">Controle de Estacionamento</h2>

    <!-- Abas de Navegação -->
    <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="veiculos-tab" data-bs-toggle="tab" data-bs-target="#veiculos" type="button">
          Veículos
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="vagas-tab" data-bs-toggle="tab" data-bs-target="#vagas" type="button">
          Vagas
        </button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="registros-tab" data-bs-toggle="tab" data-bs-target="#registros" type="button">
          Registros
        </button>
      </li>
    </ul>

    <div class="tab-content" id="myTabContent">
      
      <?php
      // Seção Veículos
      include_once 'partials/sections/veiculos_sections.php';
      // Seção Vagas
      include_once 'partials/sections/vagas_sections.php';
      // Seção Registros
      include_once 'partials/sections/registros_sections.php';
      ?>

    </div>

    <!-- Modais -->
     <?php
      // Modal Veículos
      include_once 'partials/modals/veiculo_modal.php';
      // Modal Veículo - Atualizar Veiculos
      include_once 'partials/modals/veiculo_atualiza_modal.php';
      // Modal Vagas
      include_once 'partials/modals/vaga_modal.php';
      // Modal Vaga - Registrar Entrada
      include_once 'partials/modals/vaga_entrada_modal.php';
      // Modal Vaga - Registrar Saída
      include_once 'partials/modals/vaga_saida_modal.php';
      ?>
      
    <!-- Footer -->
    <?php include_once 'partials/components/footer.php'; ?>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" />
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Meu Script JS -->
    <script src="assets/script/script.js"></script>
    
</body>

</html>