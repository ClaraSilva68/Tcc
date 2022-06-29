<html>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title> Exclusao produto </title>
<body>
<h3>- Exclusão</h3>
<form name="produto" action="excluir.php" method="post">
<b>Código:</b> <input type="number" name="id_produto" required="required"><br><br>
<input type="submit" value="Ok">
<form name="produto" action="excluir.php" method="post">
	<input type='hidden' name='codigo' value="<?php echo $dados['codigo']; ?>">
	<input type='submit' value='Apagar'>
	<input type='button' onclick="window.location='exclusao.php';" value="Voltar">
</form>

</form>
</body>
</html>
