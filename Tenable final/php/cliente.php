
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<title>Clientes</title>
</head>
<body style="margin-top: 100px">
<!-- usando o container fluid -->
<div class="container-fluid">
	<div class="row">
		<div class="col-12">
		    <nav class="navbar fixed-top navbar-light bg-dark navbar-expand-lg"> 
<!--<nav class="navbar fixed-top navbar-primary navbar-expand-lg" style="background-color:#8B0000-->
				
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav1" >
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-between" id="nav1">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a href="incluircadastro.php" class="btn btn-dark">Contato</a>
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

 
</head>

<body>
 &nbsp; &nbsp;
<a href="cadastrocliente.php" class="btn btn-dark">Cadastro de cliente</a> <br /><br />
 
<font style="background-color: #668B8B;font-size: 14px  ">


<div class="container-fluid">
<div class="table-responsive-sm">
 <table class="table table-striped table-dark table-hover">
<thead>
  <th>CPF </th>
  <th>RG </th>
  <th>Nome </th>
  <th>Data Nascimento </th>
  <th>Telefone </th>
  <th>Email</th>
  <th>Endereco</th>
  <th>Cidade</th>
  <th colspan="2">AÇOES </th>
 </thead> 
 
</font>
 



<?php  
                     
if(mysqli_num_rows($sql_select_cadastro) > 0)
{
   while($array_select_cadastro=mysqli_fetch_array($sql_select_cadastro))
	{
		$id_cadastro=$array_select_cadastro["id_cadastro"];
		$cpf=$array_select_contato["cpf"];
		$rg=$array_select_contato["rg"];
		$nome=$array_select_contato["nome"];
		$datanasc=$array_select_contato["datanasc"];
		$telefone=$array_select_contato["telefone"];
		$email=$array_select_contato["email"];
		$endereco=$array_select_contato["endereco"];
		$cidade=$array_select_contato["cidade"];
         		
        $nome=$array_select_contato["nome"]; 
		
 echo
 "  <tbody>
    <tr>

    <td>cpf</td>
    <td>$rg</td>
	<td>$nome</td>
	<td>$datanasc</td>
    <td>&nbsp;&nbsp;&nbsp;";
	echo $telefone."&nbsp;&nbsp;&nbsp;</td>"; 
	
    echo "<td>$email</td>";
    </tr> </tbody>
  ";
	}
}

?>
   </div>
<div>

</table>

<!-- jQuery, Popper.js, Bootstrap JS -->	
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>


 




</body>
</html>


</body>
</html>
