<?php
 $crm           = $_POST['crm'];
 $nome          = $_POST['nome-medico'];


 $crm           = $conexao->escape_string($crm);
 $nome          = $conexao->escape_string($nome);


 $sql = "INSERT $nomeDaTabela1 VALUES (
                '$crm',
                '$nome')";

 $conexao->query($sql);