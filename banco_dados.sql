CREATE DATABASE radar;

USE radar;

/* tabela de usuários para login */
CREATE TABLE usuarios
(
	email varchar(80) NOT NULL,
	senha varchar(20) NOT NULL,
	primary key(email)
);

/* usuários para testes */
INSERT INTO usuarios VALUES ( 'a', 'b' );