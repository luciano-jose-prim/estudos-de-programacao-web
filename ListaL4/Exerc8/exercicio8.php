<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Aplicações Web com PHP - modularização e include </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body>
 <h1> Funções de usuário e includes em PHP - Exercício 8 da ListaL4 </h1>

 <?php 
  //inserir o código da include
  require_once "exercicio8.inc.php";

  //receber os dados do formulário
  $nota1 = $_POST['nota1'];
  $nota2 = $_POST['nota2'];
  $nota3 = $_POST['nota3'];

  //descobrir o tipo de média a ser calculada, conforme o botão de rádio selecionado pelo usuário
  $tipoDeMedia = $_POST['media'];

  //testar o tipo de média escolhido
  if($tipoDeMedia == "Aritmética Simples")
   {
   //chamar a função que calcula a média simples. Notar que passamos, para dentro da função, as três notas do aluno vindas do formulário. Estes são os argumentos corretos. Sem eles, a função não pode fazer seu trabalho
   calcularMediaSimples($nota1, $nota2, $nota3);
   }

  else 
   {
   calcularMediaPonderada($nota1, $nota2, $nota3);
   }
 ?> 
</body>
</html>

