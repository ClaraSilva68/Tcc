<!DOCTYPE html>
<html lang="pt-br">

 <head>
    <meta charset="utf-8">

  <!-- Design by foolishdeveloper.com -->
    <title>Contato</title>
 
  
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
	background-image: url(fundo.jpg); background-repeat: no-repeat;
	
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
    height: 600px;
    width: 980px;
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
	margin-top:30px;
	margin-bottom:20px;
	
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
    width: 300px;
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
    margin-top: 50px;
    width: 100%;
    background-color: #7ed957;
    color: #080710;
    padding: 10px 0;
    font-size: 18px;
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
</head>
<body>
	<div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
	 <header class="header">
	 
				
				<div class="row">
					<div id="div_p2">
						<nav class="header__menu">
						
						
						&nbsp;&nbsp;&nbsp;<A HREF="">Principal</A> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<A HREF="">Inspiração</A> &nbsp;&nbsp;&nbsp;
						<A HREF="">Compras</A> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<A HREF="">Contato</A> &nbsp;&nbsp;&nbsp;
						<A HREF="">Parcerias</A>
						  
						</nav>
					</div>	
				</div>
		</header>	


<body>

	<h1>Pagina em construção.</h1>
		
	
<div class="tudo">	
	<div class="container">	
		<div style='position:relative; top:0px; left:0px;'>	
			<img src="../img/compra.jpg"    />
		</div>					
	<div style='position:absolute; top:200px; left:500px;'>		
		<div class="box">
			<form  action="incluircompra.php" method="post">
			
			
				<label>Valor :</label></b><input type="decimal"   name="valor" style="width: 345px"><br><br>	
				<label>Cliente :</label></b>
					<select name="select">
					  <option value="valor1">cliente 1</option>
					  <option value="valor2" selected>cliente 2</option>
					  <option value="valor3">cliente 3</option>
					</select>
					<br><br>				
				<b><label>Forma de pagamento :</label></b>
				<select name="select">
					  <option value="valor1">A vista</option>
					  <option value="valor2" selected>Credito</option>
					  <option value="valor3">Debito</option>
					  <option value="valor3">Pix</option>
					</select>
					<br><br>	
				<b><label>Produto :</label></b><select name="select">
					  <option value="valor1">123456</option>
					  <option value="valor2" selected>2345</option>
					  <option value="valor3">1267</option>
					</select>
					<br><br>	
							
				<input type="submit" value="Ok">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="reset" value="Limpar">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type='button' onclick="window.location='../index.php';" value="Voltar">
			</form>
		</div>
   </div>
   	</div>
	
   </div> 
   
 </body>
</html>
