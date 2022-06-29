<?php
// Incluir arquivo de configuração
require_once "config.php";
 
// Defina variáveis e inicialize com valores vazios
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processando dados do formulário quando o formulário é enviado
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validar nome de usuário
    if(empty(trim($_POST["username"]))){
        $username_err = "Por favor coloque um nome de usuário.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "O nome de usuário pode conter apenas letras, números e sublinhados.";
    } else{
        // Prepare uma declaração selecionada
        $sql = "SELECT id FROM users WHERE username = :username";
        
        if($stmt = $pdo->prepare($sql)){
            // Vincule as variáveis à instrução preparada como parâmetros
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            
            // Definir parâmetros
            $param_username = trim($_POST["username"]);
            
            // Tente executar a declaração preparada
            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                    $username_err = "Este nome de usuário já está em uso.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde.";
            }

            // Fechar declaração
            unset($stmt);
        }
    }
    
    // Validar senha
    if(empty(trim($_POST["password"]))){
        $password_err = "Por favor insira uma senha.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "A senha deve ter pelo menos 6 caracteres.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validar e confirmar a senha
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Por favor, confirme a senha.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "A senha não confere.";
        }
    }
    
    // Verifique os erros de entrada antes de inserir no banco de dados
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare uma declaração de inserção
        $sql = "INSERT INTO users (username, password) VALUES (:username, :password)";
         
        if($stmt = $pdo->prepare($sql)){
            // Vincule as variáveis à instrução preparada como parâmetros
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            $stmt->bindParam(":password", $param_password, PDO::PARAM_STR);
            
            // Definir parâmetros
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Tente executar a declaração preparada
            if($stmt->execute()){
                // Redirecionar para a página de login
				
                header("location: log.php");
            } else{
                echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde.";
            }

            // Fechar declaração
            unset($stmt);
        }
    }
    
    // Fechar conexão
    unset($pdo);
}
?>
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<link rel="stylesheet" type="text/css" ">
      
        <!-- title of site -->
        <title>Novo cadastro</title>

        <!-- For favicon png -->
		<link rel="shortcut icon" type="image/icon" href="../img/favicon.png"/>   
	
       
        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">	
	
        <!--style.css-->
        <link rel="stylesheet" href="../css/login.css">
		
       
       
</head>
<body>
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
	
		
			<div id="container">
				
					<h2>Novo cadastro</h2>
				
			</div>
	

			
			<div class="tudo">			
													
			
				<div class="box"  >
					
						
						
					
					<div class="wrapper">
						<div class="top">
							<h1>Cadastro</h1>
						</div>
						
						<p>Por favor, preencha este formulário para criar uma conta.</p>
						<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
							<div class="form-group">
								<br/>
								<label>Nome do usuário</label><br/>
								<input type="text" style="width:400px" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
								<span class="invalid-feedback"><?php echo $username_err; ?></span><br/>
							</div>    
							<div class="form-group">
							<br/><br/>
								<label>Senha</label><br/>
								<input type="password" style="width:400px"  name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
								<span class="invalid-feedback"><?php echo $password_err; ?></span>
							</div>
							<div class="form-group">
							<br/><br/>
								<label>Confirme a senha</label><br/>
								<input type="password" style="width:400px" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
								<span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
							</div>
						<div class="form-group">
						<br/><br/>
						<input type="image" src="https://bit.ly/3i38DsL" style="border: double;" height="30" width="100" class="btn criar" value="Criar Conta"><br/><br/> 
						
						</div>	
											
						<p>Já tem uma conta? <a href="log.php">Entre aqui</a>.</p>
					</form>
				</div>
		
			</div> 
				
		</div>    
</body>
</html>