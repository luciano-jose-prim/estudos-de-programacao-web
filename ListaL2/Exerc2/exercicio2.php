<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Aplicações Web com PHP - vetores </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body>
 <h1> Vetores em PHP - Exercício 2 da ListaL2 </h1>

 <?php
  //receber os dados do formulário
  $nota1 = $_POST['nota1'];
  $nota2 = $_POST['nota2'];
  $nota3 = $_POST['nota3'];

  $nome1 = $_POST["aluno1"];
  $nome2 = $_POST["aluno2"];
  $nome3 = $_POST["aluno3"];

  //criando o vetor de índice associativo com os dados armazenados nas três variáveis escalares. Lembrar que usaremos o nome como endereço de cada célula e a nota como conteúdo dentro de cada célula
  $vetorNotas[$nome1] = $nota1;
  $vetorNotas[$nome2] = $nota2;
  $vetorNotas[$nome3] = $nota3;

  //outra forma de criar o vetor
  $vetorNotas = [$nome1 => $nota1, 
                 $nome2 => $nota2,
                 $nome3 => $nota3];
  
  /*visualizar o conteúdo do vetor na página web
  echo "<pre>";
  print_r($vetorNotas);
  echo "</pre>";*/

  //vamos resolver o que o item b) do exercício nos solicita. Antes de criarmos a tabela como um todo, vamos construir o cabeçalho desta tabela
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

  //vamos resolver o item c) do enunciado, descobrindo o nome do aluno que obteve a maior nota, e qual foi esta nota. Para isso, usaremos comandos prontos da linguagem PHP
  $maiorNota = max($vetorNotas);
  
  //a função abaixo busca pela maior nota e retorna o nome do aluno associado a esta maior nota (índice associativo)
  $alunoMaiorNota = array_search($maiorNota, $vetorNotas);

  echo "<p> Resultado da busca do aluno-destaque da turma: <br>
            Nome do aluno = <span> $alunoMaiorNota </span> <br>
            Maior nota = <span> $maiorNota </span> </p>";  
 ?> 
</body>
</html>