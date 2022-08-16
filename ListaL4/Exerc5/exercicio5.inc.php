<?php
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
