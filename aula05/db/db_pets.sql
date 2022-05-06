-- Pra listar os bancos de dados --
SHOW DATABASES;


-- Criar banco de daddos chamado db_pets --
CREATE DATABASE db_pets;

-- Selecionar o banco que vai ser usado --
USE db_pets;

-- Listar as tabelas do banco selecionado --
SHOW TABLES;

-- Criar a tabela de tutores --
CREATE TABLE tb_tutores (
  id INT(11) primary key auto_increment,
  status BOOLEAN,
  nome VARCHAR(100),
  endereco VARCHAR(255),
  data_nascimento CHAR(10),
  sexo CHAR(1)
);

-- Criar a tabela de animais --
CREATE TABLE tb_tutores (
  id INT(11) primary key auto_increment,
  status BOOLEAN,
  nome VARCHAR(30),
  raca VARCHAR(20),
  data_nascimento CHAR(10),
  tipo VARCHAR(10),
  peso FLOAT(3,2),
  cor VARCHAR(10)
);


-- INSERIR DADOS NA TABELA DE TUTORES --
INSERT INTO tb_tutores
(status, nome, endereco, data_nascimento, sexo)
VALUES
(1, 'Ualison', 'Av. Pontes Vieira', '01/01/1989', 'M'),
(1, 'Flavio', 'Av. Bezerra de Menezes', '10/03/1991', 'M'),
(0, 'Osvaldo', 'Av. Pontes Vieira', '08/02/1992', 'M'),
(1, 'Renato', 'Av. Pontes Vieira', '21/12/2001', 'M'),
(1, 'Elias', 'Av. Pontes Vieira', '01/01/1989', 'M'),
(1, 'Alessandro', 'Av. Pontes Vieira', '11/09/1989', 'M'),
(0, 'Wagner', 'Av. Pontes Vieira', '28/07/1983', 'F')
;
