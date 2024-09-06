CREATE DATABASE lista_tarefas;

USE lista_tarefas;

CREATE TABLE tarefas (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    descricao VARCHAR(200),
    prioridade INT(1),
    prazo DATETIME,
    concluida BOOLEAN
);

INSERT INTO tarefas (nome, descricao, prioridade, prazo, concluida)
VALUES 
('Comprar supermercado', 'Fazer compras para a semana', 2, '2024-09-10 15:00:00', FALSE),
('Reunião com o cliente', 'Discutir os requisitos do novo projeto', 1, '2024-09-08 10:00:00', FALSE),
('Reunião com o cliente', 'Discutir os requisitos do novo projeto', 1, '2024-09-08 10:00:00', FALSE);