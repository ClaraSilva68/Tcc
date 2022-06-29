<html>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title> Cadastro de produto </title>
<body>
<h3>Cadastrar Produto</h3>
<?php
	include_once('conexao.php');
	// recuperando 

	$nomeProduto = $_POST['nomeProduto'];
	$valor = $_POST['valor'];	
	$tamanho= $_POST['tamanho'];	 
	$cor = $_POST['cor'];	
	$foto = $_POST['foto'];
	

	// criando a linha de INSERT
	$sqlinsert =  "insert into produto (nomeProduto, valor, tamanho, cor,foto) values ( '$nomeProduto', '$valor', '$tamanho', '$cor', null)";

	// executando instrução SQL
	$resultado = @mysqli_query($conexao, $sqlinsert);
	if (!$resultado) {
		echo '<input type="button" onclick="window.location='."'../index.html'".';" value="Voltar"><br><br>';
		die('<b>Query Inválida:</b>' . @mysqli_error($conexao)); 
	} else {
		echo "Registro Cadastrado com Sucesso";
	} 
	mysqli_close($conexao);
?>
<br><br>
<input type='button' onclick="window.location='../index.html';" value="Voltar">
</body>
</html>
