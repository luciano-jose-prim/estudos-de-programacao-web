<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Integração de banco de dados com PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
 <h1> Integrando Banco de Dados com PHP - exercício 3 </h1>
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

  if(isset($_POST['alteracao']))
   {
   require_once "./includes/alterar.inc.php";   
   }

   if(isset($_POST['exclusao']))
   {
   require_once "./includes/excluir.inc.php";   
   }

  require_once "./includes/desconectar.inc.php";  
 ?>
</body>
</html>