<?php
 $id                = $_POST['altera-id'];
 $novoPreco         = $_POST['altera-preco'];

 $id            = $conexao->escape_string($id);
 $novoPreco     = $conexao->escape_string($novoPreco);

 $sql = "UPDATE $nomeDaTabela SET preco_unitario = $novoPreco WHERE id = '$id'";

 $conexao->query($sql);

 //neste ponto, podemos usar código em PHP para testarmos se a consulta de alteração foi (ou não) bem-sucedida no banco de dados
 $numeroDeRegistrosAfetados = $conexao->affected_rows;

 if($numeroDeRegistrosAfetados <= 0)
  {
  echo "<p> Caro usuário, não possível alterar o preço do produto pesquisado, porque o ID fornecido não foi encontrado em nossa base de dados. </p>";
  }
 else
  {
  echo "<p> Alteração de preço do produto com o id igual a <span> $id </span> foi efetuada com sucesso! </p>";
  }