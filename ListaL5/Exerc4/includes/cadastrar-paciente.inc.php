<?php
 $crm           = $_POST['crm-atendimento'];
 $nome          = $_POST['nome-paciente'];
 $data          = $_POST['data-internacao'];


 $crm           = $conexao->escape_string($crm);
 $nome          = $conexao->escape_string($nome);
 $data          = $conexao->escape_string($data);


 $sql = "INSERT $nomeDaTabela2 VALUES (
                 null,
                '$nome',
                '$data',
                '$crm')";

 $conexao->query($sql);