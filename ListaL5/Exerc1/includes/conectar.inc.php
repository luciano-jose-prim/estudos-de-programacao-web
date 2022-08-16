<?php
 //para estabelecermos a conexão real entre o PHP e o MYSQL, usamos o comando abaixo, que cria um objeto a partir das informações de conexão da include anterior
 $conexao = new mysqli($servidor, $usuario, $senha); 