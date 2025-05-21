
--TESTE VAGAS SQL
CREATE TABLE vagas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    posicao VARCHAR(10) NOT NULL UNIQUE,
    disponivel BOOLEAN DEFAULT TRUE,
    veiculo_id INT NULL,
    entrada DATETIME NULL,
    saida DATETIME NULL,
    FOREIGN KEY (veiculo_id) REFERENCES veiculos(id)
);
--Registrar Entrada:
UPDATE vagas 
SET disponivel = FALSE, 
    veiculo_id = [ID_VEICULO], 
    entrada = NOW(), 
    saida = NULL 
WHERE id = [ID_VAGA];

--Registrar Saída:
UPDATE vagas 
SET disponivel = TRUE, 
    saida = NOW() 
WHERE id = [ID_VAGA];

--TESTE VAGAS SQL
CREATE TABLE veiculos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    placa VARCHAR(8) NOT NULL UNIQUE,
    modelo VARCHAR(50) NOT NULL,
    ano INT NOT NULL,
    proprietario VARCHAR(50) NOT NULL
);