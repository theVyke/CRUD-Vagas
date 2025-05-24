<?php
require_once 'database/conexao.php';

$sql = "SELECT r.*, v.posicao, ve.placa, ve.modelo, ve.proprietario
        FROM registros r
        JOIN vagas v ON r.vaga_id = v.id
        JOIN veiculos ve ON r.veiculo_id = ve.id
        ORDER BY r.entrada DESC";

$result = $conn->query($sql);

?>

<!-- Seção Registros -->
<div class="tab-pane fade" id="registros" role="tabpanel">
  <div class="card border-0 shadow-sm">
    <div class="card-header">
      <h5 class="mb-0">Histórico de Registros</h5>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped table-hover">
          <thead class="table-light">
            <tr>
              <th>Vaga</th>
              <th>Veículo</th>
              <th>Entrada</th>
              <th>Saída</th>
              <th>Tempo</th>
              <th>Valor</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($linhaTabela = $result->fetch_assoc()): ?>
              <?php
                $entrada = new DateTime($linhaTabela['entrada']);
                $saida = $linhaTabela['saida'] ? new DateTime($linhaTabela['saida']) : null;
                $diferenca = $saida ? $entrada->diff($saida) : null;
                $horas = $diferenca ? $diferenca->h + ($diferenca->days * 24) : 0;
                $minutos = $diferenca ? $diferenca->i : 0;
                $tempo = $saida ? "{$horas}h{$minutos}m" : '-';
                $valor = $saida ? 'R$ ' . number_format(ceil(($horas + $minutos/60) * 7), 2, ',', '.') : '-';
              ?>
              <tr>
                <td><?= htmlspecialchars($linhaTabela['posicao']) ?></td>
                <td><?= htmlspecialchars($linhaTabela['placa']) ?> (<?= htmlspecialchars($linhaTabela['modelo']) ?>)</td>
                <td><?= date('d/m/Y H:i', strtotime($linhaTabela['entrada'])) ?></td>
                <td><?= $linhaTabela['saida'] ? date('d/m/Y H:i', strtotime($linhaTabela['saida'])) : '-' ?></td>
                <td><?= $tempo ?></td>
                <td><?= $valor ?></td>
              </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>