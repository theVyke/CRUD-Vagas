<?php
require_once 'database/conexao.php';

$vagas = $conn->query("SELECT vagas.*, veiculos.placa FROM vagas LEFT JOIN veiculos ON vagas.veiculo_id = veiculos.id");

$veiculos_modal = $conn->query("SELECT * FROM veiculos WHERE ativo = 1 ORDER BY id ASC");
?>

<!-- Modal Vaga - Registrar Entrada -->
<div class="modal fade" id="registroModal" tabindex="-1" aria-labelledby="registroModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="database/registros_db/registrar_entrada.php" method="POST">
        <div class="modal-header" style="background-color: var(--cor-adicionar);">
          <h5 class="modal-title text-white" id="registroModalLabel">Registrar Entrada de Veículo</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="veiculoSelect" class="form-label">Veículo</label>
            <select class="form-select" id="veiculoSelect" name="idEntradaVeiculo" required>
              <option value="">Selecione um veículo</option>
              <?php while ($v = $veiculos_modal->fetch_assoc()): ?>
                <option value="<?= $v['id'] ?>">
                  <?= htmlspecialchars($v['placa']) ?> - <?= htmlspecialchars($v['modelo']) ?> (<?= htmlspecialchars($v['proprietario']) ?>)
                </option>
              <?php endwhile; ?>
            </select>
          </div>
              <input type="hidden" name="idVagaEntrada" id="idVagaEntrada">
          <div class="mb-3">
            <label class="form-label">Data de Entrada</label>
            <input type="date" class="form-control" id="dataEntrada" name="dataEntrada" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Hora de Entrada</label>
            <input type="time" class="form-control" id="horaEntrada" name="horaEntrada" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-adicionar">Confirmar Entrada</button>
        </div>
      </form>
    </div>
  </div>
</div>