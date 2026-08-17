CREATE DATABASE restaurante_tolin_m1;
USE restaurante_tolin_m1;

CREATE TABLE usuario{
    id_usuario int AUTO_INCREMENT PRIMARY KEY NOT NULL,
    nome varchar(45) NOT NULL, 
    emial varchar(45) NOT NULL, 
};

CREATE TABLE prato{
    id_prato int AUTO_INCREMENT PRIMARY KEY NOT NULL,
    id_usuario FOREIGN KEY,
    nome varchar(45) NOT NULL, 
    descricao varchar(45) NOT NULL, 
    preco varchar(45) NOT NULL, 
    categoria varchar(45) NOT NULL, 
};