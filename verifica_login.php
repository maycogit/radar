<?php

// obt�m os dados digitados
$email = $_POST["email"];
$senha = $_POST["senha"];

// acesso ao banco de dados
include "conecta_mysql.inc";
$resultado = mysql_query("SELECT * FROM usuarios WHERE email='$email'");
$linhas = mysql_num_rows($resultado);
if($linhas ==0) {
	echo "<html><body>";
	echo "<p>Usu�rio n�o encontrado!</p>";
	echo "<p><a href=\"index.html\">Voltar</a></p>";
	echo "</html></body>";
} else {
	if($senha != mysql_result($resultado, 0, "senha")) { // confere senha
		echo "<html><body>";
		echo "<p>Senha incorreta!</p>";
		echo "<p><a href=\"index.html\">Voltar</a></p>";
		echo "</html></body>";
	} else { // usu�rio e senha corretos, criando cookies
		setcookie("email_usuario", $email);
		setcookie("senha_usuario", $senha);
		// direciona para a p�gina inicial dos usu�rios cadastrados
		header("Location: pagina_inicial.php");
	}
}
mysql_close($conexao);
?>