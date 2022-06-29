<!DOCTYPE html>

<html lang="pt-br"> 
   <head>
			<meta  charset="utf-8" />
			<title> Semana 01 - Exemplo 17 </title>
	</head>
<body>
<h3>Semana 01 - Exemplo 17 - Consultar e Excluir</h3>
<?php
	include_once('conexao.php');
	// recuperando 
	$id_produto = $_POST['id_produto'];

	// criando a linha do  DELETE
	$sqldelete =  "delete from  produto where id_produto = '$id_produto' ";
	
	// executando instru??o SQL
	$resultado = @mysqli_query($conexao, $sqldelete);
	if (!$resultado) {
		die('Query Inv?lida: ' . @mysqli_error($conexao));  
	} else {
		echo "Registro Exclu?do com Sucesso";
	} 
	mysqli_close($conexao);
?>
<br><br>
<input type='button' onclick="window.location='index.php';" value="Voltar">
</body>
</html>
