<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Integração de banco de dados com PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
 <h1> Integrando Banco de Dados com PHP - exercício 4 </h1>
 <?php
  require_once "./includes/dados-conexao.inc.php";
  require_once "./includes/conectar.inc.php";
  require_once "./includes/criar-banco.inc.php";
  require_once "./includes/abrir-banco.inc.php";
  require_once "./includes/definir-charset.inc.php";
  require_once "./includes/criar-tabela1.inc.php";
  require_once "./includes/criar-tabela2.inc.php";

  if(isset($_POST['cadastro-medico']))
   {
   require_once "./includes/cadastrar-medico.inc.php";
   echo "<p> Dados do médico cadastrados com sucesso no banco de dados. </p>";
   }

  if(isset($_POST['cadastro-paciente']))
   {
   require_once "./includes/cadastrar-paciente.inc.php";   
   echo "<p> Dados do paciente cadastrados com sucesso no banco de dados. </p>";
   }

   if(isset($_POST['pesquisa-medico']))
   {
   require_once "./includes/pesquisar-medico.inc.php";   
   }

  require_once "./includes/desconectar.inc.php";  
 ?>
</body>
</html>