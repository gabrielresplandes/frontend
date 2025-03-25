CREATE DATABASE IF NOT EXISTS comida;
USE comida;

CREATE TABLE IF NOT EXISTS catalogo (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    descricao TEXT,
    preco DECIMAL(10,2) NOT NULL
);

INSERT INTO catalogo (nome, descricao, preco) VALUES
('Hambúrguer', 'Delicioso hambúrguer artesanal', 25.50),
('Pizza Margherita', 'Pizza com tomate e manjericão', 32.90),
('Suco de Laranja', 'Suco natural gelado', 7.00);
