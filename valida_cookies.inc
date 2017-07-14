<?php

if( isset($_COOKIE["email_usuario"]) )
	$email_usuario = $_COOKIE["email_usuario"];

if( isset($_COOKIE["senha_usuario"]) )
	$senha_usuario = $_COOKIE["senha_usuario"];


if(  !( empty($email_usuario) && empty($senha_usuario) )  ) {

	include "conecta_mysql.inc";
	$resultado = mysql_query("");
}
?>