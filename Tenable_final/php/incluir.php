<html>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title> Cadastro Cliente</title>
<body>
<h3>Cadastrar Cliente</h3>
<?php
	include_once('conexao.php');
	// recuperando 

	$cpf = $_POST['cpf'];
	$rg = $_POST['rg'];	
	$nome = $_POST['nome'];	 
	$datanasc = $_POST['datanasc'];	
	$telefone = $_POST['telefone'];	
	$email = $_POST['email'];	
	$endereco = $_POST['endereco'];	
	$cidade = $_POST['cidade'];	

	// criando a linha de INSERT
	$sqlinsert =  "insert into cadastro (cpf, rg, nome, datanasc, telefone, email, endereco, cidade) values ( '$cpf', '$rg', '$nome','$datanasc','$telefone', '$email', '$endereco', '$cidade')";

	// executando instrução SQL
	$resultado = @mysqli_query($conexao, $sqlinsert);
	if (!$resultado) {
		echo '<input type="button" onclick="window.location='."'../index.html'".';" value="Voltar"><br><br>';
		die('<b>Query Inválida:</b>' . @mysqli_error($conexao)); 
	} else {
		
		 echo "<script>alert('cadastro incluído com sucesso');</script>";
			
		header("Location: ../peças.html");
		
		
	} 
	mysqli_close($conexao);
?>
<br><br>
<input type='button' onclick="window.location='../index.html';" value="Voltar">
</body>
</html>
