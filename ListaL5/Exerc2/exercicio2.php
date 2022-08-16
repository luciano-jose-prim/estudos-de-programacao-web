<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Integração de banco de dados com PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
 <h1> Integrando Banco de Dados com PHP - exercício 2 </h1>
 <?php
  require_once "./includes/dados-conexao.inc.php";
  require_once "./includes/conectar.inc.php";
  require_once "./includes/criar-banco.inc.php";
  require_once "./includes/abrir-banco.inc.php";
  require_once "./includes/definir-charset.inc.php";
  require_once "./includes/criar-tabela.inc.php";

  if(isset($_POST['cadastro']))
   {
   require_once "./includes/cadastrar.inc.php";
   echo "<p> Dados do produto cadastrados com sucesso no banco de dados. </p>";
   }

  //agora, testamos se o botão das demais operações foi acionado no formulário
  if(isset($_POST['executar-operacao']))
   {
   //testar qual operação foi escolhida pelo usuário no formulário
   $operacao = $_POST['operacao'];

   if($operacao == "1")
    {
    require_once "./includes/listar-dados.inc.php";
    }

   elseif($operacao == "2")
    {
    require_once "./includes/mostrar-descricao.inc.php";
    }

   else
    {
    require_once "./includes/calcular-faturamento.inc.php";
    } 
   }
  require_once "./includes/desconectar.inc.php";  
 ?>
</body>
</html>