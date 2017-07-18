CREATE DATABASE radar;

USE radar;

/* tabela de usuários para login */
CREATE TABLE usuarios
(
	email VARCHAR NOT NULL,
	senha VARCHAR NOT NULL,
	PRIMARY KEY(email)
);

/* tabela das salas */
CREATE TABLE salas
{
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	numero TINYINT UNSIGNED,
	bloco CHAR(1),
	PRIMARY KEY(id)
}

/* tabela para reserva das salas */
CREATE TABLE ensalamento
{
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	email_usuario VARCHAR NOT NULL,
	dt_solicitacao DATETIME,
	dt_inicio DATETIME,
	dt_fim DATETIME,
	dt_cancelamento DATETIME,
	cancelado BOOLEAN,
	excecao BOOLEAN, /* TRUE significa uma reserva extraordináia. FALSE siguinifica ensalamento de rotina semanal */
	id_sala INT UNSIGNED,
	solicitante VARCHAR,
	PRIMARY KEY(id)
}

/* usuários para testes */
INSERT INTO usuarios VALUES ( 'a', 'b' );