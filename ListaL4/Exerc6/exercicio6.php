<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Aplicações Web com PHP - modularização e includes </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body>
 <h1> Funções de usuário e includes em PHP - Exercício 6 da ListaL4 </h1>

 <?php
  //inserindo o arquivo externo que contém as funções a serem utilizadas aqui
  require_once "exercicio6.inc.php";

  $idade = $_POST['idade'];

  validarIdade($idade); 

  testarAptoVotar($idade);
 ?> 
</body>
</html>

