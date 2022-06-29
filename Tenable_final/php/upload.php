<?php
	include_once('conexaop.php');
				
	if(strtolower(substr($_FILES['foto']['name'], -3)=="png")or
	strtolower(substr($_FILES['foto']['name'], -3)=="jpg"))
	{
				$id_produto = $_POST['id_produto'];
				$nomeProduto = $_POST['nomeProduto'];
				$valor = $_POST['valor'];	
				$tamanho = $_POST['tamanho'];	
				$cor = $_POST['cor'];	
				 
		
		
		
		$dir = '../img/'; 
		$tmpName = $_FILES['foto']['tmp_name']; 
		$name = $_FILES['foto']['name']; 
		// move_uploaded_file
		if( move_uploaded_file( $tmpName, $dir . $name ) ) { 	
				$mysql = new BancodeDados();
				$mysql->conecta();
				$sqlstring = "insert into produto (id_produto, nomeProduto,valor,tamanho,cor, foto) values ('$id_produto','$nomeProduto','$valor','$tamanho','$cor', '$name')";
				mysqli_query($mysql->con, $sqlstring);
					
				header('Location: cadastroproduto.php'); 		
		} else {		
			echo "Erro ao gravar o foto";	
		}
	}else{
			echo "Não é documento png e nem jpg";
	}
?>


