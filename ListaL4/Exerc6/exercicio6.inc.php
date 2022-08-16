<?php
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
