<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Aplicações Web com PHP - matrizes </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body>
 <h1> Matrizes em PHP - Exercício 1 da ListaL3 </h1>

 <?php
  //receber os dados do formulário
  $nota1 = $_POST['nota1'];
  $nota2 = $_POST['nota2'];
  $nota3 = $_POST['nota3'];

  $nome1 = $_POST["aluno1"];
  $nome2 = $_POST["aluno2"];
  $nome3 = $_POST["aluno3"];

  $matric1 = $_POST["matric1"];
  $matric2 = $_POST["matric2"];
  $matric3 = $_POST["matric3"];

  //criando a matriz com os dados das variáveis escalares e usando a matrícula como índice associativo da matriz (I). No vetor interno, usamos índice numérico (J)
  $matrizAlunos[$matric1][0] = $nome1;
  $matrizAlunos[$matric1][1] = $nota1;

  $matrizAlunos[$matric2][0] = $nome2;
  $matrizAlunos[$matric2][1] = $nota2;

  $matrizAlunos[$matric3][0] = $nome3;
  $matrizAlunos[$matric3][1] = $nota3;

  //outra forma de criar a matriz
  $matrizAlunos = [$matric1 => [$nome1, $nota1],
                   $matric2 => [$nome2, $nota2],
                   $matric3 => [$nome3, $nota3]];

  //outra forma comum de representação da matriz
  $matrizAlunos[$matric1] = [$nome1, $nota1];
  $matrizAlunos[$matric2] = [$nome2, $nota2];
  $matrizAlunos[$matric3] = [$nome3, $nota3];
  
  //visualizar o conteúdo do vetor na página web
  echo "<pre>";
  print_r($matrizAlunos);
  echo "</pre>";

  //vamos resolver o que o item b) do exercício nos solicita. Antes de criarmos a tabela como um todo, vamos construir o cabeçalho desta tabela
  echo "<table>
         <caption> Relação de alunos e seus dados cadastrais </caption>
         <tr>
          <th> Matrícula </th>
          <th> Aluno </th>
          <th> Média de PRW </th>
         </tr>";

  //vamos usar o laço especial fornecido pelo PHP para percorrermos uma matriz qualquer
  foreach($matrizAlunos as $matricula => $vetorInterno)
   {
   echo "<tr>
          <td> $matricula </td>
          <td> $vetorInterno[0] </td>
          <td> $vetorInterno[1] </td>
         </tr>";  
   }

  echo "</table>";  
 ?> 
</body>
</html>