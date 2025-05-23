
  function abrirModalEdicao(id, placa, modelo, ano, proprietario) {
    document.getElementById('idVeiculo').value = id;
    document.getElementById('placa').value = placa;
    document.getElementById('modelo').value = modelo;
    document.getElementById('anoVeiculo').value = ano;
    document.getElementById('dono').value = proprietario;
    
    var modal = new bootstrap.Modal(document.getElementById('atualizaModal'));
    modal.show();
  }

  function confirmarExclusao(message = 'Tem certeza que deseja excluir este item?') {
  return confirm(message);
}


  