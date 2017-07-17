<?php
// início das funções

function zera_cookies() {
	setcookie("email_usuario");
	setcookie("senha_usuario");
	echo "Você não efetuou o LOGIN!";
}

// início do programa principal

if( isset($_COOKIE["email_usuario"]) )
	$email_usuario = $_COOKIE["email_usuario"];

if( isset($_COOKIE["senha_usuario"]) )
	$senha_usuario = $_COOKIE["senha_usuario"];


if(  !( empty($email_usuario) && empty($senha_usuario) )  ) {

	include "conecta_mysql.inc";
	$resultado = mysql_query("SELECT * FROM usuarios WHERE email='$email_usuario'");
	if( mysql_num_rows($resultado) == 1 ) {
		if( $senha_usuario != mysql_result($resultado,0,"senha") ) {
			zera_cookies();
			exit;
		}
	} else {
		zera_cookies();
		exit;
	}
} else {
	echo "Você não efetuou Login!";
	echo '<p><a href="login.php">Efetuar Login</a></p>'; // usar aqui "pagina_login.inc"
	exit;
}
mysql_close($conexao);
?>