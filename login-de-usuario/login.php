<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Login de usuário </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
	<h1> Login de usuário utilizando sessões em PHP </h1>
	<!--formulário de login-->	
	<form action="login.php" method="post">
  <fieldset>
   <legend> Login </legend>
		 <label class="alinha"> Login: </label>
		 <input type="text" name="login"> <br> <br>
		
		 <label class="alinha"> Senha: </label>
		 <input type="password" name="senha">
		 <br> <br>
		
		 <button type="submit" name="logar"> Efetuar login </button>
  </fieldset>
	</form>
	
	<?php
	//acrescentar as includes de conexão com o banco de dados
		
	?>	
</body>
</html>