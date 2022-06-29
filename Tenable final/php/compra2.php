<!DOCTYPE html>
<html lang="en">
<head>

    <title>PEDIDO</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" href="css2/footer.css" type="text/css">
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
form{
    height: 620px;
    width: 480px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
	
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
	border: 1px solid #fe9a2e;
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
.Seleção{
	display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
	border: 1px solid #fe9a2e;
	opacity:0.5;
	
	
}
     
    </style>
	 <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<header>
<div class="row">
		<div class="col-12">
		    <nav class="navbar fixed-top navbar-light bg-green navbar-expand-lg" style="background-color: #008B8B;> 

				<a href="index.php" class="navbar-brand">
					<a href="../index.html"><IMG class="displayed" src="../img/Tenable.gif" style="height:100px" ></a>
				</a>
				
				<div class="collapse navbar-collapse justify-content-between" id="nav1">
					<ul class="navbar-nav">
						&nbsp;&nbsp;&nbsp;<A HREF="index.html"><b><font color="#DCDCDC">Principal</font></b></A> &nbsp;&nbsp;&nbsp;&nbsp;
						<A HREF="peças.html"><b><font color="#DCDCDC">Novidades</font></b></A> &nbsp;&nbsp;
						<A href="../php/loginFinal.php"><b><font color="#DCDCDC">Entrar</font></b></A>&nbsp;&nbsp;&nbsp;
						<A href="Faleconosco.html"><font color="#DCDCDC"><b>Contato</font></b></A> &nbsp;&nbsp;
						<A href="parcerias.html"><font color="#DCDCDC"><b>Parcerias</font></b></A>&nbsp;&nbsp;&nbsp;&nbsp;
						<A href="php/compra2.php"><font color="#DCDCDC"><b>Compras</font></b></A> 
						<h1><marquee  style="color:red"> Futuramente será conectado ao banco de dados</font></marquee><h1>
						  
																								
					</ul>
					
				</div>
			</nav>
			
		
		</div>					
	</div>
	</header>
 
	
			<form>
				<div class="foto">	
									<IMG src="../img/19.jpg" width="210" height="100" >
									
								</div>
								<b><label>Cliente :</label></b>
					<select name="select">
					  <option value="valor1">Maria das Graças</option>
					  <option value="valor2" selected>Jose da Silva</option>
					  <option value="valor3">Elisabeth Albuquerque</option>
					</select>
					<br>			
				<b><label>Forma de pagamento :</label></b>
				<select name="select">
					  <option value="valor1">A vista</option>
					  <option value="valor2" selected>Credito</option>
					  <option value="valor3">Debito</option>
					  <option value="valor3">Pix</option>
					</select>
					<br>	
				<b><label>Produto :</label></b><select name="select">
					  <option value="valor1">Calça florida</option>
					  <option value="valor2" selected>Blusa algodão cru</option>
					  <option value="valor3">Shorts de algodão verde</option>
					</select>
					<br>
				
				
				<input type="submit" value="Ok">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="reset" value="Limpar">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type='button' onclick="window.location='../index.php';" value="Voltar">
				
			</form>
			
			
			
			
	
	
</body>
</html>
