<?php
 //esta etapa é opcional. Se o banco ainda não foi criado no servidor, usamos os comandos abaixo

 $sql = "CREATE DATABASE IF NOT EXISTS $nomeDoBanco";

 $conexao->query($sql) OR exit($conexao->error);