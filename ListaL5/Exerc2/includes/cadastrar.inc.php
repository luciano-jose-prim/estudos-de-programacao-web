<?php
 $id            = $_POST['id'];
 $preco         = $_POST['preco'];
 $estoque       = $_POST['estoque'];
 $descricao     = $_POST['descricao'];
 $classific     = $_POST['classificacao'];


 $id            = $conexao->escape_string($id);
 $preco         = $conexao->escape_string($preco);
 $estoque       = $conexao->escape_string($estoque);
 $descricao     = $conexao->escape_string($descricao);
 $classific     = $conexao->escape_string($classific);

 $sql = "INSERT $nomeDaTabela VALUES (
                '$id',
                $preco,
                $estoque,
                '$classific',
                '$descricao')";

 $conexao->query($sql);