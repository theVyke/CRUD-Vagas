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