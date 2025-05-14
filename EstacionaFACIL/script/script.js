
  function abrirModalEdicao(id, placa, modelo, ano, proprietario) {
    document.getElementById('veiculoId').value = id;
    document.getElementById('placa').value = placa;
    document.getElementById('modelo').value = modelo;
    document.getElementById('ano').value = ano;
    document.getElementById('dono').value = proprietario;
    
    var modal = new bootstrap.Modal(document.getElementById('atualizaModal'));
    modal.show();
  }

  