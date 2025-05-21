<?php

$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'estacionafacil';

$conn = new mysqli($host, $usuario, $senha, $banco);

if ($conn->connect_errno) {
  echo"Falha na conexão com MySQL: {$conn->connect_error}";
  exit();
}

// $select = 'SELECT * FROM vagas';
// $result = $conn->query($select);

// if ($result) {
//     while ($obj = $result->fetch_object()) {
//       echo "Id: {$obj->id} <br>";
//       echo "Posição: {$obj->posicao} <br>";
//       echo "Disponível: {$obj->disponivel} <br>";
//     }
// } else {
//   echo "Erro ao executar a consulta: {$conn->error}";
// }
