<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Aplicações Web com PHP - vetores </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body>
 <h1> Vetores em PHP - Exercício 4 da ListaL2 </h1>

 <?php
  //inicialmente, criamos um vetor armazenando o preço de cada mercadoria disponível no carrinho de compras, usando o nome da mercadoria como índice associativo
  $precos = array("Impressora" => 350,
                  "Celular" => 500,
                  "Notebook" => 1700.12);


  //antes de prosseguirmos, devemos testar se, pelo menos, um produto foi comprado pelo cliente (isto é, se, pelo menos, um checkbox foi marcado no formulário)
  $comprouProduto = isset($_POST["produtos-comprados"]);
  
  if($comprouProduto == false)
   {
   exit("<p> Caro cliente, você optou por não adquirir nenhum produto de nossa loja virtual. O valor final de sua compra é zero. Volte sempre! </p>");
   }
  
  //recebemos do navegador, os elementos checkbox marcados pelo usuário
  $produtos = $_POST["produtos-comprados"]; //$produtos é um vetor

  //o que faremos, a seguir, é inicializar uma variável somadora, e pedir para o PHP percorrer cada elemento do vetor $precos, usando o contéudo deste vetor para acessar o respectivo preço no vetor de $produtos e ir acumulando estes preços na variável somadora

  $valorFinalCompra = 0;
  foreach($produtos as $nomeProduto)
   {
   $valorFinalCompra = $valorFinalCompra + $precos[$nomeProduto];
   }
  
  //vamos fazer o PHP mostrar a relação de produtos adquiridos
  echo "<table>
         <caption> Relação de produtos adquiridos </caption>
         <tr>
          <th> Nome do produto </th>
         </tr>";

  foreach($produtos as $nomeProduto)
   {
   echo "<tr>
          <td> $nomeProduto </td>
         </tr>";  
   }

  echo "</table>"; 
  
  $valorFinalCompraFormatado = number_format($valorFinalCompra, 2, ",", ".");

  echo "<p> Caro cliente, o valor final de sua compra em nossa loja on-line é de <span> R$$valorFinalCompraFormatado </span>. Volte sempre! </p>"; 
 ?> 
</body>
</html>