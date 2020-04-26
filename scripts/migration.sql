 -- BANCO DE DADOS
DROP DATABASE IF EXISTS MUSEU;
CREATE DATABASE IF NOT EXISTS MUSEU;

USE MUSEU;

-- Habilitar update no banco de dados
SET SQL_SAFE_UPDATES = 0;

-- TABELA DE USUARIOS
CREATE TABLE IF NOT EXISTS usuarios 
	(
		id		INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY
		,nome	VARCHAR(20) NOT NULL
		,email	VARCHAR(200) NOT NULL
		,senha	VARCHAR(200) NOT NULL
		,ativo	VARCHAR(10) NOT NULL
	);

-- TABELA DE OBRAS
CREATE TABLE IF NOT EXISTS obras 
	(
		id		    INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY
		,nome		VARCHAR(150) NOT NULL
		,descri		VARCHAR(2500) NOT NULL
		,ativo		BOOLEAN NOT NULL
        ,usuario_id INTEGER NOT NULL FOREIGN KEY REFERENCES usuarios (id)
	);


-- Inserindo usuarios padrões
    -- Admin
    insert into usuarios ( codigo, nome, senha, tipo, email, cod_reset) values (0, 'Admin', 'e5728637c78232c0e8faff438d5c7127', 'Ativo', 'senacpi2.2019@gmail.com', '' );

-- Inserindo obras iniciais