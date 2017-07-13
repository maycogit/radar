<!DOCTYPE html>
<html lang="<?php include "html_lang.inc"; ?>">
<head>
<meta charset="<?php include "charset_utf8.inc"; ?>">
<title><?php include "titulo_geral.inc"; ?></title>
</head>
<body>
	<h1>Login Radar</h1>
	<form method="POST" action="verifica_login.php">
		<p>E-mail <input type="text" name="email" /></p>
		<p>Senha <input type="password" name="senha" /></p>
		<p><input type="submit" value="Entrar" name="Entrar" /></p>
	</form>
</body>
</html>