<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Aplicações Web com PHP - matrizes </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body>
 <h1> Matrizes em PHP - Exercício 2 da ListaL3 </h1>

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

  $matrizAlunos = [$matric1 => [$nome1, $nota1],
                   $matric2 => [$nome2, $nota2],
                   $matric3 => [$nome3, $nota3]];

  //vamos resolver o que o item b) do exercício nos solicita, que é, mostrar na página web o resultado da média das três notas cadastradas


  //vamos usar o laço especial fornecido pelo PHP para percorrermos uma matriz qualquer
  foreach($matrizAlunos as $matricula => $vetorInterno)
   {
   //criamos um vetor temporário para guardarmos somente a nota em PRW de cada aluno
   $vetorNotas[] = $vetorInterno[1];   
   }

  echo "<pre>";
  print_r($vetorNotas);
  echo "</pre>";

  $media = array_sum($vetorNotas)/count($vetorNotas);

  $mediaFormatada = number_format($media, 1, ",", ".");

  echo "<p> De acordo com os dados dos alunos cadastrados na matriz, a média final da turma em PRW é <span> $mediaFormatada </span> </p>";
 ?> 
</body>
</html>