<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Aplicações Web com PHP - vetores </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body>
 <h1> Vetores em PHP - Exercício 3 da ListaL2 </h1>

 <?php
  //receber os dados do formulário
  $nota1 = $_POST['nota1'];
  $nota2 = $_POST['nota2'];
  $nota3 = $_POST['nota3'];

  $nome1 = $_POST["aluno1"];
  $nome2 = $_POST["aluno2"];
  $nome3 = $_POST["aluno3"];

  $vetorNotas = [$nome1 => $nota1, 
                 $nome2 => $nota2,
                 $nome3 => $nota3];

  //para resolvermos o item b), vamos ordenar o vetor pelo conteúdo dentro de cada célula, decrescentemente, que é a nota do aluno. Usamos a função abaixo
  arsort($vetorNotas);

  //vamos resolver o que o item c) do exercício nos solicita. Antes de criarmos a tabela como um todo, vamos construir o cabeçalho desta tabela
  echo "<table>
         <caption> Relação de alunos e respectivas notas de PRW </caption>
         <tr>
          <th> Aluno </th>
          <th> Nota </th>
         </tr>";

  //vamos usar o laço especial fornecido pelo PHP para percorrermos um vetor qualquer
  foreach($vetorNotas as $aluno => $nota)
   {
   echo "<tr>
          <td> $aluno </td>
          <td> $nota </td>
         </tr>";  
   }

  echo "</table>";  
 ?> 
</body>
</html>