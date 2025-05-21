<!-- Modal Veículo -->
    <div class="modal fade" id="veiculoModal" tabindex="-1" aria-labelledby="veiculoModalLabel">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="veiculoModalLabel">
              Cadastrar Veículo
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="mb-3">
                <label for="placa" class="form-label">Placa</label>
                <input type="text" class="form-control" id="placa" placeholder="Ex: ABC-1234 ou ABC-1D34 (MERCOSUL)"
                  required />
              </div>
              <div class="row">
                <div class="col-md-8 mb-3">
                  <label for="modelo" class="form-label">Modelo</label>
                  <input type="text" class="form-control" id="modelo" placeholder="Ex: Fiat Uno" required />
                </div>
                <div class="col-md-4 mb-3">
                  <label for="ano" class="form-label">Ano</label>
                  <input type="number" class="form-control" id="ano" min="1900" max="2099" placeholder="2020"
                    required />
                </div>
              </div>
              <div class="mb-3">
                <label for="dono" class="form-label">Proprietário</label>
                <input type="text" class="form-control" id="dono" placeholder="Nome completo" required />
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-adicionar">Salvar Veículo</button>
          </div>
        </div>
      </div>
    </div>