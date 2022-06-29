<?php
	$host = "localhost"; 			
	$user = "root"; 
	$pass = ""; 
	$banco = "tenable";
		
	$conexao = @mysqli_connect($host, $user, $pass, $banco ) 
	or die ("Problemas com a conexão do Banco de Dados");
	$conexao -> set_charset("utf8");
?>
