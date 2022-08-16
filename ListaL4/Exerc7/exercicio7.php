<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Aplicações Web com PHP - modularização e include </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body>
 <h1> Funções de usuário e includes em PHP - Exercício 7 da ListaL4 </h1>

 <?php 
  //inserir o código da include
  require_once "exercicio7.inc.php";

  $temperatura = $_POST['temperatura'];

  validarTemperatura($temperatura); 

  validarEscalaTermométrica();

  $escala = $_POST['escala'];

  if($escala == "deCparaF")
   {
   converterDeCparaF($temperatura);
   }
  else
   {
   converterDeFparaC($temperatura);
   } 
 ?> 
</body>
</html>

