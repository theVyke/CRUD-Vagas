<!-- Modal Vaga - Registrar Saída -->
    <div class="modal fade" id="saidaModal" tabindex="-1" aria-labelledby="saidaModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header" style="background-color: var(--cor-remover);">
            <h5 class="modal-title text-white" id="saidaModalLabel">Registrar Saída</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="database/registros_db/registrar_saida.php" method="POST">
              <input type="hidden" name="idVagaSaida" id="idVagaSaida">
              <div class="mb-3">
                <label class="form-label">Data de Saída</label>
                <input type="date" class="form-control" id="dataSaida" name="dataSaida" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Hora de Saída</label>
                <input type="time" class="form-control" id="horaSaida" name="horaSaida" required>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-remover">Confirmar Saída</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>