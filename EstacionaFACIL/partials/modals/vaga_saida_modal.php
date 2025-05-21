<!-- Modal Vaga - Registrar Saída -->
    <div class="modal fade" id="saidaModal" tabindex="-1" aria-labelledby="saidaModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header" style="background-color: var(--cor-remover);">
            <h5 class="modal-title text-white" id="saidaModalLabel">Registrar Saída</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="formSaida">
              <div class="mb-3">
                <label class="form-label">Data de Saída</label>
                <input type="date" class="form-control" id="dataSaida" name="dataSaida" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Hora de Saída</label>
                <input type="time" class="form-control" id="horaSaida" name="horaSaida" required>
              </div>
              <input type="hidden" id="vagaSaidaId" name="vaga_id">
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-remover" onclick="registrarSaida()">Confirmar Saída</button>
          </div>
        </div>
      </div>
    </div>