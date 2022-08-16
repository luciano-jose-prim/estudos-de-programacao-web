<?php
 function calcularComissaoVendedor($valorVenda, $percentualComissao)
  {
  $comissao = $valorVenda * $percentualComissao/100;
  return $comissao;
  }

 //==================================================================

 function calcularDescontoCliente($valorVenda)
  {
  define("TAXA_DESCONTO", 5/100);
  $pagouComCartaoFidelidade = isset($_POST['modalidade-pagamento']);

  $desconto = 0;

  if($pagouComCartaoFidelidade)
   {
   $desconto = $valorVenda * TAXA_DESCONTO;
   }

  return $desconto;
  }

 //=================================================================

 function calcularValorFinalVenda($valorVenda, $descontoDoCliente)
  {
  $valorFinal = $valorVenda - $descontoDoCliente; 
  return $valorFinal;
  }

 //=================================================================

 function mostrarResultadosVenda($valorVenda, $percentualComissao, $valorDaComissao, $descontoDoCliente, $valorFinalVenda)
  {
  $valorVendaFormatado = number_format($valorVenda, 2, ",", ".");
  $percentualComissaoFormatado = number_format($percentualComissao, 1, ",", ".");
  $valorDaComissaoFormatado = number_format($valorDaComissao, 2, ",", ".");
  $descontoDoClienteFormatado = number_format($descontoDoCliente, 2, ",", ".");
  $valorFinalVendaFormatado = number_format($valorFinalVenda, 2, ",", ".");

  echo "<p> Caro usuário, após o processamento da venda efetuada, temos os seguintes resultados: <br>
  Valor inicial da venda = <span> R$$valorVendaFormatado </span> <br>
  Percentual de comissão do vendedor = <span> $percentualComissaoFormatado% </span> <br>
  Valor da comissão do vendedor = <span> R$$valorDaComissaoFormatado </span> <br>
  Valor do desconto dado ao cliente = <span> $descontoDoClienteFormatado </span> <br>
  Valor final da venda ao cliente = <span> R$$valorFinalVendaFormatado </span> </p>";
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
 <h1> Funções de usuário em PHP - Exercício 4 da ListaL4 </h1>

 <?php 
  //script principal, definindo a invocação de cada subrotina
  $valorVenda = $_POST['valor-venda'];
  $percentualComissao = $_POST['percentual-comissao'];
  
  $valorDaComissao = calcularComissaoVendedor($valorVenda, $percentualComissao);

  $descontoDoCliente = calcularDescontoCliente($valorVenda);

  $valorFinalVenda = calcularValorFinalVenda($valorVenda, $descontoDoCliente);

  mostrarResultadosVenda($valorVenda, $percentualComissao, $valorDaComissao, $descontoDoCliente, $valorFinalVenda);  
 ?> 
</body>
</html>

