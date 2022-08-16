<?php
 $sql = "SELECT descricao FROM $nomeDaTabela WHERE estoque = (SELECT MIN(estoque) FROM $nomeDaTabela)";
 $resultado = $conexao->query($sql);

 $registro  = $resultado->fetch_array();
 $descricao = $registro[0];
 $descricao = htmlentities($descricao, ENT_QUOTES, "UTF-8");

 echo "<p> A descrição do produto com a menor quantidade em estoque armazenado no banco de dados é a seguinte: <span> $descricao </span> </p>";