<!DOCTYPE html>

<html lang="pt-br"> 
   <head>
			<meta  charset="utf-8" />
			<title> Mostrar produto </title>
	</head>
 <body>
<?php
	include_once('conexao.php');
	// recuperando 
	$id_produto = $_POST['id_produto'];

	// criando a linha do  SELECT
	$sqlconsulta =  "select * from produto where id_produto = $id_produto";
	
	// executando instrução SQL
	$resultado = @mysqli_query($conexao, $sqlconsulta);
	if (!$resultado) {
		echo '<input type="button" onclick="window.location='."'../index.php'".';" value="Voltar"><br><br>';
		die('<b>Query Inválida:</b>' . @mysqli_error($conexao)); 
	} else {
		$num = @mysqli_num_rows($resultado);
		if ($num==0){
		echo "<b>Código: </b>não localizado !!!!<br><br>";
		echo '<input type="button" onclick="window.location='."'../index.php'".';" value="Voltar"><br><br>';
		exit;		
		}else{
			$dados=mysqli_fetch_array($resultado);
		}
	} 
	mysqli_close($conexao);
?>
<b>Código do produto:</b> <input type="number"  value="<?php echo $dados['id_produto']; ?>" readonly required="required"><br><br>
<b>Nome do produto:</b> <input type="text"  maxlength='80' style="width:550px" value="<?php echo $dados['nomeProduto']; ?>" readonly ><br><br>
<b>Valor: R$ </b><input type="number" step="0.01" name="valor" value="<?php echo $dados['valor']; ?>" readonly > <br><br>
<b>Tamanho:  <</b> <input type="text"  maxlength='20' style="width:550px" value="<?php echo $dados['tamanho']; ?>" readonly ><br><br>
<b>Cor:  </b> <input type="text"  maxlength='20' style="width:550px" value="<?php echo $dados['cor']; ?>" readonly ><br><br>
<b>Foto: </b> <input type="text"  maxlength='80' style="width:550px" value="<?php echo $dados['foto']; ?>" readonly ><br><br>
<input type='button' onclick="window.location='../index.php';" value="Voltar">
</body>
</html>
