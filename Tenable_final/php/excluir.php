<?php
require_once('conexao.php');

$query_select_produto="SELECT *from produto";
$sql_select_produto=mysqli_query($conexao,$query_select_produto);




if(isset($_POST["id_produto"]))
{


	// recuperando 
	$id_produto = $_POST["id_produto"];

	// criando a linha do  DELETE
	 
	 $sql=  "SET foreign_key_checks = 0; delete from produto WHERE id_produto=$id_produto ";
	 $sql=mysqli_query($conexao,$query_select_produto);
	// executando instrução SQL
	
	 if($sql)
  {
	  header("Location:listarproduto.php");
  }
  else
  {
	echo"<script type=\"text/javascript\">alert('FALHA AO DELETAR.ENTRE EM CONTATO COM O ADMINISTRADOR DO SITE');</script>";    
	exit;
  }
}



?>