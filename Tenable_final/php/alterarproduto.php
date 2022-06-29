<!DOCTYPE html>

<html lang="pt-br"> 
   <head>
			<meta  charset="utf-8" />
			<title> Alterar  produto </title>
	</head>
 
<body>
<h3>produto</h3>
<?php
	include_once('conexao.php');
	// recuperando 
	$id_produto = $_POST['id_produto'];
	$nomeProduto = $_POST['nomeProduto'];
	$valor = $_POST['valor'];	
	$data = $_POST['data'];	
	$tamanho= $_POST['tamanho'];	
	$cor = $_POST['cor'];	
	$foto = $_POST['foto'];	

	// criando a linha do  UPDATE
	$sqlupdate =  "update produto set id_produto='$id_produto', nomeProduto='$nomeProduto', valor='$valor',data='$data',tamanho='$tamanho',cor='$cor', foto='$foto' where id_produto=$id_produto";
											

	// executando instrução SQL
	$resultado = @mysqli_query($conexao, $sqlupdate);
	if (!$resultado) {
		die('<b>Query Inválida:<b>' . @mysqli_error($conexao));  
	} else {
		echo "Registro Alterado com Sucesso";
	} 
	mysqli_close($conexao);
?>
<br /><br />
	<input type='button' onclick="window.location='../index.html';" value="Voltar">
</body>
</html>
