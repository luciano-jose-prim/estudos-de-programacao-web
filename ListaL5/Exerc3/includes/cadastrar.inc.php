<?php
 $id            = $_POST['id'];
 $preco         = $_POST['preco'];
 $estoque       = $_POST['estoque'];

 $id            = $conexao->escape_string($id);
 $preco         = $conexao->escape_string($preco);
 $estoque       = $conexao->escape_string($estoque);

 $sql = "INSERT $nomeDaTabela VALUES (
                '$id',
                $preco,
                $estoque)";

 $conexao->query($sql);