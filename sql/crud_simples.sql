-- Criação do banco de dados

create database crud;

-- usando o banco 

use crud;

-- criando a tabela

create table agenda
(
	id int  auto_increment not null primary key,
    nome text, 
    telefone text,
    email text, 
    estado_registro text,
    data_registro TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP
);