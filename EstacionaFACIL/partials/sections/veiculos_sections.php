<?php
require_once 'database/conexao.php';

$sql = "SELECT * FROM veiculos ORDER BY id ASC";
$veiculos = $conn->query($sql);
?>

<!-- Seção Veículos -->

<div class="tab-pane fade show active" id="veiculos" role="tabpanel">
        <div class="card mb-4 border-0 shadow-sm">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Cadastro de Veículos</h5>
            <button class="btn btn-adicionar" data-bs-toggle="modal" data-bs-target="#veiculoModal">
              <i class="bi bi-plus-circle"></i> Novo Veículo
            </button>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped table-hover align-middle">
                <thead class="table-light">
                  <tr>
                    <th>ID</th>
                    <th>Placa</th>
                    <th>Modelo</th>
                    <th>Ano</th>
                    <th>Proprietário</th>
                    <th class="text-end">Ações</th>
                  </tr>
                </thead>
                
                <tbody>
                  <?php while ($v = $veiculos->fetch_assoc()): ?>
                    <tr>
                      <td><?= htmlspecialchars($v['id']) ?></td>
                      <td><span class="badge bg-dark"><?= htmlspecialchars($v['placa']) ?></span></td>
                      <td><?= htmlspecialchars($v['modelo']) ?></td>
                      <td><?= htmlspecialchars($v['ano']) ?></td>
                      <td><?= htmlspecialchars($v['proprietario']) ?></td>
                      <td class="text-end">
                        <button
                          class="btn btn-sm btn-alterar me-2"
                          onclick="abrirModalEdicao(
                            <?= $v['id'] ?>,
                            '<?= addslashes($v['placa']) ?>',
                            '<?= addslashes($v['modelo']) ?>',
                            <?= $v['ano'] ?>,
                            '<?= addslashes($v['proprietario']) ?>'
                          )"
                          data-bs-toggle="modal"
                          data-bs-target="#atualizaModal"
                        >
                          <i class="bi bi-pencil"></i> Editar
                        </button>
                        <button
                          class="btn btn-sm btn-remover"
                          onclick="excluirVeiculo(<?= $v['id'] ?>)"
                        >
                          <i class="bi bi-trash"></i> Excluir
                        </button>
                      </td>
                    </tr>
                  <?php endwhile; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>




                      <!-- <tbody>
                  <tr>
                    <td>1</td>
                    <td><span class="badge bg-dark">ABC-1234</span></td>
                    <td>Fiat Uno</td>
                    <td>2020</td>
                    <td>João Silva</td>
                    <td class="text-end">
                      <button class="btn btn-sm btn-alterar btn-alterar me-2"
                        onclick="abrirModalEdicao(1, 'ABC-1234', 'Fiat Uno', 2020, 'João Silva')" data-bs-toggle="modal"
                        data-bs-target="#atualizaModal">
                        <i class="bi bi-pencil"></i> Editar
                      </button>
                      <button class="btn btn-sm btn-remover">
                        <i class="bi bi-trash"></i> Excluir
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td><span class="badge bg-dark">DEF-5678</span></td>
                    <td>Volkswagen Gol</td>
                    <td>2018</td>
                    <td>Maria Souza</td>
                    <td class="text-end">
                      <button class="btn btn-sm btn-alterar me-2">
                        <i class="bi bi-pencil"></i> Editar
                      </button>
                      <button class="btn btn-sm btn-remover">
                        <i class="bi bi-trash"></i> Excluir
                      </button>
                    </td>
                  </tr>
                </tbody> -->