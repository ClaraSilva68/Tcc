<?php
require_once('conexao.php');


if(isset($_GET["id_parceiro"])) 
{
	$id_parceiro=$_GET["id_parceiro"];
}
elseif(isset($_POST["id_parceiro"]))
{
	$id_parceiro=$_POST["id_parceiro"];
}	
else
echo "ERRO";



	$query_select_parceiro_id="SELECT * FROM parceiro WHERE id_parceiro=$id_parceiro";
	$sql_select_parceiro_id=mysqli_query($conexao,$query_select_parceiro_id);

	if($sql_select_parceiro_id == false)
	{
		
		echo "FALHA AO CONSULTAR parceiro FAVOR ENTRAR EM contato COM O ADMINISTRADOR";
		exit;
	}
	
	while($array_select_parceiro_id=mysqli_fetch_array($sql_select_parceiro_id))
	{
		$id_parceiro=$array_select_parceiro_id["id_parceiro"];
		$cnpj=$array_select_parceiro_id["cnpj"];
		$nomeFantasia=$array_select_parceiro_id["nomeFantasia"];
		$razaoSocial=$array_select_parceiro_id["razaoSocial"];
		$descricao=$array_select_parceiro_id["descricao"];
		$telefone=$array_select_parceiro_id["telefone"];	
		$email=$array_select_parceiro_id["email"];	
		$endereco=$array_select_parceiro_id["endereco"];	
		$cidade=$array_select_parceiro_id["cidade"];		
	}
	if(isset($_POST['submit_editar']))
	{
	     $id_parceiro=$_POST['id_parceiro'];
		 
		 $cnpj=$_POST['cnpj'];
		 $nomeFantasia=$_POST['nomeFantasia'];
	     $razaoSocial=$_POST['razaoSocial'];
	     $descricao=$_POST['descricao'];
	     $telefone=$_POST['telefone'];	     
		 $email=$_POST['email'];
		 $endereco=$_POST['endereco'];	
		 $cidade=$_POST['cidade'];	
		 	 
		 $query_update="UPDATE parceiro SET cnpj='$cnpj', nomeFantasia='$nomeFantasia', razaoSocial='$razaoSocial',descricao='$descricao',telefone='$telefone',email='$email', endereco='$endereco', cidade='$cidade' WHERE id_parceiro=$id_parceiro";
		 
		 $sql_update=mysqli_query($conexao,$query_update);
		 if($sql_update == true)
		 {
		   echo"<script type=\"text/javascript\">alert('DADOS EDITADOS COM SUCESSO');</script>";
		    header("Location:listarparceiro.php");
 
		 }
		 else
         echo"<script type=\"text/javascript\">alert('FALHA AO EDITAR. ENTRE EM parceiro COM O ADMINISTRADOR DO SITE');</script>";	 		 		 
	}
if(isset($_POST['submit_deletar']))
	{
	
  
	
  $id_parceiro=$_GET["id_parceiro"];
  //$query="DELETE FROM parceiro WHERE id_parceiro={$_GET['id_parceiro']}";
  $query="DELETE FROM parceiro WHERE id_parceiro=$id_parceiro";
  $sql=mysqli_query($conexao,$query);
  
  if($sql)
  {
	   header("Location:listarparceiro.php");
  }
  else
  {
	echo"<script type=\"text/javascript\">alert('FALHA AO DELETAR.ENTRE EM parceiro COM O ADMINISTRADOR DO SITE');</script>";    
	exit;
  }
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
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
   
	height: 100%;
	font-family: "Montserrat", sans-serif;
	-webkit-font-smoothing: antialiased;
	background-image: url(../fundo.jpg); background-repeat: repeat;
	 overflow:auto;
}
.background{
    width: 430px;
    height: auto;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.container{
    height: auto;
    width: 680px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 20px;
	margin-top:200px;
	margin-bottom:20px;
	
}
.box{
	margin-top:100px;
	align-itens: center;
}

::placeholder{
    color:#E0FFFF;
}



	</style>
	
	<title>Editar parceiros</title>
</head>
<body style="margin-top: 100px">
<!-- usando o container fluid -->

<div class="container">
	
	
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
		
	<div class="box">
		<div class="row">
			<a href="listarparceiro.php" class="btn btn-success btn-block">Listar parceiros</a> <br />	<br />	
			<div class= "informar"  style="width:650px"">
			<form id="form_agenda" name="form_agenda" method="post" action="">
			<div class="listarbig"> 
			  <p>
				<input class="form-control" type="hidden" name="id_parceiro" value="<?php echo $id_parceiro;?>"/>
				<label for="cnpj">CNPJ:</label>
				<input class="form-control" type="text" name="cnpj" id="cnpj" value="<?php echo $cnpj;?>"/>
				<br />
				<label for="nomeFantasia">Nome Fantasia:</label>
				<input class="form-control" type="text" name="nomeFantasia" id="nomeFantasia" value="<?php echo $nomeFantasia;?>"/>
				<br />
				<label for="razaoSocial">Razão Social:</label>
				<input class="form-control" type="text" name="razaoSocial" id="razaoSocial" value="<?php echo $razaoSocial;?>"/>
				<br />
				<label for="descricao">Descrição</label>
				<input class="form-control" type="text" name="descricao" id="descricao" value="<?php echo $descricao;?>" />
				 <br />
				 <label for="telefone">Telefone</label>	
				<input class="form-control" type="text" name="telefone" id="telefone" value="<?php echo $telefone;?>"/>
				<br />
				<label for="email">Email</label>	
				<input class="form-control" type="text" name="email" id="email" value="<?php echo $email;?>"/>
				<br />
				 <label for="endereco">Endereço</label>	
				<input class="form-control" type="text" name="endereco" id="endereco" value="<?php echo $endereco;?>"/>
				<br />
				 <label for="cidade">Cidade</label>	
				<input class="form-control" type="text" name="cidade" id="cidade" value="<?php echo $cidade;?>"/>
				<br />
				</p>
			
				
			</div>
			<input type="submit" name="submit_editar" id="editar" value="Gravar" class="btn btn-success btn-block"  />
			
			
			  </p>
			</form>
			</div>
		</div>
	</div>
</div>
<!-- jQuery, Popper.js, Bootstrap JS -->	
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script>
			$('.alert').alert()
	</script>
	

</body>
</html>

