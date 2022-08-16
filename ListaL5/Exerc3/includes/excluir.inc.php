<?php
 $quantidadeMinimaEstoque = $_POST['exclui-produto'];
 $quantidadeMinimaEstoque = $conexao->escape_string($quantidadeMinimaEstoque);
 
 $sql = "DELETE FROM $nomeDaTabela WHERE estoque < $quantidadeMinimaEstoque";

 $conexao->query($sql);

 $numeroDeRegistrosExcluidos = $conexao->affected_rows;

 if($numeroDeRegistrosExcluidos == 0)
  {
  echo "<p> Caro usuário, não possível excluir nenhum registro do banco de dados. Tente novamente! </p>";
  }
 else
  {
  echo "<p> Exclusão de registro efetuada com sucesso. O número de registros com estoque abaixo de <span> $quantidadeMinimaEstoque </span> unidades e que foi excluído do banco de dados é igual a <span> $numeroDeRegistrosExcluidos </span>  </p>";
  }