<!-- Modal Vaga - Registrar Entrada -->
    <div class="modal fade" id="registroModal" tabindex="-1" aria-labelledby="registroModalLabel">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header" style="background-color: var(--cor-adicionar);">
            <h5 class="modal-title text-white id=" registroModalLabel">Registrar Entrada de Veículo</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="mb-3">
                <label for="veiculoSelect" class="form-label">Veículo</label>
                <select class="form-select" id="veiculoSelect" required>
                  <option value="">Selecione um veículo</option>
                  <option value="1">ABC-1234 - Fiat Uno (João Silva)</option>
                  <option value="2">
                    DEF-5678 - Volkswagen Gol (Maria Souza)
                  </option>
                </select>
              </div>
              <div class="mb-3">
                <label for="vagaSelect" class="form-label">Vaga</label>
                <select class="form-select" id="vagaSelect" required>
                  <option value="">Selecione uma vaga disponível</option>
                  <option value="1">Vaga 01</option>
                  <option value="3">Vaga 03</option>
                </select>
              </div>
              <div class="mb-3">
                <label class="form-label">Data de Entrada</label>
                <input type="date" class="form-control" id="dataEntrada" name="dataEntrada" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Hora de Entrada</label>
                <input type="time" class="form-control" id="horaEntrada" name="horaEntrada" required>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
              Cancelar
            </button>
            <button type="button" class="btn btn-adicionar">
              Confirmar Entrada
            </button>
          </div>
        </div>
      </div>
    </div>