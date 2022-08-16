<?php
 //área de declaração dos módulos
 function vAlidarNome($aluno)
  {
  //para testarmos qualquer caixa de texto no formulário, antes de mais nada, usamos a função pronta do PHP que remove qualquer espaço em branco digitado na caixa
  //retirando os espaços em branco do texto fornecido pelo usuário como nome do aluno
  $aluno = trim($aluno);

  //em seguida, usamos uma função que conta o número de caracteres restantes após a eliminação dos espaços em branco. Se o número de caracteres for zero, significa que o usuário ou não digitou nada na caixa ou só digitou espaços em branco

  $numeroDeCaracteres = strlen($aluno);
  if($numeroDeCaracteres === 0)
   {
   exit("<p> Caro usuário, o preenchimento do nome é obrigatório. Aplicação encerrada! Tente novamente! </p>");
   }
  }

 //====================================================================

 function calcularMedia($nota1, $nota2)
  {
  $mediaDoAluno = ($nota1 + $nota2) / 2;
  return $mediaDoAluno;
  }

 //===================================================================

 function verificarAprovacao($media)
  {
  if($media >= 6)
   {
   echo "<p> Média do aluno = <span> $media </span>. Aluno aprovado! </p>";   
   }
  else
   {
   echo "<p> Média do aluno = <span> $media </span>. Aluno não foi aprovado! </p>";   
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
 <h1> Funções de usuário em PHP - Exercício 1 da ListaL4 </h1>

 <?php 
  //script principal - recebendo os dados do formulário
  $aluno = $_POST['aluno'];
  $nota1 = $_POST['nota1'];
  $nota2 = $_POST['nota2'];

  //vamos invocar a primeira função (subrotina) que testa se a caixa nome contém um valor válido
  validarNome($aluno); 

  //vamos invocar outra função que recebe as duas notas do aluno e devolve a sua média aritmética simples
  $media = calcularMedia($nota1, $nota2);

  //vamos invocar mais uma função que recebe o valor da média calculada antes e diz se o aluno foi aprovado ou não
  verificarAprovacao($media);  
 ?> 
</body>
</html>

