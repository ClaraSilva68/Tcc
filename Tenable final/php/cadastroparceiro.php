
<!DOCTYPE html>
<html lang="pt-br">

 <head>
    <meta charset="utf-8">

  
    <title>Cliente</title>
 
  
    <!--Stylesheet-->
    <style media="screen">


      *,
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
	background-image: url(../fundo.jpg); background-repeat: no-repeat;
	 overflow:auto;
}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}
.shape:first-child{
    background: linear-gradient(
        #1845ad,
        #23a2f6
    );
    left: -80px;
    top: -80px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        #ff512f,
        #f09819
    );
    right: -30px;
    bottom: -80px;
}
 
	 .container-fluid{
    height: 750px;
    width: 500px;
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
	margin-top:125px;
	 margin-bottom:5px;
	 padding-bottom:10px;}
	
	

 h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 10px;
    font-size: 16px;
    font-weight: 500;
	
}
input{
    display: block;
    height: 30px;
    width: 400px;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 0px;
    font-size: 14px;
    font-weight: 300;
	border: 1px solid #fe9a2e;
}
::placeholder{
    color:#E0FFFF;
}
button{
    margin-top: 50px;
    width: 100px;
	height: 50px;
    background-color: #7ed957;
    color: #080710;
    padding: 15px 0;
    font-size: 20px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
	border: 1px solid #fe9a2e;
}

.container{
padding:0;}

 a {
  position: relative;
  color: #080710;
  text-decoration: none;  
}

a:before {
  content: "";
  position: absolute;
  width: 100%;
  height: 3px;
  bottom: 0;
  left: 0;
  background-color: #ADFF2F;
  visibility: hidden;
  -webkit-transform: scaleX(0);
  transform: scaleX(0);
  -webkit-transition: all 0.3s ease-in-out 0s;
  transition: all 0.3s ease-in-out 0s;
}

a:hover:before {
  visibility: visible;
  -webkit-transform: scaleX(1);
  transform: scaleX(1);
}
   

 </style>
<link href="grid/simple-grid.min.css" rel="stylesheet">

		</script>
</head>
<body>
	<div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
	<div class="row">
		<div class="col-12">
		    <nav class="navbar fixed-top navbar-light bg-green navbar-expand-lg" style="background-color: #008B8B;> 

				<a href="index.php" class="navbar-brand">
					<a href="../index.html"><IMG class="displayed" src="../img/Tenable.gif" style="height:100px" ></a>
				</a>
				
				<div class="collapse navbar-collapse justify-content-between" id="nav1">
					<ul class="navbar-nav">
						&nbsp;&nbsp;&nbsp;<A HREF="../index.html"><b><font color="#DCDCDC">Principal</font></b></A> &nbsp;&nbsp;&nbsp;&nbsp;
						<A HREF="../peças.html"><b><font color="#DCDCDC">Novidades</font></b></A> &nbsp;&nbsp;
						<A href="loginFinal.php"><b><font color="#DCDCDC">Entrar</font></b></A>&nbsp;&nbsp;&nbsp;
						<A href="../Faleconosco.html"><font color="#DCDCDC"><b>Contato</font></b></A> &nbsp;&nbsp;
						<A href="../parcerias.html"><font color="#DCDCDC"><b>Parcerias</font></b></A>
						  
																								
					</ul>
					
				</div>
			</nav>
			
		
		</div>					
	</div>
		
		
		<div class="container-fluid">	
		
				
			 <div class="row">
				<div class="container">
				<h2> Cadastro de Parcerias </h2>
				<form  action="incluirparceiro.php" method="post">				
												
					<div class="col-md-6 ">
				
						
							<label><b>CNPJ :</label></b>
							<input name="cnpj" type="text" > <br>
							
							<label><b>Nome Fantasia  :</label></b>
							<input type="text" name="nomeFantasia" ><br>
							
							<label><b>Razao Social :</label></b>
							<input type="text"   name="razaoSocial" ><br>
							
							<label><b>Atividades desenvolvidas :</b> 
							<input type="text" name="descricao">
							
					</div>	
				
					<div class="col-md-6 ">
							
							<label><b>Telefone  :</b>
							<input type="text" name="telefone"> <br>
							
							<label><b>EMail  : </b>
							<input type="text"   name="email"  placeholder= "cliente@email.com" > <br>
							
							<label><b>Endereço  : </b>
							<input type="text"   name="endereco" > <br>
							
							<label><b>Cidade  :   </b>
							<input type="text"   name="cidade"> 
							
					</div>	
				
				</div>	
				</div>		
						<div class="row">
						<div class="container">
						<div class="col-md-4 ">
							<button><a type="submit"  width="50px" class="btn btn-success">Enviar</a></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												
								
								<button><a href="listarparceiro.php" class="btn btn-success">Editar</a></button>
						</div>
					</div>		
						
					</div>
			</form>	
		</div>
				
		
</body>
</html>
