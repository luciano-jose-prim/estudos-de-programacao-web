<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Aplicações Web com PHP - vetores </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body>
 <h1> Vetores em PHP - Exercício 7 da ListaL2 </h1>

 <?php
  //receber os dados do formulário
  $idade1 = $_POST['idade1'];
  $idade2 = $_POST['idade2'];
  $idade3 = $_POST['idade3'];

  $nome1 = $_POST["pessoa1"];
  $nome2 = $_POST["pessoa2"];
  $nome3 = $_POST["pessoa3"];

  $vetorPessoas = [$nome1 => $idade1, 
                   $nome2 => $idade2,
                   $nome3 => $idade3];

  /*echo "<pre>";
  print_r($vetorPessoas);
  echo "</pre>";*/

  //para resolvermos o item b), vamos ordenar o vetor pelo índice ( chave - k), que é o nome da pessoa, mantendo a associação (letra a),  de forma crescente (sem a letra r de reverse). Usamos a função abaixo
  ksort($vetorPessoas);

  //vamos resolver o que o item c) do exercício nos solicita. Antes de criarmos a tabela como um todo, vamos construir o cabeçalho desta tabela
  echo "<table>
         <caption> Relação de pessoas e respectivas idades </caption>
         <tr>
          <th> Nome da pessoa </th>
          <th> Idade </th>
         </tr>";

  //vamos usar o laço especial fornecido pelo PHP para percorrermos um vetor qualquer
  foreach($vetorPessoas as $pessoa => $idade)
   {
   echo "<tr>
          <td> $pessoa </td>
          <td> $idade </td>
         </tr>";  
   }

  echo "</table>";  
 ?> 
</body>
</html>