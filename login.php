<?php

// obtém os dados digitados
$email = $_POST["email"];
$senha = $_POST["senha"];

// acesso ao banco de dados
include "conecta_mysql.inc";
$resultado = mysql_query("SELECT * FROM usuarios WHERE email");
$linhas = mysql_num_rows($resultado);



?>