<!DOCTYPE html>
<html lang="en">
<head>

    <title>Opção</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" href="../css2/footer.css" type="text/css">
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
   margin: 0px;
	
	background-image: url(../fundo.jpg); background-repeat: no-repeat;
}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
	opacity:0,5;
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

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
	
}

::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 50px;
    width: 100%;
    background-color: #7ed957;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;	
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
	border: 1px solid #fe9a2e;
}

	
	.box {
width: 470px;
height: 450px;
	border: 1px solid #fe9a2e;
	margin 0 auto;
	padding:20px;

}
	
.container {
width: 100vw;
height: 100vh;

display: flex;
flex-direction: row;
justify-content: center;
align-items: center;
}	
}

p{
	color:#2F4F4F;
	text-decoration: underline;
	
	
}
     
	 .container-fluid{
    height: 540px;
    width: 530px;
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
	margin-top:15px;
	 margin-bottom:15px;}
	
	.input {
    width:100px;
    height:22px;
    padding:0;
    margin:0;
}
	a {
  position: relative;
  color: #080710;
  text-decoration: none;  
 font-size: 25px;
}

a:before {
  content: "";
  position: absolute;
  width: 100%;
  height: 4px;
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
	 <link href="css/bootstrap.min.css" rel="stylesheet">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
					
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
						&nbsp;&nbsp;&nbsp;<A HREF="../index.html"><b><font color="#DCDCDC">Principal</font></b></A> &nbsp;&nbsp;
						<A HREF="../peças.html"><b><font color="#DCDCDC">Novidades</font></b></A> &nbsp;&nbsp;
						<A href="loginFinal.php"><b><font color="#DCDCDC">Entrar</font></b></A>&nbsp;&nbsp;
						<A href="../Faleconosco.html"><font color="#DCDCDC"><b>Contato</font></b></A> &nbsp;&nbsp;
						<A href="../parcerias.html"><font color="#DCDCDC"><b>Parcerias</font></b></A>
						  
																								
					</ul>
					
				</div>
			</nav>
			
		
		</div>					
		</div>
        	
        		 
	
			<div class= "container-fluid">

					<div class="box">								
							<label><b><h2>Escolha sua opção de usuario</h2></label></b><br><br>	
						<select  id="usuario" style="width:200px" onChange="update()">
							<option value="adm">Administrador</option>
							<option value="cli">Cliente</option>
							<option value="par">Parceiro</option>
						</select>
						<input type="text" id="value" hidden>
						
						
						<script type="text/javascript">
							function update() {
								var select = document.getElementById('usuario');
								var option = select.options[select.selectedIndex];
								

								document.getElementById('value').value = option.value;
								document.getElementById('text').value = option.text;
							}
						update;
						</script>
						<script >

 

				   $(document).ready(function () {

					   $("#btnComparar").click(function () {

						  if ($("#usuario").val() == "adm") {

							   alert("Você é um administrador");
							   document.getElementById('senha').disabled=false;

							  $("#senha").focus();
						
						   } else if ($("#usuario").val() == "par"){
							   
						   window.location='cadastroparceiro.php';}
						   
							else{
							window.location='cadastrocliente.php';}
					   });

				   });

			  </script>
			  <button ID="btnComparar"  onclick="Comparar_Click">Clique aqui</button>
				
											
						<label><b><h3> para "ADMINISTRADOR" é necessário uma senha </h3></label></b><br>
						<input type="text" id="senha" value="" disabled="">
						
					
					<div class= "senha">
						<script >
				   $(document).ready(function  () {

					   $("#btnSenha").click(function () {

						  if ($("#senha").val() == "1234") {
							  
							   alert("Você pode cadastrar os produto");

							   window.location='cadastroproduto.php';}

							  

						    else {
								alert("tente novamente");

						   $("#senha").focus();}
							 

						  

					   });

				   });

			  </script>
			 </div>

				  <button ID="btnSenha"  onclick="Senha_Click">Clique aqui</button>
						
								
					</div>		
						
			</div>   
			
	
</body>
</html>
