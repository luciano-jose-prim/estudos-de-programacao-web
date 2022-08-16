<?php
 $sql = "CREATE TABLE IF NOT EXISTS $nomeDaTabela(
           id INT PRIMARY KEY AUTO_INCREMENT,
           nome VARCHAR(500),
           email VARCHAR(700),
           login VARCHAR(500),
           senha VARCHAR(200)  
           )ENGINE=innoDB";

 $conexao->query($sql);