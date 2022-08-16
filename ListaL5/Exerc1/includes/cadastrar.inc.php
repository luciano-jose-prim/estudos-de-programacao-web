<?php
 //aqui, nesta include, inserimos todos os caomandos do PHP para o rcebimento de dados do formulário e o envio destes dados para cadastro na base de dados
 $matricula = $_POST['matricula'];
 $aluno     = $_POST['aluno'];
 $media     = $_POST['media'];

 //neste momento, antes de o PHP enviar os dados do formulário para o cadastro no banco, devemos utilizar os comandos que irão varrer as variáveis e detectar se há a tentativa de invasão do banco de dados por meio do ataque conhecido como Injeção de SQL

 $matricula = $conexao->escape_string($matricula);
 $aluno     = $conexao->escape_string($aluno);
 $media     = $conexao->escape_string($media);

 //criamos a consulta em SQL que diz para o PHP enviar os dados para cadastro no servidor
 $sql = "INSERT $nomeDaTabela VALUES (
                '$matricula',
                '$aluno',
                $media)";

 $conexao->query($sql);








