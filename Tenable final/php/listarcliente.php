
}<?php
require_once('conexao.php');


$query_select_cadastros="SELECT * FROM cadastro";
$sql_select_cadastros=mysqli_query($conexao,$query_select_cadastros);
//$sql_select_cadastros=myscli_query($query_select_cadastros);
if($sql_select_cadastros == false)
	{
	echo "FALHA AO CONSULTAR A TABELA";
	exit;
	}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link href="../css2/bootstrap.min.css" rel="stylesheet">
	<style>


	</style>
	<title>cadastros de clientes</title>
</head>

<body style="margin-top: 100px">
<!-- usando o container fluid -->
<body style="margin-top: 100px">
<!-- usando o container fluid -->
<div class="container-fluid">
	<div class="row">
		<div class="col-12">
		    <nav class="navbar fixed-top navbar-light bg-green navbar-expand-lg" style="background-color: #008B8B;> 

				<a href="index.php" class="navbar-brand">
					<a href="../index.html"><IMG class="displayed" src="../img/Tenable.gif" style="height:100px" ></a>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav1" >
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-between" id="nav1">
					<ul class="navbar-nav">
						&nbsp;&nbsp;&nbsp;<A HREF="../index.html"><b><font color="#DCDCDC">Principal</font></b></A> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<A HREF="../peças.html"><b><font color="#DCDCDC">Novidades</font></b></A> &nbsp;&nbsp;&nbsp;
						<A href="loginFinal.php"><b><font color="#DCDCDC">Entrar</font></b></A>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<A href="../Faleconosco.html"><font color="#DCDCDC"><b>Contato</font></b></A> &nbsp;&nbsp;&nbsp;
						<A href="../parcerias.html"><font color="#DCDCDC"><b>Parcerias</font></b></A>
						  
																								
					</ul>
					
				</div>
			</nav>
			
		
		</div>					
		</div>
	<div class="row">
		
	
	 <header class="header">
	 
				
				<div class="row">
					<div id="div_p2">
						<nav class="header__menu">
						
						
						
						</nav>
					</div>	
				</div>
		</header>	
	
<div class="container-fluid">
<div class="table-responsive-sm">
 <table class="table table-striped table-info table-hover fixed">

  <thead>    
  <tr>
    <td><b><font color="red">CPF:</font></b></td>
    <td><b><font color="red">RG:</font></b></td>
    <td><b><font color="red">Nome:</font></b></td>
    <td><b><font color="red">Data de Nascimento:</font></b></td>
    <td><b><font color="red">Telefone:</font></b></td>
	<td><b><font color="red">Email:</font></b></td>
	<td><b><font color="red">Endereço:</font></b></td>
	<td><b><font color="red">Cidade:</font></b></td>
    <td  colspan="2"><b><font color="red">Ações</font></b></td>
    </tr>
   </thead>    
<?php  
if(mysqli_num_rows($sql_select_cadastros) > 0)
{
   while($array_select_cadastros=mysqli_fetch_array($sql_select_cadastros))
	{
		$id_cadastro=$array_select_cadastros["id_cadastro"];
		$cpf=$array_select_cadastros["cpf"];
		$rg=$array_select_cadastros["rg"];		
		$nome=$array_select_cadastros["nome"];
		$datanasc=($array_select_cadastros["datanasc"]);
		$telefone=$array_select_cadastros["telefone"];
		$email=$array_select_cadastros["email"];
		$endereco=$array_select_cadastros["endereco"];
		$cidade=$array_select_cadastros["cidade"];		

 echo
 " <tbody>
   <tr>
    <td>$cpf</td>
    <td>$rg</td>
	<td>$nome</td>
	<td>$datanasc</td>
	<td>$telefone</td>
    <td>$email</td>
    <td>$endereco</td>
    <td>$cidade</td>
	<td><a href=\"editar_cadastro.php?id_cadastro=$id_cadastro\" class='btn btn-dark'>Editar</a></td>
	<td><a href=\"deletar_cliente.php?id_cadastro=$id_cadastro\"class='btn btn-dark'>Deletar</a></td>
  </tr>
  </tbody>
  ";
	}
}
?>
</table>
</div>	
</div>	
		</div>
	</div>			
</div>
<!-- jQuery, Popper.js, Bootstrap JS -->	
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>


 




