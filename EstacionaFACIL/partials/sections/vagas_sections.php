<?php
require_once 'database/conexao.php';

$vagas = $conn->query("SELECT vagas.*, veiculos.placa FROM vagas 
LEFT JOIN veiculos ON vagas.veiculo_id = veiculos.id");
?>

      <div class="tab-pane fade" id="vagas" role="tabpanel">
        <div class="card mb-4 border-0 shadow-sm">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Controle de Vagas</h5>
              <button class="btn btn-adicionar" data-bs-toggle="modal" data-bs-target="#vagaModal">
                <i class="bi"></i> Nova Vaga
              </button>
          </div>
          <!-- Vaga disponível -->
          <div class="card-body">
            <div class="row g-3">
              <?php while ($vaga = $vagas->fetch_assoc()): ?>
                <div class="col-md-4"> 
                  <div class="card <?= $vaga['disponivel'] ? 'vaga-disponivel' : 'vaga-ocupada' ?> h-100"> <!-- Ver Style depois -->
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-start">
                        <h5 class="card-title mb-3">Vaga: <?=($vaga['posicao']) ?></h5>
                        <div class="d-flex align-items-center gap-2">  
                          <span class="badge rounded-pill <?= $vaga['disponivel'] ? 'bg-success' : 'bg-danger' ?>">
                            <?= $vaga['disponivel'] ? 'Disponível' : 'Ocupada' ?>
                          </span>
                          <?php if ($vaga['disponivel']): ?>
                            <form action="database/vagas_db/vagas_exclusao.php" method="POST" style="display:inline;">
                              <input type="hidden" name="idVaga" value="<?= $vaga['id'] ?>">
                              <button type="submit" class="btn btn-link p-0 text-danger" title="Excluir vaga" onclick="return confirmarExclusao()">
                                <i class="bi bi-trash"></i> <!-- Botão de excluir -->
                              </button>
                            </form>
                          <?php endif; ?>
                        </div>     
                      </div>
                      <?php if ($vaga['disponivel']): ?>
                        <p class="text-muted small mb-4">Nenhum veículo estacionado</p>
                        <button class="btn btn-adicionar w-100" data-bs-toggle="modal" data-bs-target="#registroModal" onclick="definirVaga(<?= $vaga['id'] ?>)">
                          <i class="bi"></i>Registrar Entrada
                        </button>
                      <?php else: ?>
                        <p class="text-muted small mb-1">
                          Placa: <strong><?= ($vaga['placa']) ?></strong>
                        </p>
                        <p class="text-muted small mb-4">
                          Entrada: <?= date('d/m/Y H:i', strtotime($vaga['entrada'])) ?>
                        </p>
                        <button class="btn btn-remover w-100" data-vaga-id="<?= $vaga['id'] ?>" data-veiculo-id="<?= $vaga['veiculo_id'] ?>" data-bs-toggle="modal" data-bs-target="#saidaModal">
                          <i class="bi bi-box-arrow-right"></i> Registrar Saída
                        </button>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              <?php endwhile; ?>
            </div>
          </div>
        </div>
      </div>



                    <!-- Vaga ocupada -->
              <!-- <div class="col-md-4">
                <div class="card vaga-ocupada h-100">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start">
                      <h5 class="card-title mb-3">Vaga 02</h5>
                      <span class="badge rounded-pill bg-danger">Ocupada</span>
                    </div>
                    <div class="mb-3">
                      <p class="mb-1"><strong>Veículo:</strong> ABC-1234</p>
                      <p class="mb-1"><strong>Modelo:</strong> Fiat Uno</p>
                      <p class="mb-1"><strong>Entrada:</strong> 10:30</p>
                    </div>
                    <button class="btn btn-remover w-100" data-bs-toggle="modal" data-bs-target="#saidaModal">
                      <i class="bi"></i> Registrar Saída
                    </button>
                  </div>
                </div>
              </div> -->