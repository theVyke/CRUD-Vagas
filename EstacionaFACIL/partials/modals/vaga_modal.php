<?php require_once 'database/conexao.php';?>

<!-- Modal Vaga -->
    <div class="modal fade" id="vagaModal" tabindex="-1" aria-labelledby="vagaModalLabel">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="vagaModalLabel">Cadastrar Nova Vaga</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="database/vagas_db/vagas_crud.php" method="POST">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="posicao" class="form-label">Identificação da Vaga</label>
                            <input type="text" class="form-control" id="posicao" name="posicao" placeholder="Padrão A1" required />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-adicionar">Cadastrar Vaga</button>
                    </div>
                </form>
            </div>
        </div>
    </div>