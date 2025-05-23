    <!-- Modal Editar Veiculo -->
    <div class="modal fade" id="atualizaModal" tabindex="-1" aria-labelledby="atualizaModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: var(--cor-alterar);">
                <h5 class="modal-title text-white" id="atualizaModalLabel">Atualizar Veículo</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="database/veiculos_db/veiculos_atualizacao.php" method="POST" id="formAtualiza">
                <div class="mb-3">
                    <label for="idVeiculo" class="form-label">ID do Veículo</label>
                    <input type="text" class="form-control bg-light" id="idVeiculo" name="idAtualizaVeiculo" readonly
                    style="cursor: not-allowed;">
                </div>
                <div class="mb-3">
                    <label for="placa" class="form-label">Placa</label>
                    <input type="text" class="form-control" id="placa" name="placa"
                    placeholder="Ex: ABC-1234 ou ABC-1D34 (MERCOSUL)" required>
                </div>
                <div class="row">
                    <div class="col-md-8 mb-3">
                    <label for="modelo" class="form-label">Modelo</label>
                    <input type="text" class="form-control" id="modelo" name="modelo" placeholder="Ex: Fiat Uno" required>
                    </div>
                    <div class="col-md-4 mb-3">
                    <label for="ano" class="form-label">Ano</label>
                    <input type="number" class="form-control" id="ano" name="anoVeiculo" min="1900" max="2099" placeholder="2020"
                        required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="dono" class="form-label">Proprietário</label>
                    <input type="text" class="form-control" id="dono" name="proprietario" placeholder="Nome completo"
                    required>
                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-alterar">Confirmar Alteração</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

