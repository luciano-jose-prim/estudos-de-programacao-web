<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Integração de banco de dados com PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
 <h1> Integrando Banco de Dados com PHP - exercício 1 </h1>
 <?php
  //aqui, já podemos chamar as includes com  os códigos de conexão do PHP ao banco de dados
  require_once "./includes/dados-conexao.inc.php";
  require_once "./includes/conectar.inc.php";
  require_once "./includes/criar-banco.inc.php";
  require_once "./includes/abrir-banco.inc.php";
  require_once "./includes/definir-charset.inc.php";
  require_once "./includes/criar-tabela.inc.php";

  //agora, testamos se o botão de cadastro foi pressionado no formulário
  if(isset($_POST['cadastro']))
   {
   //o botão de cadastro foi acionado no formulário - chamamos a include com os comandos de cadastro dos dados do aluno
   require_once "./includes/cadastrar.inc.php";
   echo "<p> Dados cadastrados com sucesso no banco de dados. </p>";
   }

  //agora, testamos se o botão de listagem de dados foi acionado no formulário
  if(isset($_POST['listar']))
   {
   //o botão de listagem de dados oriundos do banco foi acionado no formulário - chamamos a include que apresenta os comandos ao MySQL necessários à execução desta operação
   require_once "./includes/listar-dados.inc.php";   
   }

  //agora, testamos se o usuário está solicitando a contagem de alunos aprovados em PRW
  if(isset($_POST['contar']))
   {
   //o botão de contagem de número de alunos aprovados foi acionado no formulário - chamamos a include que apresenta os comandos ao MySQL necessários à execução desta operação
   require_once "./includes/contar-aprovados.inc.php";   
   }

   require_once "./includes/desconectar.inc.php";  
 ?>
</body>
</html>