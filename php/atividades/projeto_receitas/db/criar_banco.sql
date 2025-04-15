CREATE DATABASE IF NOT EXISTS sistema_receitas;
USE sistema_receitas;

CREATE TABLE IF NOT EXISTS receitas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    descricao TEXT NOT NULL,
    receita_texto TEXT NOT NULL,
    autor VARCHAR(100) NOT NULL,
    tipo_receita VARCHAR(50) NOT NULL,
    imagem VARCHAR(255) DEFAULT NULL
);
