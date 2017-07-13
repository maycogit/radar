<?php

// obtém os dados digitados
$email = $_POST["email"];
$senha = $_POST["senha"];

// acesso ao banco de dados
include "conecta_mysql.inc";
$resultado = mysql_query("SELECT * FROM usuarios WHERE email='$email'");
$linhas = mysql_num_rows($resultado);
if($linhas ==0) {
	include "usuario_nao_encontrado.inc";
} else {
	if($senha != mysql_result($resultado, 0, "senha")) { // confere senha
		include "senha_incorreta.inc";
	} else { // usuário e senha corretos, criando cookies
		setcookie("email_usuario", $email);
		setcookie("senha_usuario", $senha);
		// direciona para a página inicial dos usuários cadastrados
		header("Location: radar.php");
	}
}
mysql_close($conexao);
?>