<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Aplicações Web com PHP - vetores </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body>
 <h1> Vetores em PHP - Exercício 8 da ListaL2 </h1>

 <?php
  $precos = ["Analgésico"   => 10.12,
             "Ansiolítico"  => 35.71,
             "Antiácido"    => 8.61];


  $comprouMedicamento = isset($_POST["medicamentos-comprados"]);
  
  if($comprouMedicamento == false)
   {
   exit("<p> Caro cliente, você optou por não adquirir nenhum medicameneto de nossa farmácia virtual. O valor final de sua compra é zero. Volte sempre! </p>");
   }

  $medicamentos = $_POST["medicamentos-comprados"]; //$medicamentos é um vetor

  $valorCompra = 0;
  foreach($medicamentos as $nomeMedicamento)
   {
   $valorCompra = $valorCompra + $precos[$nomeMedicamento];
   }

  //definindo o desconto como constante do PHP
  define("TAXA_DESCONTO", 5/100);
  $desconto = 0;
  $tem60AnosOuMais = isset($_POST["idade"]);

  //testar se o checkbox relacionado à faixa etária do cliente foi marcado
  if($tem60AnosOuMais)
   {
   $desconto = $valorCompra * TAXA_DESCONTO;   
   }

  //efetuando o cálculo do valor final da compra
  $valorFinalCompra = $valorCompra - $desconto;

  $valorFinalCompraFormatado = number_format($valorFinalCompra, 2, ",", ".");  

  echo "<p> Caro cliente, o valor final de sua compra em nossa farmácia on-line é de <span> R$$valorFinalCompraFormatado </span>. Volte sempre! </p>";
 ?> 
</body>
</html>