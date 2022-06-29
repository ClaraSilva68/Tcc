<!doctype html>
<html class="no-js" lang="en">

    <head>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<link rel="stylesheet" type="text/css" ">
      
        <!-- title of site -->
        <title>Parceiro</title>

        <!-- For favicon png -->
		<link rel="shortcut icon" type="image/icon" href="../img/favicon.png"/>
       
     

       
        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
	
        <!--style.css-->
        <link rel="stylesheet" href="../css/cadastro_geral.css">
		
        
       
    </head>
	
	<body   >
	<header><!-- Início header -->	
	
		<div class="banner">	
		
			<div style='position:relative; top:0px';>
					<img  src="../img/banner1.jpg"     />
			</div>					
				
			<div class="transparente">
				
				<div style='position:absolute; top:190px; left:300px; right:300px;'>	
				<p>
				<marquee> <font face=URW Chancery L, cursive size =7 color=#B0E0E6 > Moda sustentável é aqui</font></marquee>
				</p>
			</div>	
		</div>
	
	</header>	
	
		<section id="parceiro" class="parceiro">
				<div id="container">
					
						<h2>Cadastro de parceiro</h2>
				</div>
		</section>

			
			<div class="tudo">	
				
				<div class= "container">
					<div class="box">
						<form  action="incluir.php" method="post">
				
							<br>					
							<b><label>   CNPJ :</label></b><br>
							<input type="number" name="cnpj" placeholder= "XX.XXX.XXX/0001-XX" ><br>
							
							<b><label>Nome Fantasia :</label></b><br>
							<input type="text"   name="nomeFantasia"> <br>
							
							<b><label>Razão Social :</label></b><br>
							<input type="text"   name="razaoSocial"> <br>
							
							<b>Descrição :</b> <br>
							<input type="text" name="descricao"> <br>
							
							<b>Telefone  :     </b><br>
							<input type="number" name="telefone" > <br>
							
							<b>EMail  : </b><br>
							<input type="text"   name="email" placeholder= "cliente@email.com"  > <br>
							
							<b>Endereço  : </b><br>
							<input type="text"   name="endereco"  > <br>
							
							<b>Cidade  :   </b><br>
							<input type="text"   name="cidade"   > <br><br>
							
							<div class="text-center">	
								<input type="submit" class="btn btn-info" value="Ok">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
								<input type="reset" class="btn btn-info" value="Limpar">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
								<input type='button' class="btn btn-info" onclick="window.location='../index.php';" value="Voltar"><br>
							</div>
						</form>
					</div>	
				</div>   
			</div>
 </body>
</html>
