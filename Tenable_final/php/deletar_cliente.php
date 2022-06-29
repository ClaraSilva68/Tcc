<?php
require_once('conexao.php');
if(isset($_GET["id_cadastro"]))
{
	
  
	
  $id_cadastro=$_GET["id_cadastro"];

  $query="DELETE FROM cadastro WHERE id_cadastro=$id_cadastro";
  $sql=mysqli_query($conexao,$query);
  
  if($sql)
  {
	  header("Location:listarcliente.php");
  }
  else
  {
	//echo"<script type=\"text/javascript\">alert('FALHA AO DELETAR.ENTRE EM CONTATO COM O ADMINISTRADOR DO SITE');</script>";    
	
	
	echo'
		<div class="container-fluid">
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
			   <h3 class="alert-heading">Mensagem ao usuário:</h3>
			   <hr>
			   <p> Falha ao Deletar Cliente. Favor entrar em contato com o administrador  !!! <p>
			    
			   
			  <button type="button" class="close" data-dismiss="alert" aria-label="close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
	</div>   
		
		';
	exit;
  }
}



?>