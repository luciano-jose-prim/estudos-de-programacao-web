<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Aplicações Web com PHP - modularização </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body>
 <h1> Funções de usuário em PHP - Exercício 5 da ListaL4 </h1>

 <?php
  //antes de podermos utilizar a chamada das duas funções, devemos indicar, ao PHP, o nome e a localização do arquivo externo (include) que contém o código das duas funções
  include "exercicio5.inc.php";
  
  
  //script principal - recebendo os dados do formulário
  $nota1 = $_POST['nota1'];
  $nota2 = $_POST['nota2'];

  //vamos invocar outra função que recebe as duas notas do aluno e devolve a sua média aritmética simples
  $media = calcularMedia($nota1, $nota2);

  //vamos invocar mais uma função que recebe o valor da média calculada antes e diz se o aluno foi aprovado ou não
  verificarAprovacao($media);  
 ?> 
</body>
</html>

