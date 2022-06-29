
<!DOCTYPE html>
<html lang="pt-br">

 <head>
    <meta charset="utf-8">

  <!-- Design by foolishdeveloper.com -->
    <title>Novo produto</title>
 
  
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
    height: 730px;
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
	
}

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
    height: 50px;
    width: 450px;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
	border: 1px solid #fe9a2e;
}
::placeholder{
    color:#E0FFFF;
}
button{
    margin-top: 20px;
    width: 300px;
    background-color: #7ed957;
    color: #080710;
    padding: 10px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
	border: 1px solid #fe9a2e;
}




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
   
  .foto{
	width:100%;
	height:10%;
	margin-top:23px;
	  
  } 
 </style>
<link href="grid/simple-grid.min.css" rel="stylesheet">
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
						&nbsp;&nbsp;&nbsp;<A HREF="../index.html"><b><font color="#DCDCDC">Principal</font></b></A> &nbsp;&nbsp;&nbsp;
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
							
					<form action="upload.php" method="post" enctype="multipart/form-data">
						
						<label for="id_produto"><b>Codigo do produto:</b></label> <input type="number" name="id_produto" id="id_produto" />
						<br />
						<label for="nomeProduto"><b>Descricao:</b></label> <input type="text" name="nomeProduto" id="nomeProduto" />
						<br />
						<label for="valor"><b>Valor:</b></label> <input type="text" name="valor" id="valor" />
																				
							<label><b><h2>Tamanho</h2></label></b>	
							<select  id="tamanho" style="width:200px" onChange="update()">
								<option value="adm">Pequeno</option>
								<option value="cli">Medio</option>
								<option value="par">Grande</option>
								<option value="par">X-G</option>
							</select>
						<input type="text" id="text" hidden>						
						<script type="text/javascript">
							function update() {
								var select = document.getElementById('tamanho');
								var option = select.options[select.selectedIndex];							
								document.getElementById('text').value = option.text;
							}
							update;
						</script>
						
						<label for="cor"><b>Cor:</b></label> <input type="text" name="cor" id="cor" />
						<br />
						<label for="foto"><b>Imagem:</b></label> <input type="file" name="foto" id="foto" />
						<br />
						
						<input type="submit" value="Enviar" />
					
					</form>
				</div>
			</div>
			
		</div>
	<input type='button' onclick="window.location='listarproduto.php';" value="Voltar">
	</body>
</html>
