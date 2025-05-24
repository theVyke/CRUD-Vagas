
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

--TESTE VAGAS SQL
CREATE TABLE veiculos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    placa VARCHAR(8) NOT NULL UNIQUE,
    modelo VARCHAR(50) NOT NULL,
    ano INT NOT NULL,
    proprietario VARCHAR(50) NOT NULL
);

ALTER TABLE veiculos ADD COLUMN ativo BOOLEAN DEFAULT TRUE;

CREATE TABLE registros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    vaga_id INT NOT NULL,
    veiculo_id INT NOT NULL,
    entrada DATETIME NOT NULL,
    saida DATETIME DEFAULT NULL,
    valor DECIMAL(10,2) DEFAULT NULL,
    FOREIGN KEY (vaga_id) REFERENCES vagas(id),
    FOREIGN KEY (veiculo_id) REFERENCES veiculos(id)
);