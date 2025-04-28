CREATE DATABASE IF NOT EXISTS to_do_senai
  DEFAULT CHARACTER SET utf8mb4
  COLLATE utf8mb4_general_ci;


  __________________

CREATE TABLE tarefas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tarefa text NOT NULL,
    data_criacao DATETIME DEFAULT CURRENT_TIMESTAMP
);
