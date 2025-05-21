<!-- Seção Vagas -->
      <div class="tab-pane fade" id="vagas" role="tabpanel">
        <div class="card mb-4 border-0 shadow-sm">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Controle de Vagas</h5>
            <button class="btn btn-adicionar" data-bs-toggle="modal" data-bs-target="#vagaModal">
              <i class="bi bi-plus-circle"></i> Nova Vaga
            </button>
          </div>
          <div class="card-body">
            <div class="row g-3">

              <!-- Vaga disponível -->
              <div class="col-md-4">
                <div class="card vaga-disponivel h-100">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start">
                      <h5 class="card-title mb-3">Vaga 01</h5>
                      <span class="badge rounded-pill bg-success">Disponível</span>
                    </div>
                    <p class="text-muted small mb-4">
                      Nenhum veículo estacionado
                    </p>
                    <button class="btn btn-adicionar w-100" data-bs-toggle="modal" data-bs-target="#registroModal">
                      <i class="bi"></i> Registrar Entrada
                    </button>
                  </div>
                </div>
              </div>

              <!-- Vaga ocupada -->
              <div class="col-md-4">
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
              </div>

              <!-- Vaga disponível -->
              <div class="col-md-4">
                <div class="card vaga-disponivel h-100">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start">
                      <h5 class="card-title mb-3">Vaga 03</h5>
                      <span class="badge rounded-pill bg-success">Disponível</span>
                    </div>
                    <p class="text-muted small mb-4">
                      Nenhum veículo estacionado
                    </p>
                    <button class="btn btn-adicionar w-100" data-bs-toggle="modal" data-bs-target="#registroModal">
                      <i class="bi"></i> Registrar Entrada
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>