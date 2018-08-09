CREATE DATABASE login;

CREATE TABLE cadastro(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    login VARCHAR(30) NOT NULL,
    senha VARCHAR(30) NOT NULL,
    nomeCompleto VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    cpf INT(11) NOT NULL,
    rg INT(13) NOT NULL,
    dataNascimento VARCHAR(10) NOT NULL,
    idade INT NOT NULL,
    nomePai VARCHAR(100) NOT NULL,
    nomeMae VARCHAR(100) NOT NULL);