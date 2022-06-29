<?php
require_once('conexao.php');


if(isset($_GET["id_cadastro"])) 
{
	$id_cadastro=$_GET["id_cadastro"];
}
elseif(isset($_POST["id_cadastro"]))
{
	$id_cadastro=$_POST["id_cadastro"];
}	
else
echo "ERRO";



	$query_select_cadastro_id="SELECT * FROM cadastro WHERE id_cadastro=$id_cadastro";
	$sql_select_cadastro_id=mysqli_query($conexao,$query_select_cadastro_id);

	if($sql_select_cadastro_id == false)
	{
		
		echo "FALHA AO CONSULTAR CONTATO FAVOR ENTRAR EM CONTATO COM O ADMINISTRADOR";
		exit;
	}
	
	while($array_select_cadastro_id=mysqli_fetch_array($sql_select_cadastro_id))
	{
		$id_cadastro=$array_select_cadastro_id["id_cadastro"];
		$cpf=$array_select_cadastro_id["cpf"];
		$rg=$array_select_cadastro_id["rg"];
		$nome=$array_select_cadastro_id["nome"];
		$datanasc=$array_select_cadastro_id["datanasc"];
		$telefone=$array_select_cadastro_id["telefone"];
		$email=$array_select_cadastro_id["email"];
		$endereco=$array_select_cadastro_id["endereco"];
		$cidade=$array_select_cadastro_id["cidade"];	
	}
	if(isset($_POST['submit_editar']))
	{
	     $id_cadastro=$_POST['id_cadastro'];
	     $cpf=$_POST['cpf'];
	     $rg=$_POST['rg'];
		 $nome=$_POST['nome'];
		 $datanasc=$_POST['datanasc'];
		 $telefone=$_POST['telefone'];
	     $email=$_POST['email'];	     
		 $endereco=$_POST['endereco'];
		 $cidade=$_POST['cidade'];		 
		 
		 $query_update="UPDATE cadastro SET cpf='$cpf',rg='$rg',nome='$nome', datanasc= '$datanasc', telefone='$telefone',email='$email',endereco='$endereco', cidade='$cidade'  WHERE id_cadastro=$id_cadastro";
		 
		 $sql_update=mysqli_query($conexao,$query_update);
		 if($sql_update == true)
		 {
		   echo"<script type=\"text/javascript\">alert('DADOS EDITADOS COM SUCESSO');</script>";
		    header("Location:cadastrocliente.php");
 
		 }
		 else
         echo"<script type=\"text/javascript\">alert('FALHA AO EDITAR.ENTRE EM CONTATO COM O ADMINISTRADOR DO SITE');</script>";	 		 		 
	}
if(isset($_POST['submit_deletar']))
	{
	
  
	
  $id_cadastro=$_GET["id_cadastro"];
  //$query="DELETE FROM cadastro WHERE id_cadastro={$_GET['id_cadastro']}";
  $query="DELETE FROM cadastro WHERE id_cadastro=$id_cadastro";
  $sql=mysqli_query($conexao,$query);
  
  if($sql)
  {
	   header("Location:cadastrocliente.php");
  }
  else
  {
	echo"<script type=\"text/javascript\">alert('FALHA AO DELETAR.ENTRE EM CONTATO COM O ADMINISTRADOR DO SITE');</script>";    
	exit;
  }
}

	    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="utf-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <link href="css/bootstrap.min.css" rel="stylesheet">
 <title>Editar Cliente</title>
 <style>
     .listarbig 
	   {
	
		height:280px;
		overflow: auto;
	   }

 </style>
</head>
<body style="margin-top: 100px">
<!-- usando o container fluid -->
<div class="container-fluid">
	<div class="row">
		<div class="col-12">
		    <nav class="navbar fixed-top navbar-light bg-dark navbar-expand-lg"> 
<!--<nav class="navbar fixed-top navbar-primary navbar-expand-lg" style="background-color:#8B0000-->
				<a href="../index.php" class="navbar-brand">
					<img src="../fundo.jpg"  width="160" height="60" alt="">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav1" >
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-between" id="nav1">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a href="cadastrocliente.php" class="btn btn-dark">Cliente</a>
						</li>
						<li class="nav-item">
							<a href="carros.php" class="btn btn-dark">Carros</a>
						</li>
						<li class="nav-item">
							<a href="#" class="btn btn-dark">Usuário</a>
						</li>
																								
					</ul>
					<form class="form-inline" action="">
						<input class="from-control" type="text" placeholder="Pesquisar">
						&nbsp;&nbsp;
						<button class="btn btn-outline-primary" type="submit"> Vai buscar </button>
					</form>
				</div>
			</nav>
		</div>					
	</div>
	<div class="row">
		<div class="col-12">
<h1>EDITAR CLIENTE
   
</h1>
 <a href="cadastrocliente.php" class="btn btn-dark btn-block">Listar Colientes</a> <br />	<br />	


<form id="form_agenda" name="form_agenda" method="post" action="">
<div class="listarbig"> 
  <p>
    <input class="form-control" type="hidden" name="id_cadastro" value="<?php echo $id_cadastro;?>"/>
    <label for="cpf">CPF</label>
    <input class="form-control" type="text" name="cpf" id="cpf" value="<?php echo $cpf;?>"/>
    <br />
	<label for="rg">RG:</label>
  	<input class="form-control" type="text" name="rg" id="rg" value="<?php echo $rg;?>"/>
    <br />
    <label for="nome">Nome:</label>
    <input class="form-control" type="text" name="nome" id="nome" value="<?php echo $nome;?>"/>
    <br />
	<label for="datanasc">Data Nacimento:</label>
    <input class="form-control" type="date" name="datanasc" id="datanasc" value="<?php echo $datanasc;?>"/>
    <br />
	<label for="telefone">Telefone:</label>
    <input class="form-control" type="text" name="telefone" id="telefone" value="<?php echo $telefone;?>"/>
    <br />
    <label for="email">Email</label>
    <input class="form-control" type="text" name="tel" id="email" value="<?php echo $email;?>" />
	<br />
    <label for="endereco">Endereço</label>
    <input class="form-control" type="text" name="endereco" id="endereco" value="<?php echo $endereco;?>"/>
    <br />
	<label for="cidade">Cidade:</label>
    <input class="form-control" type="text" name="cidade" id="cidade" value="<?php echo $cidade;?>"/>
    <br />
	</div>
    <input type="submit" name="submit_editar" id="editar" value="Gravar" class="btn btn-dark btn-block"  />
     <input type="submit" name="submit_deletar" id="deletar" value="Deletar"  class="btn btn-dark btn-block" />
<br />
  </p>
</form>
  </div>
</div>

<!-- jQuery, Popper.js, Bootstrap JS -->	
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
			$('.alert').alert()
	</script>
	

</body>
</html>

