<?php
	include_once('conexao1.php');
	$id = $_GET['id_produto'];
	$mysql = new BancodeDados();
	$mysql->conecta();
	
	// recuperando o nome do arquivo 
	$sqlstring = "select * from produto where id_produto=$id_produto";
	$query = @mysqli_query($mysql->con, $sqlstring);
	$dados = @mysqli_fetch_array($query);

	// excluindo o registro
	$sqlstring = "delete from produto where id_produto=$id_produto";
	@mysqli_query($mysql->con, $sqlstring);
	
	unlink ('../img/'.$dados['foto']);
	header('Location: ../index.php'); 
?>
