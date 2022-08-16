<?php
 //área de declaração dos módulos
 function validarIdade($idade)
  {
  $valorTestado = filter_var($idade, FILTER_VALIDATE_INT);

  if($valorTestado === false OR $valorTestado < 0)
   {
   exit("<p> ATENÇÃO: o valor da idade deve ser um inteiro maior ou igual a zero. Aplicação encerrada! </p>");
   }
  }

 //====================================================================

 function testarAptoVotar($idade)
  {
  if($idade >= 16)
   {
   echo "<p> O votante tem <span> $idade anos </span> e está apto a votar. </p>";   
   }
  else
   {
   echo "<p> O votante tem <span> $idade anos </span> e não está apto a votar. </p>";   
   }
  }
 ?>
<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Aplicações Web com PHP - modularização </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body>
 <h1> Funções de usuário em PHP - Exercício 2 da ListaL4 </h1>

 <?php 
  //script principal - recebendo os dados do formulário
  $idade = $_POST['idade'];

  //vamos invocar a primeira função (subrotina) que testa se a caixa idade contém um valor válido
  validarIdade($idade); 

  //vamos invocar outra função que testará a idade do eleitor e mostrará se o mesmo está apto (ou não) a votar
  testarAptoVotar($idade);
 ?> 
</body>
</html>

