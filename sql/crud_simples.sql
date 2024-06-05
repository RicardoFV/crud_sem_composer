-- Criação do banco de dados

create database crud;

-- usando o banco 

use crud;

-- criando a tabela

create table crud_simples
(
	id int  auto_increment not null primary key,
    nome text, 
    telefone text,
    email text, 
    cidade_registro text,
    data_registro TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP
);