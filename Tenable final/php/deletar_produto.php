<?php
require_once('conexao.php');
if(isset($_GET["id_produto"]))
{
	
  
	
  $id_produto=$_GET["id_produto"];
  //$query="DELETE FROM tb_produtos WHERE id_produto={$_GET['id_produto']}";
  $query="DELETE FROM produto WHERE id_produto=$id_produto";
  $sql=mysqli_query($conexao,$query);
  
  if($sql)
  {
	  header("Location:listarproduto.php");
  }
  else
  {
	echo"<script type=\"text/javascript\">alert('FALHA AO DELETAR.ENTRE EM produto COM O ADMINISTRADOR DO SITE');</script>";    
	exit;
  }
}



?>