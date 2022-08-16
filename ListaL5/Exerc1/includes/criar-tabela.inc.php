<?php
 //comandos para a criação da tabela no banco de dados, que irá arazenar os dados de cada aluno cadastrado
 $sql = "CREATE TABLE IF NOT EXISTS $nomeDaTabela(
          matricula VARCHAR(20) PRIMARY KEY,
          aluno VARCHAR(300),
          media DECIMAL(3,1))";

 $conexao->query($sql);