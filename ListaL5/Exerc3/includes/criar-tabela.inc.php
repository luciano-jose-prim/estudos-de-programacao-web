<?php
 $sql = "CREATE TABLE IF NOT EXISTS $nomeDaTabela(
          id VARCHAR(20) PRIMARY KEY,
          preco_unitario DECIMAL(7,2),
          estoque INT
          )";

 $conexao->query($sql);