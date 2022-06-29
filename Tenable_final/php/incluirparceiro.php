<html>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title> Cadastro de parceiro </title>
<body>
<h3>Cadastrar Parceiro</h3>
<?php
	include_once('conexao.php');
	// recuperando 

	$cnpj = $_POST['cnpj'];
	$nomeFantasia = $_POST['nomeFantasia'];	
	$razaoSocial= $_POST['razaoSocial'];	 
	$descricao = $_POST['descricao'];	
	$telefone = $_POST['telefone'];	
	$email = $_POST['email'];	
	$endereco = $_POST['endereco'];	
	$cidade = $_POST['cidade'];	

	// criando a linha de INSERT
	$sqlinsert =  "insert into parceiro (cnpj, nomeFantasia, razaoSocial, descricao, telefone, email, endereco, cidade) values ( '$cnpj', '$nomeFantasia', '$razaoSocial','$descricao','$telefone', '$email', '$endereco', '$cidade')";

	// executando instrução SQL
	$resultado = @mysqli_query($conexao, $sqlinsert);
	if (!$resultado) {
		echo '<input type="button" onclick="window.location='."'listarparceiro.php'".';" value="Voltar"><br><br>';
		die('<b>Query Inválida:</b>' . @mysqli_error($conexao)); 
	} else {
		echo "Registro Cadastrado com Sucesso";
	} 
	mysqli_close($conexao);
?>
<br><br>
<input type='button' onclick="window.location='listarparceiro.php';" value="Voltar">
</body>
</html>
