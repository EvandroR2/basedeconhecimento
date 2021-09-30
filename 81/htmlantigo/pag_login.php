<?php
//CONEXAO
require_once 'db_connect.php' ;
//sessao
session_start(); 


//BOTAO ENVIAR
	if (isset($_POST['btn-entrar'])):
	$erros = array();
	$login = mysqli_escape_string ($connect , $_POST['login']);
	$senha = mysqli_escape_string ($connect , $_POST['senha']);

			if (empty ($login) or ($senha)) :
			$erros [] = "<li> O Campo Login/senha precisa ser preenchido</li>";
			else:
			$sql =  "select US_LOGIN from usuarios where US_LOGIN = '$login'";
			$resultado = mysqli_query ($connect , $sql) ;
				if(mysqli_num_rows($resultado) > 0 ):
				$senha = md5 ($senha);	
				$sql =  "select * from usuarios where US_LOGIN = '$login' AND US_SENHA = '$senha'";
				$resultado = mysqli_query ($connect , $sql) ;
					if(mysqli_num_rows($resultado) == 1 ):
					$dados = mysqli_fetch_array($resultado);
					$_SESSION['logado'] = true ;
					$_SESSION['US_COD'] = $dados ['cod'];
					header ('location: framevideo1.1abeturadecaixa.html');
					else:
					$erros [] = "<li> usuario não bate </li>" ;
					endif;
				else:
					$erros[] = "<li>cadastre seu usuario primeiro</li>";
				endif;
			endif;
	endif;
?>
<html>
  <head>
  <title>LOGIN</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="css/estilologin.css" />
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lexend+Deca&display=swap" rel="stylesheet">
  <script src="js/login.js"></script>
  </head>
<body>
  <div class="login-page">
  <div class="form">
    <form class="register-form">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form" form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="P1OST">
      <input type="text" placeholder="Nome"  name="login"/>
      <input type="password" placeholder="Senha"  name="senha"/>
      <button type="submit" name="btn-entrar">ENTRAR</button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
      <?php
	if (!empty($erros)):
		foreach ($erros as $erro):
		echo $erro;
		endforeach;
	endif;
	?>
    </form>
  </div>
  </div>
</body>
	