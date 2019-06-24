CREATE DATABASE matchSports;
USE matchSports;

CREATE TABLE usuario(
id_usuario INT NOT NULL PRIMARY KEY UNIQUE auto_increment,
nome VARCHAR(200) NOT NULL,
email VARCHAR(200) NOT NULL UNIQUE,
senha VARCHAR(300) NOT NULL,
foto VARCHAR(1000)
);

CREATE TABLE evento(
id_evento INT NOT NULL PRIMARY KEY UNIQUE auto_increment,
nome VARCHAR(300) NOT NULL,
descricao VARCHAR(1000) NOT NULL,
foto VARCHAR(1000) NOT NULL,
local VARCHAR(500) NOT NULL,
data_hora datetime,
usuario_fk INT,
modalidade_fk INT
);

CREATE TABLE modalidade(
id_modalidade INT NOT NULL PRIMARY KEY UNIQUE auto_increment,
nome VARCHAR (100) NOT NULL,
logotipo VARCHAR(1000) NOT NULL
);

CREATE TABLE mensagem(
id_mensagem INT NOT NULL PRIMARY KEY UNIQUE auto_increment,
mensagem LONGTEXT,
data_hora datetime,
usuario_fk INT,
evento_fk INT
);

CREATE TABLE usuario_evento(
id_usuario_evento INT NOT NULL PRIMARY KEY UNIQUE auto_increment,
usuario_fk INT,
evento_fk INT
);

ALTER TABLE evento
ADD FOREIGN KEY (usuario_fk) REFERENCES usuario(id_usuario);

ALTER TABLE evento
ADD FOREIGN KEY (modalidade_fk) REFERENCES modalidade(id_modalidade);

ALTER TABLE mensagem
ADD FOREIGN KEY (usuario_fk) REFERENCES usuario(id_usuario);

ALTER TABLE mensagem
ADD FOREIGN KEY (evento_fk) REFERENCES evento(id_evento);

ALTER TABLE usuario_evento
ADD FOREIGN KEY (usuario_fk) REFERENCES usuario(id_usuario);

ALTER TABLE usuario_evento
ADD FOREIGN KEY (evento_fk) REFERENCES evento(id_evento);
