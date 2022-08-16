<?php
 //área de declaração de cada função
 function calcularMediaSimples($nota1, $nota2, $nota3)
  {
  $media = ($nota1 + $nota2 + $nota3)/3;
  $mediaFormatada = number_format($media, 1, ",", ".");
  echo "<p> Resultado do processamento de notas do aluno: <br>
        Valor da nota1 = <span> $nota1 </span> <br>
        Valor da nota2 = <span> $nota2 </span> <br>
        Valor da nota3 = <span> $nota3 </span> <br>
        Valor da média aritmética simples = <span> $mediaFormatada </span> </p>";
  }

 //====================================================================

 function calcularMediaPonderada($nota1, $nota2, $nota3)
  {
  $media = ($nota1 * 5 + $nota2 * 3 + $nota3 * 2)/10;
  $mediaFormatada = number_format($media, 1, ",", ".");
  echo "<p> Resultado do processamento de notas do aluno: <br>
        Valor da nota1 = <span> $nota1 </span> <br>
        Valor da nota2 = <span> $nota2 </span> <br>
        Valor da nota3 = <span> $nota3 </span> <br>
        Valor da média aritmética ponderada = <span> $mediaFormatada </span> </p>";
  }