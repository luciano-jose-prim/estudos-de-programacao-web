<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Sessões em PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
 <h1> Utilização de variáveis de sessão em PHP </h1>

 <form action="pagina1.php" method="post">
  <fieldset>
   <legend> Dados das variáveis de sessão </legend>

   <label class="alinha"> Nome do aluno: </label>
   <input type="text" name="aluno" autofocus placeholder="Forneça o nome do aluno..."> <br>

   <label class="alinha"> Nota do aluno em PRW: </label>
   <input type="number" name="nota" min="0" max="10" step="0.1"> <br>
   
   <button type="submit" name="criar-sessao"> Criar variáveis de sessão </button>
  </fieldset>
 </form>
 
 <?php
  //quando misturamos formulário html e processamento de dados deste formulário, por meio do PHP, em um único arquivo, devemos testar se o botão submit foi utilizado pelo cliente da aplicação. Somente após o disparo do submit, é que o nosso código em PHP, que recebe os dados do formulário, pode ser executado
  if(isset($_POST['criar-sessao']))
   {
   $aluno = $_POST['aluno'];
   $nota  = $_POST['nota'];

   echo "<p> Valores das variáveis antes da criptografia: <br>
         Aluno = <span> $aluno </span> <br>
         Nota  = <span> $nota </span> </p>";


   //mostrando como criptografar dados por meio da linguagem PHP, usando um algoritmo de criptografia forte disponível na linguagem.
   $alunoCriptografado = hash("sha512", $aluno);
   $notaCriptografada = hash("sha512", $nota); 

   echo "<p> Valores das variáveis já criptografadas: <br>
   Aluno = <span> $alunoCriptografado </span> <br>
   Nota  = <span> $notaCriptografada </span> </p>";

   //antes de prosseguir, vamos abrir ou iniciar a sessão
   session_start();

   //criando as variáveis de sessão
   $_SESSION['aluno'] = $aluno;
   $_SESSION['nota']  = $nota;
   $_SESSION['data']  = date("d/m/Y");

   //ir para a página 2, recuperar as variáveis de sessão e mostrá-las ao usuário
   echo "<a title='Trabalhando com variáveis de sessão' href='pagina2.php'> Mostrar dados da sessão na próxima página </a>";
   }
 ?>
</body> 
</html> 