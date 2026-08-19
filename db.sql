CREATE DATABASE gerenciar_pratos;
USE gerenciar_pratos;

CREATE TABLE usuarios (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY, 
    nome VARCHAR (100) NOT NULL,
    email VARCHAR (200) NOT NULL
);

CREATE TABLE cadastro_prato (
    id_prato INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT,
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario),
    nome_p VARCHAR (100) NOT NULL,
    descricao VARCHAR (500) NOT NULL,
    preco FLOAT NOT NULL,
    categoria VARCHAR(500) NOT NULL
);