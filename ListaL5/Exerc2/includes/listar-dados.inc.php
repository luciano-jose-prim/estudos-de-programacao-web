<?php
 $sql = "SELECT * FROM $nomeDaTabela WHERE classificacao = 'Perecível' ORDER BY estoque DESC";
 $resultado = $conexao->query($sql);

 echo "<table>
        <caption> Relação de produtos perecíveis cadastrados, em ordem decrescente de quantidade em estoque </caption>
        <tr>
         <th> ID </th>
         <th> Preço unitário </th>
         <th> Quantidade em estoque </th>
         <th> Classificação do produto </th>
         <th> Descrição </th>
        </tr>";

 While($registro = $resultado->fetch_array())
  {
  $id        = $registro[0];
  $preco     = $registro[1];
  $estoque   = $registro[2];
  $classif   = $registro[3];
  $descricao = $registro["descricao"];

  $id        = htmlentities($id, ENT_QUOTES, "UTF-8");
  $preco     = htmlentities($preco, ENT_QUOTES, "UTF-8");
  $estoque   = htmlentities($estoque, ENT_QUOTES, "UTF-8");
  $classif   = htmlentities($classif, ENT_QUOTES, "UTF-8");
  $descricao = htmlentities($descricao, ENT_QUOTES, "UTF-8");

  echo "<tr>
         <td> $id </td>
         <td> $preco </td>
         <td> $estoque </td>
         <td> $classif </td>
         <td> $descricao </td>
        </tr>";
  }

 echo "</table>";