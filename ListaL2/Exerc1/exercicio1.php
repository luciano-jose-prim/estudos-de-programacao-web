<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Aplicações Web com PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body>
 <h1> Vetores em PHP - Exercício 1 da ListaL2 - resposta do PHP </h1>

 <?php
  //receber os dados do formulário
  $nota1 = $_POST['nota1'];
  $nota2 = $_POST['nota2'];
  $nota3 = $_POST['nota2'];

  //criando o vetor de índice numérico com os dados armazenados nas três variáveis escalares
  $vetorNotas[0] = $nota1;
  $vetorNotas[1] = $nota2;
  $vetorNotas[2] = $nota3;

  //outra forma de criar o vetor, sem usar as variáveis escalares temporárias

  $vetorNotas[0] = $_POST['nota1'];
  $vetorNotas[1] = $_POST['nota2'];
  $vetorNotas[2] = $_POST['nota3'];

  //visualizar o conteúdo do vetor na página web
  echo "<pre>";
  print_r($vetorNotas);
  echo "</pre>";

  //vamos calcular a média aritmética simples das três notas dos alunos, por meio de uma função pronta do PHP
  $soma = array_sum($vetorNotas);
  $media = $soma / count($vetorNotas);

  $mediaFormatada = number_format($media, 1, ",", ".");

  echo "<p> De acordo com as notas fornecidas, a média da turma é <span> $mediaFormatada </span> </p>";  
 ?> 
</body>
</html>