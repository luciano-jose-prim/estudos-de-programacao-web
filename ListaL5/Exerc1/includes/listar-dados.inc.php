<?php
 //neste ponto da aplicação, vamos fazer o PHP enviar uma consulta SELECT ao banco de dados, para que o MySQL devolva ao nosso código o conjunto de todos os registros contendo as informações de cada aluno cadastrado
 $sql = "SELECT * FROM $nomeDaTabela";
 $resultado = $conexao->query($sql);

 //criar o cabeçalho da tabela na página web
 echo "<table>
        <caption> Relação de alunos cadastrados </caption>
        <tr>
         <th> Matrícula </th>
         <th> Aluno </th>
         <th> Média final de PRW </th>
        </tr>";

 
 //após a criação do cabeçalho da tabela na página web, o PHP deve percorrer o conteúdo devolvido pelo MySQL, por meio do objeto $resultado. O objeto $resultado contém o conjunto completo de registros devolvidos pela consulta SELECT. Por meio do comando apropriado, o PHP consegue acessar cada dado retornado por esta consulta e inserir na tabela da página web
 While($registro = $resultado->fetch_array())
  {
  //toda vez que uma consulta select devolve dados do MySQL para nosso código em PHP, devemos nos preocupar com a possibilidade de quebra de segurança da máquina cliente por meio de um ataque conhecido pela sigla XSS. Para evitarmos isso, usamos o comando PHP abaixo:
  $matric  = $registro[0];
  $aluno   = $registro[1];
  $media   = $registro[2];

  $matric  = htmlentities($matric, ENT_QUOTES, "UTF-8");
  $aluno   = htmlentities($aluno, ENT_QUOTES, "UTF-8");
  $media   = htmlentities($media, ENT_QUOTES, "UTF-8");

  echo "<tr>
         <td> $matric </td>
         <td> $aluno </td>
         <td> $media </td>
        </tr>";
  }

 echo "</table>";