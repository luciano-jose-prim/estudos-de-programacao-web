<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Aplicações Web com PHP - matrizes </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body>
 <h1> Matrizes em PHP - Exercício 3 da ListaL3 </h1>

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

  //vamos resolver o que o item b) do exercício nos solicita, que é, descobrir a maior nota cadastrada e, também, mostrar a matrícula e o nome do aluno que alcançou a maior nota registrada na matriz


  //vamos usar o laço especial fornecido pelo PHP para percorrermos uma matriz qualquer
  foreach($matrizAlunos as $matricula => $vetorInterno)
   {
   //criamos um vetor temporário para guardarmos a nota em PRW de cada aluno. Aproveitamos, aqui, e guardamos a matrícula de cada aluno como índice associativo do vetor
   $vetorNotas[$matricula] = $vetorInterno[1];   
   }

  //agora, utilizamos a função MAX() do PHP para descobrirmos a maior nota cadastrada no vetor auxiliar
  $maiorNota = max($vetorNotas);

  //agora, usamos uma função do PHP que busca, dentro do vetor auxiliar a célula com a maior a maior nota encontrada e retorna o número de matrícula associado a esta maior nota
  $matricMaiorNota = array_search($maiorNota, $vetorNotas);

  //agora que já temos o valor da maior nota e da matrícula do aluno com a maior nota, basta irmos até a matriz e localizarmos a célula do respectivo aluno com o número de matrícula descoberto, permitindo assim, a descoberta da última informação que falta, que é o nome do aluno
  $nomeAlunoMaiorNota = $matrizAlunos[$matricMaiorNota][0];

  echo "<p> De acordo com os dados dos alunos cadastrados na matriz, temos o seguinte resultado: <br>
       Maior nota encontrada = <span> $maiorNota </span> <br>
       Aluno com a maior nota obtida = <span>  $nomeAlunoMaiorNota </span> <br>
       Matrícula do aluno com a maior nota obtida = <span> $matricMaiorNota </span> </p>";  
 ?> 
</body>
</html>