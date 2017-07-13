<!DOCTYPE html>
<html lang="<?php include "html_lang.inc"; ?>">
<head>
<?php include "conecta_mysql.inc"; ?>
<meta charset="<?php include "charset_utf8.inc"; ?>">
<title><?php include "titulo_geral.inc"; ?></title>
</head>
<body>
	<h1>Radar</h1>
	<form method="POST" action="login.php">
		<p>E-mail <input type="text" name="email" /></p>
		<p>Senha <input type="senha" name="senha" /></p>
		<p><input type="submit" value="Entrar" name="Entrar" /></p>
	</form>
</body>
</html>