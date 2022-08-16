<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Aplicações Web com PHP - matrizes </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body>
 <h1> Matrizes em PHP - Exercício 4 da ListaL3 </h1>

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

  //recebendo o nome do aluno a ser pesquisado na matriz
  $alunoPesquisado = $_POST['aluno-pesquisado'];

  //criando a matriz com os dados das variáveis escalares e usando a matrícula como índice associativo da matriz (I). No vetor interno, usamos índice numérico (J)

  //outra forma comum de representação da matriz
  $matrizAlunos[$matric1] = [$nome1, $nota1];
  $matrizAlunos[$matric2] = [$nome2, $nota2];
  $matrizAlunos[$matric3] = [$nome3, $nota3];  

  //vamos usar o laço especial fornecido pelo PHP para percorrermos uma matriz qualquer. A partir desta matriz, criaremos um vetor somente com os nomes dos alunos, a fim de facilitar a busca pelo aluno pesquisado
  foreach($matrizAlunos as $matricula => $vetorInterno)
   {
   $vetorDeNomes[$matricula] = $vetorInterno[0];
   }

  echo "<pre>";
  print_r($vetorDeNomes);
  echo "</pre>";

  //neste ponto, usamos a função array_search() para pesquisarmos, no vetor auxiliar, o nome do aluno
  $matriculaDoAlunoPesquisado = array_search($alunoPesquisado, $vetorDeNomes);

  if($matriculaDoAlunoPesquisado == false)
   {
   echo "<p> O aluno com o nome <span> $alunoPesquisado </span> não foi encontrado na matriz. </p>";
   }

  else
   {
   $mediaDoAlunoPesquisado = $matrizAlunos[$matriculaDoAlunoPesquisado][1]; 

   echo "<p> Dados do aluno pesquisado na matriz: <br>
         Nome = <span> $alunoPesquisado </span> <br>
         Matrícula = <span> $matriculaDoAlunoPesquisado </span> <br>
         Média final de PRW = <span> $mediaDoAlunoPesquisado </span> </p>";
   }
 ?> 
</body>
</html>