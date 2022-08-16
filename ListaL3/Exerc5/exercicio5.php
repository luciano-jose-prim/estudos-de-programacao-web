<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Aplicações Web com PHP - matrizes </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body>
 <h1> Matrizes em PHP - Exercício 5 da ListaL3 </h1>

 <?php
  $nota1 = $_POST['nota1'];
  $nota2 = $_POST['nota2'];
  $nota3 = $_POST['nota3'];

  $nome1 = $_POST["aluno1"];
  $nome2 = $_POST["aluno2"];
  $nome3 = $_POST["aluno3"];

  $matric1 = $_POST["matric1"];
  $matric2 = $_POST["matric2"];
  $matric3 = $_POST["matric3"];

  //criação da matriz
  $matrizAlunos[$matric1] = [$nome1, $nota1];
  $matrizAlunos[$matric2] = [$nome2, $nota2];
  $matrizAlunos[$matric3] = [$nome3, $nota3];

  /*se a ordenação precisar ser feita tomando-se como elemento de referência o índice da matriz (índice do vetor externo), o processo é simples. Imagine que gostaríamos de ordenar os dados da matriz pelo número de matrícula de cada aluno. Simplesmente, fazemos isso:
  ksort($matrizAlunos);

  echo "<pre>";
  print_r($matrizAlunos);
  echo "</pre>";*/

  //no caso em que precisamos ordenar a matriz, tomando-se como parâmetro uma informação no vetor interno (aqui neste exercício, a média do aluno), precisamos lançar mão do recurso da criação do vetor auxiliar, como fizemos nos casos anteriores
  foreach($matrizAlunos as $matricula => $vetorInterno)
   {
   $vetorMedias[$matricula] = $vetorInterno[1];
   }

  //vamos fazer a ordenação do vetor auxiliar $vetorMedias pela nota, decrescentemente
  arsort($vetorMedias);  


  //vamos construir o cabeçalho desta tabela na página web
  echo "<table>
         <caption> Relação de alunos e seus dados cadastrais </caption>
         <tr>
          <th> Matrícula </th>
          <th> Aluno </th>
          <th> Média de PRW </th>
         </tr>";

  //vamos usar o laço especial fornecido pelo PHP para percorrermos o vetor já ordenado ($vetorMedias), retirarmos os dados deste vetor e montarmos o corpo da tabela na página web
  foreach($vetorMedias as $matricula => $media)
   {
   //conseguimos a última informação que falta do aluno (seu nome) acessando a matriz, por meio da matrícula
   $aluno = $matrizAlunos[$matricula][0];
   echo "<tr>
          <td> $matricula </td>
          <td> $aluno </td>
          <td> $media </td>
         </tr>";  
   }

  echo "</table>";  
 ?> 
</body>
</html>