<?php
 //receber o nome do médico a ser pesquisado
 $nomeMedico = $_POST['pesquisa-nome-medico'];
 $nomeMedico = trim($nomeMedico);
 $nomeMedico = $conexao->escape_string($nomeMedico);

 //outra forma, com um único comando
 $nomeMedico = trim($conexao->escape_string($_POST['pesquisa-nome-medico']));

 //agora, criamos uma consulta na tabela medicos para verificar qual o CRM está associado ao nome do médico pesquisado, se este médico estiver cadastrado 
 $sql = "SELECT crm FROM $nomeDaTabela1 WHERE nome_medico = '$nomeMedico'";

 $resultado = $conexao->query($sql);

 //testar se o banco de dados encontrou o nome do médico associado ao CRM da busca - abaixo, testamos a condição de erro
 if($conexao->affected_rows <= 0)
  {
  exit("<p> O nome do médico pesquisado <span> $nomeMedico </span> não foi encontrado no banco de dados. Aplicação encerrada! Tente novamente! </p>");
  }
 
 //recuperando o crm do médico pesquisado
 $registro = $resultado->fetch_array();

 $crmPesquisado = $registro[0];
 $crmPesquisado = htmlentities($crmPesquisado, ENT_QUOTES, "UTF-8");

 //na segunda etapa da consulta, pedimos ao banco de dados que retorne ao nosso código em PHP a contagem do número de pacientes atendidos pelo médico com o crm acima descoberto
 $sql = "SELECT COUNT(*) FROM $nomeDaTabela2 WHERE crm_medico = '$crmPesquisado'";
 
 $resultado = $conexao->query($sql);
 $registro  = $resultado->fetch_array();

 $numeroPacientesAtendidos = $registro[0];
 $numeroPacientesAtendidos = htmlentities($numeroPacientesAtendidos, ENT_QUOTES, "UTF-8");

 echo "<p> O número de pacientes sob os cuidados do médico <span> $nomeMedico </span> é igual a <span> $numeroPacientesAtendidos </span> </p>";